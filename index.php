<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel='stylesheet' type='text/css' href='https://www.lihouse.xyz/wp-content/themes/Scilper/style.css?ver=2.0.4'>

     <title>提交一言</title>
   
<body>
<div class="pattern-center ">
    <div class="pattern-attachment-img" style="background-image: url(bing.php)"> </div>
    <header class="pattern-header "><h1 class="entry-title">我的日记本</h1></header>
  </div>
<div id="phone" style="
 "><br></br>
<div style="text-align: center;">
<form action="/post.php" method="post" name="loghitoke">标题:<input name="hitoke" type="text" value="" />内容:<input name="nr" type="text" value="" />  <input type="submit" value="提交" /></form></div>
</div><br></br><br></br><br></br><br></br>
<?php
$servername = "localhost";
$username = "XXX";
$password = "XXX";
$dbname = "XXX";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
$sql = "SELECT name, txt FROM Mytext";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($result)) {
        echo "<article class='post post-list'><div class='post-status'><div class='postava'><a><img class='avatar avatar-64 photo' src='https://www.lihouse.xyz/wp-content/uploads/2020/05/favicon.png' alt='img' width='64' height='64' /></a></div><div class='s-content'>标题: " . $row["name"]. " - 内容: " . $row["txt"]."</div><hr /></div></article>";}
} else {
    echo "木有东西唉，快去写一个吧！~";
}
mysqli_close($conn);
?>