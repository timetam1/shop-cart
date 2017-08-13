<?php
$dsn='mysql:dbname=shop5;host=localhost';
$user='root';
$password = 'root';
$dbh = new PDO($dsn,$user,$password);

$sql = 'SELECT code,name,price FROM product WHERE 1';
$stmt = $dbh->prepare($sql);
$stmt->execute();


while(true){
	$rec = $stmt->fetch(PDO::FETCH_ASSOC);
	if($rec == false){
		break;
	}
	print '<a href = "shop_do.php?code='.$rec['code'].'">';
	print $rec['name'];
}
print '<input type = "submit" value = "送信する">';

?>

<p><a href = "../product/pro_list.php">商品一覧画面に移動する</a></p>
<p><a href = "shop_cartin.php">カートに入れる</a></p>
