<?php
$servername = "localhost";
$username = "XXX";
$password = "XXX";
$dbname = "XXX";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
$sql = "CREATE TABLE Mytext (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30),
txt VARCHAR(1500)
)";
 
if (mysqli_query($conn, $sql)) {
    echo "数据表 MyGuests 创建成功";
} else {
    /*echo "如果无法达到效果请把这一行的注释去掉，按照报错改: " . mysqli_error($conn);*/
}
$sql = "INSERT INTO Mytext (name, txt) VALUES `{$_POST['hitoke']}`, `{$_POST['nr']}`";
$sql = "INSERT INTO Mytext (name, txt)
VALUES (\"{$_POST['hitoke']}\", \"{$_POST['nr']}\")";
if (mysqli_query($conn, $sql)) {
    echo "ok";
    echo "<script>alert('添加成功！请点击确定且刷新index.php');history.go(-1)</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);