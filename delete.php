<?php 
if (empty($_GET['id'])) {
	header('location:index.php?error=Phải truyền mã để xóa');
	exit;
}

$id = $_GET['id'];

require 'connect.php';

$sql = "delete from students
where
id = '$id'
";

mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php?success=Xóa thành công');