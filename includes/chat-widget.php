<div class="ai-chat" id="ai-chat">
    <button
        type="button"
        class="ai-chat-toggle"
        id="ai-chat-toggle"
        aria-label="Открыть AI-консультанта"
        aria-expanded="false"
        aria-controls="ai-chat-panel">
        <svg class="ai-chat-icon"
             xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="1.8"
             stroke-linecap="round"
             stroke-linejoin="round"
             aria-hidden="true">
            <path d="M20 11.5a8.5 8.5 0 0 1-8.5 8.5c-1.5 0-2.9-.4-4.1-1.1L3 20l1.4-4.4A8.5 8.5 0 1 1 20 11.5Z"/>
            <circle cx="8.5" cy="11.5" r=".8" fill="currentColor" stroke="none"/>
            <circle cx="12" cy="11.5" r=".8" fill="currentColor" stroke="none"/>
            <circle cx="15.5" cy="11.5" r=".8" fill="currentColor" stroke="none"/>
        </svg>
    </button>

    <section
        class="ai-chat-panel"
        id="ai-chat-panel"
        aria-label="AI-консультант Glazounov AI Lab"
        hidden>

        <div class="ai-chat-header">
            <div>
                <strong>AI-консультант</strong>
                <small>Glazounov AI Lab</small>
            </div>

            <button
                type="button"
                class="ai-chat-close"
                id="ai-chat-close"
                aria-label="Закрыть чат">×</button>
        </div>

        <div class="ai-chat-tabs" role="group" aria-label="Тема консультации">
            <button type="button" class="ai-chat-tab is-active"
                    data-chat-topic="projects" aria-pressed="true">
                Проекты
            </button>
            <button type="button" class="ai-chat-tab"
                    data-chat-topic="about" aria-pressed="false">
                Обо мне
            </button>
        </div>

        <div
            class="ai-chat-messages"
            id="ai-chat-messages"
            role="log"
            aria-live="polite">
            <p class="ai-chat-welcome">
                Здравствуйте! Я помогу разобраться в проектах
                Glazounov AI Lab. Что вас интересует?
            </p>
        </div>

        <form class="ai-chat-form" id="ai-chat-form">
            <label for="ai-chat-input" class="ai-chat-label">
                Ваш вопрос
            </label>

            <input
                type="text"
                id="ai-chat-input"
                name="query"
                placeholder="Спросите о проектах..."
                maxlength="8000"
                autocomplete="off"
                required>

            <button type="submit" id="ai-chat-send">
                Отправить
            </button>
        </form>
    </section>
</div>
