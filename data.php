<html>
<head>
<title>Form Processing</title>

<link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>

<body>

<?php 
require_once 'login.php';

$firstname  = $_POST['firstname'];
$lastname   = $_POST['lastname'];  
$email      = $_POST['email'];
$password   = $_POST['password'];  


$sql="INSERT INTO training (firstname, lastname, email, password)
VALUES ('$firstname', '$lastname','$email', SHA1('$password'))";

$result = mysql_query($sql);

if($result){
echo '<h2>Thank you ' . $firstname . ', your information has been successfully submitted!</h2>';
}
else {
echo '<h2>ERROR!</h2>';
}

mysql_close();
?>

</body>
</html>

