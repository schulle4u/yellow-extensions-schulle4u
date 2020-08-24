// Codefile extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/codefile

// Create an invisible element
// Based on a tutorial from https://www.geeksforgeeks.org/how-to-trigger-a-file-download-when-clicking-an-html-button-or-javascript/
function download(file, code, id) {
    var element = document.createElement('a');
    element.setAttribute('href',
    'data:text/plain;charset=utf-8, '
    + encodeURIComponent(code));
    element.setAttribute('download', file);
    document.body.appendChild(element);
    element.click();
    document.body.removeChild(element);
} 

// Start file download. 
document.getElementById("codefile-btn").addEventListener("click", function() {
    var id = document.getElementById("codefile-btn").getAttribute("data-codefile-id");
    var code = document.getElementById(id).textContent;
    var filename = document.getElementById("codefile-btn").getAttribute("data-codefile-filename");
    download(filename, code, id);
}, false);