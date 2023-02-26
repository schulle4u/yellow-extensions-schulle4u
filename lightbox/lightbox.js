// Lightbox extension, http://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/lightbox

var initLightboxFromDOM = function() {
    var lightboxConfig = document.getElementById("lightboxConfig");
    var lightboxNav = lightboxConfig.getAttribute("data-lightboxNav");
    var lightboxAutoplay = lightboxConfig.getAttribute("data-lightboxAutoplay");
    var lightboxPreviousLabel = lightboxConfig.getAttribute("data-lightboxPreviousLabel");
    var lightboxNextLabel = lightboxConfig.getAttribute("data-lightboxNextLabel");
    var lightboxCloseLabel = lightboxConfig.getAttribute("data-lightboxCloseLabel");
    const tobii = new Tobii({
        nav: lightboxNav,
        navLabel: [lightboxPreviousLabel, lightboxNextLabel],
        closeLabel: lightboxCloseLabel,
        autoplayVideo: lightboxAutoplay,
        autoplayAudio: lightboxAutoplay
    });
};

window.addEventListener("DOMContentLoaded", initLightboxFromDOM, false);