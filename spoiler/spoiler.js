var initSpoilerFromDOM = function() {
    
    // Toggle spoiler between hidden and visible
    function onToggleSpoiler(e) {
        e.stopPropagation();
        e.preventDefault();
        var elementLink = e.target;
        if (elementLink) {
            var id = elementLink.getAttribute("data-spoiler-id");
            var elementText = document.getElementById(id);
            if (elementText.style.display === "none") {
                elementText.style.display = "block";
                elementLink.setAttribute("aria-expanded", "true");
            } else {
                elementText.style.display = "none";
                elementLink.setAttribute("aria-expanded", "false");
            }
        }
    }
    
    // Initialise spoilers and bind events
    var elements = document.getElementsByClassName("spoiler-link");
    for (var i=0, l=elements.length; i<l; i++) {
        elements[i].onclick = onToggleSpoiler;
    }
};

window.addEventListener("DOMContentLoaded", initSpoilerFromDOM, false);
