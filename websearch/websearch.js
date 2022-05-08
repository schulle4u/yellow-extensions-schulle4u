// Websearch extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/websearch

const f = document.getElementById('websearch-form');
const q = document.getElementById('query');
const via = document.getElementById('websearch-via');
const site = document.getElementById('websearch-site');

function submitted(event) {
  event.preventDefault();
  const url = via.options[via.selectedIndex].value + site.value + '+' + q.value;
  const win = window.open(url, '_blank');
  win.focus();
}

f.addEventListener('submit', submitted);