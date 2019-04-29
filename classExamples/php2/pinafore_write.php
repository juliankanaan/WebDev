<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Pinafore - Write to Disk</title>
	<style>
	  body {background-color: #fee;
	        color:navy;
	        margin-left: 25px;
	        
	        }
      h3 {color: maroon;}
	
	
	</style>
	
</head>
<body>


<?php
  $line1 = "When I was a lad, I served a term \n ";
  $line2 = "As office boy to an attorney's firm \n";
  $line3 = "I cleaned the windows with a smile so bland \n";
  $line4 = "And I copied all the letters in a big round hand. \n";
  
  $myfile = fopen('pinafore.txt', a);
  fwrite($myfile, $line1);
  fwrite($myfile, $line2);
  fwrite($myfile, $line3);
  fwrite($myfile, $line4);
  
  fclose($myfile);
  
  print "<p>Wow!  I was able to write the file!!!! </p>";
  

   


?>

</body>
</html>
