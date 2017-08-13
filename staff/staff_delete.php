<?php

$code = $_POST['code'];

$dsn='mysql:dbname=shop5;host=localhost;charset=utf8';
$user='root';
$password='root';
$dbh = new PDO($dsn,$user,$password);

$sql = 'DELETE FROM staff WHERE code=?';
$stmt = $dbh->prepare($sql);
$data[]=$code;
$stmt->execute($data);

print '削除しました';
?>
<p><a href  ="staff_list.php">削除する</a></p>
