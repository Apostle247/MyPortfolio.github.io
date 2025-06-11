<?php

$Name = $_POST['name'];
$Phonenumber = $_POST['Phonenumber'];
$Email = $_POST['email'];
$message = $_POST['message'];

//Database connection

$conn = new mysqli('localhost', 'root', '', 'tech world');

if($conn->connect_error){

    die('Connection Failed : ' .$conn->connect_error);
}else{

$stmt = $conn->prepare("insert into myportfolio(Name, Phonenumber, email,message) VALUES(?, ?, ?, ?)");
$stmt->bind_param("ssss",$Name, $Phonenumber, $Email, $message);
$stmt->execute();

	echo "Submitted Successfully";
}

?>