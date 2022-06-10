<?php

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$date = $_POST['date'];
$gender = $_POST['gender'];
$rating = $_POST['rating'];
$text = $_POST['text'];

$con = new mysqli('localhost', 'id18753034_anand', 'S3v%\/UFk2k}X^04', 'id18753034_signup');

if ($con->connect_error) {
	die("connection failed" . $con->connect_error);
} else {
	$stmt = $con->prepare("insert into feedback(name, email, number,date,gender, rating,text) 
	VALUES (?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssss", $name, $email, $number, $date, $gender, $rating, $text);
	$stmt->execute();
	echo "successfully submitted";
	$stmt->close();
	$con->close();
?>
	<script>
		location.replace("../Gaming Website/index.php");
	</script>
<?php
	// echo $sql;"
}
?>