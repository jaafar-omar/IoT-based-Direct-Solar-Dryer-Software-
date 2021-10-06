<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $passRepeat = $_POST['passRepeat'];
	$number = $_POST['number'];

	// Database connection
	$con=new mysqli('localhost','root','','web_app');
	if($con->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $con->connect_error);
	} else {
		$stmt = $con->prepare("insert into registration(firstName,lastName,email,password,passRepeat,number)values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName,$lastName,$email,$password,$passRepeat,$number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$con->close();
	}

?>