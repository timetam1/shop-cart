<p>これでいいですか</p>
<?php
$name = $_POST['name'];
$pass= $_POST['pass'];

if($name == ''){
	print '名前を入力して下しさい';
}
if($pass == ''){
	print 'パスワードを入力してください';
}

else{
	print '<form action = "staff_add_done.php" method = "post">';
	print '<input type = "hidden" name = "name" value = "'.$name.'">';
	print '<input type ="hidden" name  = "pass" value = "'.$pass.'">';
	print '<input type = "submit" value = "送信する">';
	print '</form>';
	
}
?>
