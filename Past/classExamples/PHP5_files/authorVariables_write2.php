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
<h3>Using PHP to write out PHP variables to a file</h3>

<?php
	$author1 = "William Shakespeare";
	$author2 = "Mark Twain";
	$author3 = "George B. Shaw";
	$author4 = "Maya Angelou";
	
  
  $myfile = fopen('author_variables.php', 'w');
    $m1 = "\$author1 = \"" . $author1 . "\";\n";
    $m2 = "\$author2 = \"" . $author2 . "\";\n";
    $m3 = "\$author3 = \"" . $author3 . "\";\n";
    $m4 = "\$author4 = \"" . $author4 . "\";\n";
    
    fwrite($myfile, "<?php \n");
     fwrite($myfile, $m1);
     fwrite($myfile, $m2);
     fwrite($myfile, $m3);
     fwrite($myfile, $m4);
    
    
     fwrite($myfile, "?> \n");
  
     fclose($myfile);
  
  print "<p>Wow!  I was able to write the author PHP file!!!! </p>";
  

   


?>

</body>
</html>
