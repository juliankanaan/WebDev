<?php




?>

<html>
<head>

</head>
<body>
<h4>Using php to write variables to an external file</h4>

<?php

  $fopen = fopen('variables.php'. 'w');

  $phpCode = '\$var1 = "blah blah"';

  fwrite($fopen, $phpCode);

  
?>



</body>
</html>
