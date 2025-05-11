document.addEventListener("turbo:load", () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    });
    document
        .querySelectorAll(".scroll-animate")
        .forEach((element) => observer.observe(element));
});
// turbo:load
