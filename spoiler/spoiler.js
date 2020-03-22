function toggle_hidden(id, button) {
    var x = document.getElementById(id);
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById(button).setAttribute("aria-expanded", "true");
    } else {
        x.style.display = "none";
        document.getElementById(button).setAttribute("aria-expanded", "false");
    }
}