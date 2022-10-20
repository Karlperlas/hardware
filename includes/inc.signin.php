<?php
include 'conn.php';

if(isset($_POST['login'])){//if accessed through the log in button
	$userId = $_POST["userId"];
	$password = $_POST["password"];
	$sql = "SELECT * FROM `user_accounts` WHERE pwd = '$password' AND userID = '$userId'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		header("Location: ../pages/welcome.php");
	} else {
		header("Location: ../index.php");
		echo "Wrong Credentials!";
	}
} else {//if accessed by editing the address bar
	echo "Error! Go back to <a href='../index.php'>Log in page.</a>";
}





























//    $userName = $_POST['userId'];
//    $pwd = $_POST['password'];

//   if(($userName == "Admin_Karl" && $pwd == "perlas") || ($userName == "Admin_Emman" && $pwd == "lusi") || ($userName == "Admin_Tian" && $pwd == "lisa")|| ($userName == "Admin_Dwight" && $pwd == "hentai")|| ($userName == "Admin_Othan" && $pwd == "2000")) {
//    header('Location: ../pages/welcome.php');
//   } else {
//    echo $userName;
//    echo $pwd;
//    echo "pakyu!!";
//   }

