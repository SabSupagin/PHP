<?php
// Create connection
$connect = new mysqli('localhost', 'root', '', 'itbook');
// Check Connection
if ($connect->connect_error) {
    die("Something wrong.: " . $connect->connect_error);
}
$sql = "SELECT * FROM book";
$result = $connect->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Menu</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>แสดงข้อมูลหนังสือ</h1>
        <table>
            <thead>
                <tr>
                    <td width="5%">#</td>
                    <td width="25%">BookName</td>
                    <td width="25%">ราคา (บาท) </td>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_array()): ?>
                    <tr>
                        <td><?php echo $row[0]; ?></td>
                        <td class="name">
                        <?php echo $row[1];?>
                        </td>

                        <td><?php echo $row[2]; ?></td>

                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</body>
</html> 