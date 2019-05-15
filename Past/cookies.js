
function createCookie(name, value){
  // start with expiry

  var expireDate = new Date(); // this is today, but won't be soon
  expireDate.setMonth(expireDate.getMonth() + 6 ); // add six months to it expireDate.setMonth( getMonth(expireDate + 6)); 
  

  // now set this boi up 

  var cookieData = name + "=" + value.toString() + ";expires=" + expireDate.toGMTString();  
  
  //console.log(cookieData);

  // set the cookie 

  document.cookie = cookieData; 

  return cookieData; 
}


function getCookieData(name){
    var allCookies = document.cookie.split(";"); // create array of all our cookies

    // lets look at all the cookies we have 
    var cookieData = "";
    
    for (var i=0; i < allCookies.length; i++){
        
        var keyValue = allCookies[i]; // key-valye pairs together (unsplit)
        var key = keyValue.split("=")[0]; // split, and first pos in this new array is the name
        var value =  keyValue.split("=")[1];
        
        if (key == name){
            var cookieData = value; // split again, second pos in array is the value

            return cookieData; 
        } else {
        
            return null; // no cookie with that name
        }

    }
}
function printCookies(){
    var allCookies = document.cookie.split(";"); // create an array of cookies 

    //console.log(allCookies);

    for (var i=0; i < allCookies.length; i++){ // look at all the cookies we have
        
        var keyValue = allCookies[i]; // needs to be split up later
        //console.log(keyValue);

        var key = keyValue.split("=")[0]; // first value is the key 
        var value = keyValue.split("=")[1]; // second is the actual value
       
        console.log("Key: "+key+", "+"Value: "+value);
    }

}
