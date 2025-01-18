function showPopup(message, timeout = 5000) {
const popup = document.getElementById("popup");
popup.textContent = message;

    popup.classList.add("show");

    setTimeout(() => {
        popup.classList.remove("show");
    }, timeout);
};

