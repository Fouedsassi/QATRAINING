<!DOCTYPE html>

<html>
<head>
<title>Form Processing</title>

<link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>

<body>
<p>

Welcome <?php echo $_POST["firstname"]; 
			  echo " ";
              echo $_POST["lastname"]; ?>, <br>
Your email address is: <?php echo $_POST["email"]; ?>

</p>

</body>
</html>


