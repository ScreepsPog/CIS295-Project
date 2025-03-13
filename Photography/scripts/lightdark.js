const toggleButton = document.getElementById("themeToggle");
const body = document.body;

// Function to get a cookie by name
function getCookie(name) {
    const cookies = document.cookie.split("; ");
    for (let cookie of cookies) {
        const [key, value] = cookie.split("=");
        if (key === name) return value;
    }
    return null;
}

// Check for theme preference in cookies
if (getCookie("theme") === "light") {
    body.classList.add("light-mode");
}

// Function to set a cookie
function setCookie(name, value, days) {
    const expires = new Date();
    expires.setTime(expires.getTime() + days * 24 * 60 * 60 * 1000);
    document.cookie = `${name}=${value}; expires=${expires.toUTCString()}; path=/`;
}

// Toggle theme and update the cookie
toggleButton.addEventListener("click", () => {
    body.classList.toggle("light-mode");

    if (body.classList.contains("light-mode")) {
        setCookie("theme", "light", 30); // Save for 30 days
    } else {
        setCookie("theme", "dark", 30);
    }
});