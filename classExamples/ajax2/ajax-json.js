var xhr = new XMLHttpRequest();

xhr.onreadystatechange = function() {
  if (xhr.readyState == 4 && xhr.status == 200) {
    var response = JSON.parse(xhr.responseText); // convert response to JS object

    // Create HTML content
    var content = '';

    for (var i = 0; i < response.us_cities.length; i++) {
      content += '<div>';
      content += '<h2>' + response.us_cities[i].city + '</h2>';
      content += '<p>' + response.us_cities[i].state + '</p>';
      content += '<p>' + response.us_cities[i].population + '</p>';
      content += '</div>';
    }

    // Update page content
    document.querySelector('main').innerHTML = content;
  }
};

xhr.open("GET", "cities.json", true);
xhr.send();