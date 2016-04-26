<html>
<head>
<title>Form Processing</title>

<link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>

<body>

<?php 

$db_hostname = 'localhost';
$db_database = 'qatraining';
$db_username = 'fouedsassi';
$db_password = 'ontraport123';

$con = mysqli_connect($db_hostname, $db_username, $db_password, $db_database)
    or die("Unable to connect to MySQL: " . mysql_error());

$result = mysqli_query($con, "SELECT * FROM training");

echo "<table>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
</tr>";

while ($row = mysqli_fetch_array($result)) {
	echo "<tr>";
  	echo "<td>" . $row['firstname'] . "</td>";
 	echo "<td>" . $row['lastname'] . "</td>";
 	echo "<td>" . $row['email'] . "</td>";
  	echo "</tr>";
}

echo "</table>";

mysql_close($con);
?>

</body>
</html>

