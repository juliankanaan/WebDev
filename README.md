# WebDev
For web dev class

## Ways to call functions outside the DOM

```
window.onload = hiThere; // no call needed inside markup

function hiThere(){

  alert("Hi there!");
}
```
## CSS Attributes
```
#sidebar a:hover{
	background-color: #390;
	color: #ccc;

}
```
# Weird problems
## Change bases
```
function baseChange(num, thebase) {
	var num_in_new_base = num.toString(thebase);
	return num_in_new_base;
}

function padit(stringNum, mylen){
	while (stringNum.length < mylen)
	   stringNum = "0" + stringNum;
	return stringNum;

}
	
function da_bases() {
	alert("Ready!");
	
	var min_range = eval(prompt("What is the minimum value?", "0"));
	
	var max_range = eval(prompt("What is the maximum value?", "0"));
	
	document.open();
	
	document.write("<h2>Fun with Bases!<br><font face='courier'>");
	
	
	for (var i=min_range; i<=max_range; i++)
	   document.write("&nbsp;&nbsp;&nbsp;&nbsp;" + padit(i.toString(), 3)
	                  + "&nbsp;&nbsp;&nbsp;&nbsp;" + padit(baseChange(i, 16),2)
	                  
	                  
	                  + "&nbsp;&nbsp;&nbsp;&nbsp; " + padit(baseChange(i, 2), 8)
	                  
	   				  +"<br>");
	   				  
	   				  
	
	document.write("</font></h2>");
	document.close();

}
```
