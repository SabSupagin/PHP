<!DOCTYPE html>
<html>
<head><title>calculateGoods</title></head>
<body>
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "departmentstore";
    $conn = mysqli_connect($hostname, $username, $password, $dbName);
    if (!$conn)
    die("Can't connect with mySQL");
    mysqli_select_db($conn, $dbName) or die("Cannot select departmentStore database");
    $sql1 = "select * from goods";
    $result1 = mysqli_query($conn, $sql1);
    for($i=0; $i<mysqli_num_rows($result1) ;$i++)
    {
    $goods[]=mysqli_fetch_array($result1);
    }
        echo '<center>';
        echo '<table width="750" border="1" cellspacing="0" cellpadding="5">';
        echo '<tr><td colspan="7" align="center"><b>Calculate Goods<b></td></tr>';
        echo '<tr><th width=30>#</th>';
        echo '<th width=80>Goods id</th>';
        echo '<th width=110>Goods name</th>';
        echo '<th width=100>Goods price (baht)</th>';
        echo '<th width=100>Goods quantity</th>';
        echo '<th width=100>Cumulative total</th></tr>';
    $x=0;
    $cumulativeTotal = 0;
    while($x<count($goods))
    {
        echo '<tr><td align="center">'.($x+1).'</td>';
        echo '<td align="center">'.$goods[$x][0].'</td>';
        echo '<td>'.$goods[$x][1].'</td>';
        echo '<td align="right">'.number_format($goods[$x][2],2).'</td>';
        echo '<td align="right">'.$goods[$x][3].'</td>';
        $cumulativeTotal += $goods[$x][3];
        echo '<td align="right">'.number_format($cumulativeTotal,0).'</td></tr>';
        $x++;
    }
    echo '<tr><td colspan="5" align="center">Total</td>';
    echo '<td align="right">'.number_format($cumulativeTotal,0).'</td></tr>';
    echo '</table>';
    mysqli_close($conn);
    echo '</center>';
    ?>
</body>
</html>