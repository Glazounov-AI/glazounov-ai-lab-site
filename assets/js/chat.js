document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.getElementById("ai-chat-toggle");
    const panel = document.getElementById("ai-chat-panel");
    const close = document.getElementById("ai-chat-close");
    const form = document.getElementById("ai-chat-form");
    const input = document.getElementById("ai-chat-input");
    const messages = document.getElementById("ai-chat-messages");

    if (!toggle || !panel || !close || !form || !input || !messages) {
        return;
    }

    function setOpen(isOpen) {
        panel.hidden = !isOpen;
        toggle.setAttribute("aria-expanded", String(isOpen));
        toggle.setAttribute(
            "aria-label",
            isOpen ? "Закрыть AI-консультанта" : "Открыть AI-консультанта"
        );

        if (isOpen) {
            input.focus();
        } else {
            toggle.focus();
        }
    }

    function appendMessage(text, type) {
        const message = document.createElement("p");
        message.className = `ai-chat-message ai-chat-message-${type}`;
        message.textContent = text;
        messages.appendChild(message);
        messages.scrollTop = messages.scrollHeight;
    }

    toggle.addEventListener("click", () => {
        setOpen(panel.hidden);
    });

    close.addEventListener("click", () => {
        setOpen(false);
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape" && !panel.hidden) {
            setOpen(false);
        }
    });

    let activeTopic = "projects";

    const tabs = document.querySelectorAll(".ai-chat-tab");

    const greetings = {
        projects: "Расскажу о проектах Glazounov AI Lab. Какой проект вас интересует?",
        about: "Расскажу об опыте, компетенциях и направлениях работы. Что хотите узнать?"
    };

    tabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            activeTopic = tab.dataset.chatTopic;

            input.placeholder = activeTopic === "about"
                ? "Спросите обо мне..."
                : "Спросите о проектах...";

            tabs.forEach((item) => {
                const selected = item === tab;
                item.classList.toggle("is-active", selected);
                item.setAttribute("aria-pressed", String(selected));
            });

            const welcome = messages.querySelector(".ai-chat-welcome");
            if (welcome) {
                welcome.textContent = greetings[activeTopic];
            }
        });
    });

    form.addEventListener("submit", (event) => {
        event.preventDefault();

        const query = input.value.trim();

        if (!query) {
            return;
        }

        appendMessage(query, "user");
        input.value = "";

        appendMessage(
            "Демонстрационный режим. Подключение AI-ассистента будет добавлено позже.",
            "assistant"
        );
    });
});
