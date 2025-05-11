import Sortable from "sortablejs";

document.addEventListener("turbo:load", function () {
    const imageInput = document.querySelector("#pictures");
    const previewContainer = document.querySelector("#preview-container");
    const featuredIndexInput = document.querySelector("#featured_index");
    let files = [];
    imageInput.addEventListener("change", (e) => {
        files = Array.from(e.target.files).map((file, index) => {
            file.customIndex = index;
            return file;
        });

        renderPreviews();
    });
    function renderPreviews() {
        previewContainer.innerHTML = "";
        files.forEach((file, index) => {
            console.log(file);

            const imgWrapper = document.createElement("div");
            imgWrapper.style.border =
                index === parseInt(featuredIndexInput.value)
                    ? "3px solid green"
                    : "1px solid #ccc";
            imgWrapper.style.cursor = "pointer";
            imgWrapper.style.padding = "5px";
            imgWrapper.dataset.index = index;

            const img = document.createElement("img");
            img.width = 120;
            img.draggable = false;
            const reader = new FileReader();
            reader.onload = (e) => {
                img.src = e.target.result;
            };

            reader.readAsDataURL(file);
            imgWrapper.appendChild(img);
            imgWrapper.addEventListener("click", () => {
                featuredIndexInput.value = index;
                renderPreviews();
            });
            previewContainer.appendChild(imgWrapper);
        });
        console.log(files);

        new Sortable(previewContainer, {
            draggable: "div",
            onEnd: (evt) => {
                const newOrder = Array.from(previewContainer.children);
                files = newOrder.map((item) => files[item.dataset.index]);
                newOrder.forEach((item, index) => {
                    item.dataset.index = index;
                });
                document.querySelector("#pictures_order").value = files
                    .map((file) => file.customIndex)
                    .join(",");

                renderPreviews();
            },
        });
    }
});
