<?php
try{


$name=$_POST['name'];
$price=$_POST['price'];

print $name;
print $price;

$dsn='mysql:dbname=shop5;host=localhost;charset=utf8';
$user='root';
$password='root';
$dbh = new PDO($dsn,$user,$password);

$sql='INSERT INTO product(name,price) VALUES(?,?)';
$data[] = $name;
$data[] =$price;
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
<p><a href = "pro_list.php">商品一覧に戻る</a></p>
