<?php

if (empty($_POST['name']) || empty($_POST['birthday']) || empty($_POST['email']) || empty($_POST['password'])) {
	header('location:index.php?error=Vui lòng điền đủ thông tin');
	exit;
}

$name = $_POST['name'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

require 'connect.php';


$sql = "insert into students(name,gender,birthday,address,email,phone,password)
values('$name','$gender','$birthday','$address','$email','$phone','$password')";

mysqli_query($connect,$sql);
mysqli_close($connect);

header('location:index.php?success=Thêm thành công');