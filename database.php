<?php
	$name = $_POST['name'];
	// $lastName = $_POST['lastName'];
	// $gender = $_POST['gender'];
	$email = $_POST['email'];
	// $password = $_POST['password'];
	// $number = $_POST['number'];
    $feedback = $_POST['feedback'];
	
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$con = new mysqli($servername, $username, $password, $dbname) or die("Connection Unsuccessful");
	// if(mysqli_connect_errno())
	// {
	// 	die("Error:".mysqli_connect_error());
	// }
	$sql = "INSERT INTO feedback (name, email, message) VALUES ('$name','$email','$feedback')";
	echo"<p style='text-align:center;background: linear-gradient(45deg, #333333, #555555);color:white;font-size: 100px;font-family:Georgia, 'Times New Roman', Times, serif;'>Thank you for the feedback......<br>Please visit our website again and continue with your coding</p>";
	mysqli_query($con, $sql) or die("Query Unsuccessful");
	mysqli_close($con);
	
	// Database connection
	// $conn = new mysqli('localhost','root','test');
	// if($conn->connect_error){
	// 	echo "$conn->connect_error";
	// 	die("Connection Failed : ". $conn->connect_error);
	// } else {
	// 	$stmt = $conn->prepare("insert into feedback(name, email, feedback) values(?, ?, ?, ?, ?, ?)");
	// 	$stmt->bind_param("sssssi", $name, $email, $feedback);
	// 	$execval = $stmt->execute();
	// 	echo $execval;
	// 	echo "Thank you for the feedback...";
	// 	$stmt->close();
	// 	$conn->close();
	// }
?>