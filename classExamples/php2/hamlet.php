<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Hamlet</title>
	<style>
	  body {background-color: #fee;
	        color:navy;
	        margin-left: 25px;
	        
	        }
      h3 {color: maroon;}
	
	
	</style>
	
</head>
<body>

<h3>Hamlet - Read in by PHP</h3>

<hr />

<?PHP
   $tobe = file('ShakespeareHamlet.txt');
   print "<p>";
   
   for ($n=0; $n<count($tobe); $n++) {
     print trim($tobe[$n])."<br />\n";
   
   }
   
   print "</p>\n";
   print "<p><em>... from Hamlet, Act II, Scene 1</em></p>\n";
   


?>

</body>
</html>
