<?php
$code = $_POST['code'];
$name = $_POST['name'];
$pass = $_POST['pass'];

if($name == ''){
	print '名前を入力してください';
}
if($pass == ''){
	print 'パスワードを入力してください';
}

else{
	print '<form action = "staff_edit_done.php" value = "送信する">';
	print '<input type = "hidden" name = "code" value = "'.$code.'">';
	print '<input type = "hidden" name = "name" value = "'.$name.'">';
	print '<input type = "hidden" name = "pass" value = "'.$pass.'">';
	print '<input type = "submit" value = "送信する">';
	print '</form>';
	
}
?>
