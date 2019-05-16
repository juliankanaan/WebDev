<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Write Author PHP code to a file</title>
	<style>
	  body {background-color: #fee;
	        color:navy;
	        margin-left: 25px;
	        
	        }
      h3 {color: maroon;}
	
	
	</style>
	
</head>
<body>
<h3>Using PHP to read variables from an include file</h3>

<?php
	include 'author_variables.php';
	 print("<p>We can now print out the php variables!</p>");
	 
	 print("Variables \$author1 contains ". $author1 . "<br>\n");
	 print("Variables \$author2 contains ". $author2 . "<br>\n");
	 print("Variables \$author3 contains ". $author3 . "<br>\n");
	 print("Variables \$author4 contains ". $author4 . "<br>\n");
	
	
  
 

   


?>

</body>
</html>
