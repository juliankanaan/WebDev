// js for ajax - pinafore pix

var contentBtn = document.querySelector('button');

function loadContent() {

var xhr = new XMLHttpRequest(); // create new XHR object

// store funciton to be called automatically each time readState
// property changes

xhr.onreadystatechange = function() {
	// request complete - is status OK?
	
	if (xhr.readyState == 4 && xhr.status == 200) {
	  // write content to the page
	  document.querySelector('main').innerHTML = xhr.responseText;
	
	} // end if xhr


}   // end onreadystatechange

xhr.open("GET", "content.html", true);

xhr.send();

}  // end function loadContent

contentBtn.addEventListener('click', loadContent, false);
