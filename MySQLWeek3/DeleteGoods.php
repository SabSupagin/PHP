<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "departmentstore";
$conn = mysqli_connect( $hostname, $username, $password, $dbName);
mysqli_set_charset($conn,"utf8");
$id = $_GET['id'];
$sql = "DELETE FROM goods WHERE goodsId = '$id' ";
mysqli_query($conn,$sql) or die ( "DELETE จากตาราง book มีข้อผิดพลาดเกิดข้ึน"
.mysqli_error());
mysqli_close ( $conn );
header("Location:ShowGoods.php");
?>