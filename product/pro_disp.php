<?php

$code = $_GET['code'];
$dsn='mysql:dbname=shop5;host=localhost;charset=utf8';
$user='root';
$password='root';
$dbh = new PDO($dsn,$user,$password);

$sql='SELECT name FROM product WHERE code=?';
$stmt = $dbh->prepare($sql);
$data[] = $code;
$stmt->execute($data);

while(true){
	$rec = $stmt->fetch(PDO::FETCH_ASSOC);
	if($rec == false){
		break;
	}
	print $rec['name'];
}
?>
<p><a href = "pron_list.php">一覧に戻る</a></p>
