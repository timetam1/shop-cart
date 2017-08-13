<?php
try{


$name=$_POST['name'];
$pass=$_POST['pass'];

$dsn='mysql:dbname=shop5;host=localhost;charset=utf8';
$user='root';
$password='root';
$dbh = new PDO($dsn,$user,$password);

$sql='INSERT INTO staff(name,password) VALUES(?,?)';
$data[] = $name;
$data[] =$pass;
$stmt = $dbh->prepare($sql);
$stmt->execute($data);

$dbh = null;

print '送信しました';
}
catch(Exception $e){
	print 'すみません';
	exit();
}

?>
<p><a href = "staff_list.php">スタッフ一覧に戻る</a></p>
