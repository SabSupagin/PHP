<!DOCTYPE HTML>
<html>

<head>
	<title>Edit Goods</title>
</head>

<body>
<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "departmentstore";
    $conn = mysqli_connect( $hostname, $username, $password, $dbName);
    if (!$conn)
    die("Can't connect with mySQL");
    mysqli_select_db($conn, $dbName) or die ("Cannot select departmentstore");
    $goodsId = $_REQUEST['id'];
    $sql = "SELECT * FROM goods WHERE goodsId = '$goodsId'";
    $dbQuery = mysqli_query($conn, $sql);
    if(!$dbQuery)
        die("Select has an error".mysqli_error());
        $result = mysqli_fetch_object($dbQuery);
?>
	<form enctype="multipart/form-
data" name="save" method="POST" action="EditGood.php">

		<BR>
		<BR>
		<table width="650" border="1" bgcolor="#FFFFFF" align="center">
			<tr>
				<td colspan="6" bgcolor="" align="center" height="21">
					<b>: : Edit Goods : : </td>
			</tr>
			<tr>
				<td width="200">goodsId : </td>
				<td width="400">
					<input type="text" name="goodsId" size="50" value="<?php echo $result->goodsId ?>"readonly> </td>
			</tr>
			<tr>
				<td width="200">goodsName :</td>
				<td>
					<input type="text" name="goodsName" size="50" value="<?php echo $result->goodsName ?>"> </td>
			</tr>
			<tr>
				<td width="200">goodsPrice :</td>
				<td>
					<input type="text" name="goodsPrice" size="50" value="<?php echo $result->goodsPrice ?>"> </td>
			</tr>
			<tr>
				<td width="200">goodsQuantity :</td>
				<td>
					<input type="text" name="goodsQuantity" size="50" value="<?php echo $result->goodsQuantity ?>">
				</td>
			</tr>
		</table>
		
        <br>
		<div align="center">
			<input type="submit" name="Submit" value="Edit" style="cursor:hand">
			<input type="reset" name="Reset" value="Reset" style="cursor:hand">
            <br>
            <br>
            <A HREF="showgoods.php">Show Goods</A>
        </div>
	</form>
</body>

</html>