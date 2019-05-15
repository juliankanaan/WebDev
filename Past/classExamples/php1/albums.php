<HTML>
<head>
<title>Music Order</title>
</head>
<body bgcolor = lightCyan>

<h2>Hello, <?php echo $_POST['yourname']; ?>! </h2>

<H3> Here is a summary of your Music Order! </h3>

 <hr>
 <h2> Your Order </h2>
 <ul>
 <li>Your Email Address: <?php echo $_POST['youremail']; ?>
 <li>Your Payment Type: <?php echo $_POST['yourpayment']; ?>
 <li>Your Favorite Operetta: <?php echo $_POST['youroperetta']; ?>
 </ul>
 <h2>AND, your gift will come with: <br>
 <?php 
    if(isset($_POST['yourgift']) &&
        $_POST['yourgift'] == 'red')
    	echo 'red wrapping paper, ';
    else	
    	echo 'regular wrapping paper, ';
    	
    if(isset($_POST['yourgift']) &&
        $_POST['yourgift'] == 'bow')
    	echo 'and a bow, ';
    else	
    	echo 'but with no bow, ';
    	
        	
    if(isset($_POST['yourgift']) &&
        $_POST['yourgift'] == 'ribbon')
    	echo 'and a ribbon';
    else	
    	echo 'and no ribbon';
 
 ?>
 </h2>
 </body>
 </html>

</body>
</html>


