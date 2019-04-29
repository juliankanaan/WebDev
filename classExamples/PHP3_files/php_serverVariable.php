<HTML>
<head>
<title>PHP: View the contents of PHP's $_SERVER on i6.nyu.edu</title>
</head>
<body>
<pre>
<?php print("<h3><font color='#0000CC'>This pages prints the contents of 
the server variable to display the current values for PhP on this 
server.</font></h3>");

print_r($_SERVER);
print_r($_SERVER['SERVER_ADDR']);

?>
</pre>
</body>
</html>
