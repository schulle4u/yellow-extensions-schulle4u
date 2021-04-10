// Antispam extension, http://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/antispam

var initAntispamFromDOM = function() {
    
    // Perform rot13 transformation
    function rot13(text) {
        return text.replace(/[a-zA-Z]/g, function(c) {
            return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);
        })
    }

    // Initialise antispam and create links
    var elements = document.getElementsByClassName("antispam");
    for (var i=0, l=elements.length; i<l; i++) {
        var address = rot13(elements[i].getAttribute("data-address"));
        var text = rot13(elements[i].getAttribute("data-text"));
        if (address && text) {
            elements[i].removeAttribute("style");
            elements[i].textContent = "";
            var a = document.createElement("a");
            a.appendChild(document.createTextNode(text));
            a.setAttribute("href", "mailto:"+address);
            elements[i].appendChild(a);
        }
    }
};

window.addEventListener("DOMContentLoaded", initAntispamFromDOM, false);
