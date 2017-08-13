<p>これでいいですか</p>
<?php
$name = $_POST['name'];
$price= $_POST['price'];
$gazou = $_FILES['gazou'];

print $name;
print $price;

if($name == ''){
	print '名前を入力して下しさい';
}
if($price == ''){
	print '価格を入力してください';
}

else{

	print '<form action = "pro_add_done.php" method = "post">';
	print '<input type = "hidden" name = "name" value = "'.$name.'">';
	print '<input type ="hidden" name  = "price" value = "'.$price.'">';
	print '<input type = "submit" value = "送信する">';
	print '</form>';
	
}
?>
