<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form enctype="multipart/form-data" name="save" method="POST" action="SaveGood.php">

    <table width="650" border="1" bgcolor="#FFFFFF" align="center">
    <tr>
        <td align="center" colspan=3>
            Add Goods
        </td>
    </tr>
    <tr>
        <td align="center">
            Goods id
        </td>
        <td>
        <input type="text" name="goodsId" maxlength="25" size="20" value=""> </td>
        </td>
    </tr>
    <tr>
        <td align="center">
            Goods name
        </td>
        <td>
        <input type="text" name="goodsName" maxlength="25" size="20" value=""> </td>
        </td>
    </tr>
    <tr>
        <td align="center">
            Goods price (bath)
        </td>
        <td>
        <input type="text" name="goodsPrice" maxlength="25" size="20" value=""> </td>
        </td>
    </tr>
    <tr>
        <td align="center">
            Goods quantity
        </td>
        <td>
        <input type="text" name="goodsQuantity" maxlength="25" size="20" value=""> </td>
        </td>
    </tr>

    </table>

    <br><br>

    <div align="center">
			<input type="submit" name="Submit" value="Add" style="cursor:hand">
			<input type="reset" name="Reset" value="Clear" style="cursor:hand">
            <br><br>
            <center><A HREF="ShowGoods.php">Show Goods</A></center>
	</div>
    </form>
</body>
</html>