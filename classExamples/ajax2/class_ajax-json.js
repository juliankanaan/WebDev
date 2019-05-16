// Reads and formats the city.json file
var xhr = new XMLHttpRequest();

xhr.onreadystatechange = function() {
 if (xhr.readState == 4 && xhr.status == 200) {
    var response = JSON.parse(xhr.responseText); // convert resonse to JSON
    
    var content = '';
    
    for (var i = 0; i < response.us_cities.length; i++) {
      content += '<div>';
      content += '<h2>' + response.us_cities[i].city + '</h2>';
      content += '<h2>' + response.us_cities[i].state + '</h2>';
      content += '<h2>' + response.us_cities[i].population + '</h2>';
     
      content += '</div>';
    
    } // end for i
    
    
    document.querySelector('main').innerHTML = content;
    
    } // end if xhr.readState
    
} // end onreadstate function

xhr.open("GET", "cities.json", true);
xhr.send();
 