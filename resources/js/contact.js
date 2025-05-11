// document.addEventListener("turbo:load", () => {
//     const form = document.querySelector("form");
//     const errors = {};
//     function setError(fieldName, event, message = "Ce champ est requis") {
//         const field = form.querySelector(`[name="${fieldName}"]`);

//         if (field) {
//             event.preventDefault();
//             console.log(field);

//             field.classList.add("input-error");
//             const errorDiv = document.createElement("div");
//             errorDiv.className = "error";
//             errorDiv.textContent = message;
//             field.parentElement.appendChild(errorDiv);
//         }
//     }

//     form.addEventListener("submit", function (e) {
//         e.preventDefault();
//         const formData = new FormData(this);
//         const username = formData.get("username").trim();

//         const email = formData.get("email").trim();
//         const project = formData.get("project").trim();
//         const message = formData.get("message").trim();
//         if (!username) errors.username = "Le nom est requis.";
//         if (!email) {
//             errors.email = "L'email est requis.";
//         } else if (!/^\S+@\S+\.\S+$/.test(email)) {
//             errors.email = "L'email n'est pas valide.";
//         }
//         if (!project) errors.project = "Le sujet du projet est requis.";
//         if (!message) errors.message = "Le message est requis.";
//         let errorContainer = form.querySelector(".errors");
//         if (!errorContainer) {
//             errorContainer = document.createElement("div");
//             errorContainer.className = "errors";
//             form.prepend(errorContainer);
//         }
//         const errorsMessages = Object.values(errors);
//         if (errorsMessages.length > 0) {
//             errorContainer.innerHTML = errorsMessages.join("<br>");
//         } else {
//             errorContainer.innerHTML = "";
//         }
//         // form.submit();
//     });
// });
