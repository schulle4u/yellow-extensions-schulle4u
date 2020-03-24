var initAntispamFromDOM = function() {
    
    // Undo rot13 transformation
    function unrot13(text) {
        return text.replace(/[a-zA-Z]/g, function(c) {
            return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);
        })
    }

    // Initialise antispam and create links
    var elements = document.getElementsByClassName("antispam");
    for (var i=0, l=elements.length; i<l; i++) {
        var address = unrot13(elements[i].getAttribute("data-address"));
        var text = unrot13(elements[i].getAttribute("data-text"));
        if (address && text) {
            var a = document.createElement("a");
            a.appendChild(document.createTextNode(text));
            a.setAttribute("href", "mailto:"+address);
            elements[i].appendChild(a);
        }
    }
};

window.addEventListener("DOMContentLoaded", initAntispamFromDOM, false);
