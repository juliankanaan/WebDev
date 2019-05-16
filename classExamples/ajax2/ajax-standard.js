var contentBtn = document.querySelector('button');

function loadContent() {
  var xhr = new XMLHttpRequest(); // create new XHR object

  // store function to be called automatically each time readyState property changes
  xhr.onreadystatechange = function() {
    // request complete, status ok?
    if (xhr.readyState == 4 && xhr.status == 200) {
      // Write content to page
      document.querySelector('main').innerHTML = xhr.responseText;
    }
  };

  // prepare request (method, url, asynchronously?)
  xhr.open("GET", "content.html", true);

  xhr.send();
}

contentBtn.addEventListener('click', loadContent, false);