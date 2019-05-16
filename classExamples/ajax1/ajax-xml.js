var xhr = new XMLHttpRequest();

xhr.onreadystatechange = function() {
  if (xhr.readyState == 4 && xhr.status == 200) {

    // Variation from AJAX with HTML
    var response = xhr.responseXML; // getting XML from the server

    var cities = response.querySelectorAll('city');

    // Function to get values from XML
    function getValue(obj, tag) {
      var value = obj.querySelector(tag).firstChild.nodeValue;
      return value;
    }

    // Construct HTML
    for (var i = 0; i < cities.length; i++) {
      var name, population, text; // declare variables
      container = document.createElement('div'); // create container for each piece of info

      name = document.createElement('h2');
      text = document.createTextNode(getValue(cities[i], 'name'));
      name.appendChild(text);
      container.appendChild(name);

      population = document.createElement('p');
      text = document.createTextNode(getValue(cities[i], 'population'));
      population.appendChild(text);
      container.appendChild(population);

      // Write to page
      document.querySelector('main').appendChild(container);

    } // close for loop
  } // close if statement
}; // close anonymous function call

xhr.open("GET", "cities.xml", true);
xhr.send();