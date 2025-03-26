const themeButton = document.getElementById("theme-button");
const lightTheme = "light-theme";
const iconTheme = "uil-moon";

const selectedTheme = localStorage.getItem("selected-theme");

const selectedIcon = localStorage.getItem("selected-icon");

const getCurrentTheme = () =>
    document.body.classList.contains(lightTheme) ? "light" : "dark";
const getCurrentIcon = () =>
    document.body.classList.contains(iconTheme) ? "uil-sun" : "uil-moon";

if (selectedTheme) {
    document.body.classList[selectedTheme === "light" ? "add" : "remove"](
        lightTheme
    );
    themeButton.classList[selectedIcon === "uil-sun" ? "add" : "remove"](
        iconTheme
    );
}

themeButton.addEventListener("click", () => {
    document.body.classList.toggle(lightTheme);
    themeButton.classList.toggle(iconTheme);

    localStorage.setItem("selected-theme", getCurrentTheme());
    localStorage.setItem("selected-Icon", getCurrentIcon());
});
