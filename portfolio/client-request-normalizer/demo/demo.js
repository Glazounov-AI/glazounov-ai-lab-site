'use strict';
const $ = id => document.getElementById(id);
const FIELDS = ['intent','item_type','item','brand','quantity','location','deadline'];
const METRICS = [
  ['json_validity','JSON Validity'],['schema_validity','Schema Validity'],
  ['intent_accuracy','Intent Accuracy'],['field_accuracy','Field Accuracy'],
  ['exact_match_rate','Exact Match']
];
const pct = n => `${(Number(n)*100).toLocaleString('ru-RU',{maximumFractionDigits:2})}%`;
const stringify = value => typeof value === 'string' ? value : JSON.stringify(value,null,2);
function parseOutput(raw) {
  if (typeof raw !== 'string') return {valid:false,value:null};
  try {return {valid:true,value:JSON.parse(raw)};} catch {return {valid:false,value:null};}
}
function make(tag, className, content) {
  const el=document.createElement(tag); if(className)el.className=className;
  if(content!==undefined)el.textContent=content; return el;
}
function renderMetrics(metrics) {
  const chart=$('metrics-chart');chart.replaceChildren();
  for(const [key,label] of METRICS){
    const section=make('div','demo-metric');section.append(make('div','demo-metric-label',label));
    const bars=make('div','demo-bars');
    for(const model of ['baseline','lora']){
      const val=Number(metrics[model][key]);
      const row=make('div','demo-bar-row');
      const track=make('div','demo-bar-track');
      const bar=make('div',`demo-bar ${model}`);
      bar.style.width=`${Math.min(100,Math.max(0,val*100))}%`;
      track.append(bar);row.append(track,make('span','demo-bar-value',pct(val)));bars.append(row);
    }
    section.append(bars);chart.append(section);
  }
}
function renderStatus(model, details, raw){
  const target=$(`${model}-status`);target.replaceChildren();
  const parsed=parseOutput(raw);
  const values=[['JSON',parsed.valid],['Схема',details?.schema_valid===true],['Полное совпадение',details?.exact_match===true]];
  for(const [label,ok] of values)target.append(make('span',ok?'ok':'bad',`${label}: ${ok?'да':'нет'}`));
}
function renderFields(example){
  const parsedB=parseOutput(example.baseline),parsedL=parseOutput(example.lora);
  const table=make('table','demo-table');
  const head=make('thead');const hr=make('tr');
  for(const name of ['Поле','Эталон','Baseline','LoRA'])hr.append(make('th','',name));
  head.append(hr);table.append(head);
  const body=make('tbody');
  for(const field of FIELDS){
    const tr=make('tr');tr.append(make('th','',field));
    const expected=example.expected?.[field];tr.append(make('td','',stringify(expected)));
    for(const parsed of [parsedB,parsedL]){
      const value=parsed.valid && parsed.value && typeof parsed.value==='object' ? parsed.value[field] : undefined;
      const equal=JSON.stringify(value)===JSON.stringify(expected);
      tr.append(make('td',equal?'match':'mismatch',value===undefined?'—':stringify(value)));
    }
    body.append(tr);
  }
  table.append(body);$('field-comparison').replaceChildren(table);
}
function renderExample(example, metrics){
  $('instruction').textContent=example.instruction;
  $('baseline-output').textContent=stringify(example.baseline);
  $('lora-output').textContent=stringify(example.lora);
  $('expected-output').textContent=stringify(example.expected);
  const i=Number(example.id)-1;
  renderStatus('baseline',metrics.baseline.details?.[i],example.baseline);
  renderStatus('lora',metrics.lora.details?.[i],example.lora);
  renderFields(example);
  $('example-count').textContent=`Пример ${example.id} из ${metrics.baseline.total}`;
}
async function init(){
  try{
    const response=await fetch('demo_data.json',{cache:'no-store'});
    if(!response.ok)throw new Error(`HTTP ${response.status}`);
    const data=await response.json();
    if(!Array.isArray(data.examples)||!data.metrics?.baseline||!data.metrics?.lora)throw new Error('Неверная структура данных');
    renderMetrics(data.metrics);
    const select=$('example-select');select.replaceChildren();
    data.examples.forEach((ex,i)=>{
      const option=make('option','',`${ex.id}. ${ex.instruction}`);option.value=String(i);select.append(option);
    });
    select.addEventListener('change',()=>renderExample(data.examples[Number(select.value)],data.metrics));
    if(data.examples.length)renderExample(data.examples[0],data.metrics);
  }catch(error){
    $('metrics-chart').textContent='Не удалось загрузить результаты.';
    $('load-error').hidden=false;
    $('load-error').textContent=`Ошибка загрузки демо: ${error.message}. Откройте страницу через HTTP(S), а не как локальный файл.`;
  }
}
init();
