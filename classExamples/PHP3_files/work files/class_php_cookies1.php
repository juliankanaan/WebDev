<?PHP
   // NOTE:  Cookies must be set before anything else.  SO, they go here!!
   
   if (isset($_POST['submitted'])) { 
   
 
       $name = $_POST['name'];
       $composer = $_POST['composer'];
       $composition = $_POST['composition'];
       
       setcookie('name', $name);
       setcookie('composer', $composer);
       setcookie('composition', $composition);
       
   
       $msg = "Your Cookies have now been set!";
   
   
   
   } // end isset



?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Cookies 1 in PHP</title>
</head>
<body>
<h3>Welcome to our Opera Recording Store!</h3>
<hr>

<div id="cookies">
 <?php // if cookies are set already, print a message
   if(isset($msg)) {
       print("<p>$msg</p>\n");
       print("<p>Welcome, $name<br />\n");
       print("We will help you find a score by $composer for $composition.</p>\n");
       print("<hr>\n");
   
   } // end if isset
   ?>
   
   
</div>

<div id="menu">
<form id="cookies1" name="cookies1" method="post"
    action="http://i6.cims.nyu.edu/~nh2/php/class_php_cookies1.php">
    <p>Your name: <input type="text" name="name" id="name" />
    </p>
<fieldset id="music">    
    <p>Choose the composer: <select name="composer" id="composer">
         <option value="Mozart" selected="selected">W.A. Mozart</option>
         <option value="Verdi">G. Verdi</option>
         <option value="Sullivan">A. Sullivan</option>
         
         <option value="Puccini">Puccini</option>
        </select>
    </p><p>
       <select name="composition" id="composition">
         <option value="Symphony" selected="selected">Symphony</option>
         <option value="Opera">Opera</option>
         <option value="Mass">mass</option>
         
         <option value="Song">Song</option>
        </select>
        
   </p>
</fieldset>
    
   
<p><input type="submit" value="Set your Cookies" /> </p>
<input type="hidden" name="submitted" value="true" />
</form>
<hr>
</div>

<p>&nbsp;</p>

</body>
</html>
