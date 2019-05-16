var contentLinks = document.querySelector('#content-links');

function loadContent(e) {
  e.preventDefault(); // prevent new page from loading

  if (e.target.tagName === "A") { // if <a> element triggered the event
    var selected = document.querySelector('.selected');

    if (selected) { // if not null (there is an element with this class)
      selected.className = ''; // remove class from that element
    }

    e.target.className = 'selected'; // update link class

    var url = e.target.href; // get link destination from event target

    var xhr = new XMLHttpRequest(); // new XHR object

    // store function to be called each time readyState changes
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        document.querySelector('article').innerHTML = xhr.responseText;
      }
    };

    xhr.open("GET", url, true);
    xhr.send();
  }

  e.stopPropagation(); // Prevent event from bubbling up through DOM
}

contentLinks.addEventListener('click', loadContent, false);