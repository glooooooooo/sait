<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\css2.css">
    <script src="script.js" defer></script>
    <title>Магазин мягких игрушек</title>
</head>
<?php

$name=$_POST['productName'];
$price =$_POST['productPrice'];
$text=$_POST['productDescription'];

$server = "84.201.184.150";
$login = "090303-pia-21_i";
$pass = "ioo22mqeVv";
$name_db = "090303-pia-21_ivko";

$link = mysqli_connect($server, $login,$pass,$name_db);
$link->set_charset("utf8");

$sql = "INSERT INTO `igruhi`(`name`, `price`, `text`) VALUES ( '$name', '$price', '$text')";
if ($link->query($sql) === TRUE){
    
} else{
    echo "Error: " . $sql . "<br>" . $sql->error;
}
?>
<body>
<button type="submit"><a href="csait.php">На главную</a></button>
</body>
</html>