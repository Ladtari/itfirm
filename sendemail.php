<?php

$db_conn = mysqli_connect('localhost', 'root', '', 'it-firm');

if (!$db_conn) {
  echo 'Connection Failed';
  exit;
}
session_start();

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  mysqli_query($db_conn, "INSERT INTO contacts (username, email, phone, subject, message) VALUES ('$username', '$email', '$phone', '$subject', '$message')") or die(mysqli_error($db_conn));

  //Set Location After Successsfull Submission
  header('Location: contact.html?message=Successfull');
}

else{
	//Set Location After Unsuccesssfull Submission
  	header('Location: contact.html?message=Failed');	
}
?>