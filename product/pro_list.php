<p>商品画面</p>

<?php
$dsn='mysql:dbname=shop5;host=localhost;charset=utf8';
$user='root';
$password='root';
$dbh = new PDO($dsn,$user,$password);

$sql = 'SELECT code,name FROM product WHERE 1';
$stmt = $dbh->prepare($sql);
$stmt->execute();

print '<form action = "pro_branch.php" method = "post">';
while(true){
	$rec = $stmt->fetch(PDO::FETCH_ASSOC);
	if($rec == false){
		break;


	}
	
	   print '<input type = "radio" name = "code" value = "'.$rec['code'].'">';
		print $rec['name'];
}

print '<input type = "submit"  name = "add" value = "新規登録する">';
print '<input type = "submit"  name = "edit" value = "編集する">';
print '<input type = "submit"  name = "delete" value = "削除する">';
print '<input type ="submit" name = "disp" value = "詳細を見る">';

print '</form>';
?>
