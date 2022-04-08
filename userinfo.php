<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "connection successful";

}else{
	echo "No connection";

}

mysqli_select_db($con,'userinfodata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into userinfodata (user,email,mobile,comments) values('$user', '$email', '$mobile', '$comment')";


echo "$query";

mysqli_quey($con,$query);

header('location:index.php');


?>