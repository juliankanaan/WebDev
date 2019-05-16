var xhr = new XMLHttpRequest();

xhr.onreadystatechange = function() {
  if (xhr.readyState == 4 && xhr.status == 200) {

    // Variation from AJAX with HTML
    var response = xhr.responseXML; // getting XML from the server

    var outages = response.querySelectorAll('outage'); // find all <outage> elements

    // Function to get values from XML
    function getValue(obj, tag) {
      var value = obj.querySelector(tag).firstChild.nodeValue;
      return value;
    }

    // Construct HTML
    for (var i = 0; i < outages.length; i++) {
      var outage, station, reason, text; // declare variables
      container = document.createElement('div'); // create container for each piece of info

      station = document.createElement('h2');
      text = document.createTextNode(getValue(outages[i], 'station'));
      station.appendChild(text);
      container.appendChild(station);

      reason = document.createElement('p');
      text = document.createTextNode(getValue(outages[i], 'reason'));
      reason.appendChild(text);
      container.appendChild(reason);

      // Write to page
      document.querySelector('main').appendChild(container);

    } // close for loop
  } // close if statement
}; // close anonymous function call

xhr.open("GET", "mta-equipment-status.xml", true);
xhr.send();