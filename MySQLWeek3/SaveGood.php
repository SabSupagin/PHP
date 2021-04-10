<!DOCTYPE html>
<html lang="en">
<head>
<meta charset = "UTF-8">
<center>
<titel>Departmentstore</titel>
</center>
</head>

<body>
<?php
$hostname = "localhost";
$username = "root";
$password = "12345";
$dbName = "departmentstore";
$goodsId = $_POST['goodsId'];
$goodsName = $_POST['goodsName'];
$goodsPrice = $_POST['goodsPrice'];
$goodsQuantity = $_POST['goodsQuantity'];
$conn = mysqli_connect($hostname, $username, $password);
echo'<center>';
if (!$conn)
    die("Can't connect with my SQL");
mysqli_select_db($conn,$dbName) or die("cannot select departmentstore database");
$sql = "insert into goods(goodsId,goodsName,goodsPrice,goodsQuantity)
values ('$goodsId','$goodsName','$goodsPrice','$goodsQuantity')";
mysqli_query($conn,$sql)or die ("Insert into the goods table an error occurred".mysqli_error());
echo "$goodsId";
mysqli_close($conn);

echo "<p>";
echo "goodsId : <i> $goodsId </i> <br/>";
echo "goodsName : <i> $goodsName </i> <br/>";
echo "goodsPrice : <i> $goodsPrice </i> <br/>";
echo "goodsQuantity : <i> $goodsQuantity </i> <br/>";
echo "<br>";
echo "<a href = 'tablegoods.php'> <big>Back</big></a>";
?>

</body>
</html>