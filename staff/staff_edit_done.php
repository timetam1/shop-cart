<?php

$code = $_POST['code'];
$name = $_POST['name'];
$pass = $_POST['pass'];


$dsn='mysql:dbname=shop5;host=localhost;charset=utf8';
$user='root';
$password='root';
$dbh = new PDO($dsn,$user,$password);

$sql = 'UPDATE staff SET name=?,password=? WHERE code=?';
$data[]=$name;
$data[]=$pass;
$data[]=$code;
$stmt = $dbh->prepare($sql);
$stmt->execute($data);
$dbh = null;

print 'データを挿入しました';


?>
<p><a href  = "staff_list.php">スタッフ一覧に戻る</a></p>
