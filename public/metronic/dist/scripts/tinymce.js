var options = {
    selector: "#kt_docs_tinymce_basic",
    height: "300",
    width: "600"
};

if (KTThemeMode.getMode() === "dark") {
    options["skin"] = "oxide-dark";
    options["content_css"] = "dark";
}

tinymce.init(options);
