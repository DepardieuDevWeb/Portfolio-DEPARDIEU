import "tinymce/tinymce";
import "tinymce/themes/silver/theme";
import "tinymce/icons/default";
import "tinymce/plugins/link";
import "tinymce/plugins/lists";
import "tinymce/plugins/code";
import "tinymce/models/dom/model";
import "tinymce/skins/ui/oxide/skin.min.css";
// import "tinymce/skins/ui/oxide/content.css";

import "tinymce/skins/content/default/content.min.css";
import "tinymce/skins/content/default/content.css";
import "tinymce/icons/default/icons";

import tinymce from "tinymce/tinymce";

document.addEventListener("turbo:load", function () {
    tinymce.init({
        selector: "#description",
        plugins: "lists link code",
        toolbar: "undo redo | bold italic | bullist mumlist | list | code",
        height: 300,
        model: "dom",
        skin: false,
        content_css: false,
    });
});
