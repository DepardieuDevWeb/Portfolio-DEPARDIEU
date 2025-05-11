// const themeButton = document.getElementById("theme-button");
// const lightTheme = "light-theme";
// const iconTheme = "uil-moon";

// const selectedTheme = localStorage.getItem("selected-theme");

// const selectedIcon = localStorage.getItem("selected-icon");

// const getCurrentTheme = () =>
//     document.body.classList.contains(lightTheme) ? "light" : "dark";
// const getCurrentIcon = () =>
//     document.body.classList.contains(iconTheme) ? "uil-sun" : "uil-moon";

// if (selectedTheme) {
//     document.body.classList[selectedTheme === "light" ? "add" : "remove"](
//         lightTheme
//     );
//     themeButton.classList[selectedIcon === "uil-sun" ? "add" : "remove"](
//         iconTheme
//     );
// }

// themeButton.addEventListener("click", () => {
//     document.body.classList.toggle(lightTheme);
//     themeButton.classList.toggle(iconTheme);

//     localStorage.setItem("selected-theme", getCurrentTheme());
//     localStorage.setItem("selected-Icon", getCurrentIcon());
// });

const themeToggle = document.getElementById("theme-toggle"),
    html = document.documentElement,
    prefersDarkScheme = window.matchMedia(
        "(prefers-color-scheme:dark)"
    ).matches;

const currentTheme =
    localStorage.getItem("theme") || (prefersDarkScheme ? "dark" : "light");
html.setAttribute("data-theme", currentTheme);

// themeToggle.textContent = currentTheme === "dark" ? "Mode clair" : "Sombre";
themeToggle.addEventListener("click", () => {
    const newTheme =
        html.getAttribute("data-theme") === "dark" ? "light" : "dark";
    html.setAttribute("data-theme", newTheme);

    localStorage.setItem("theme", newTheme);
    // themeToggle.textContent = newTheme === "dark" ? "Mode clair" : "Sombre";
});
