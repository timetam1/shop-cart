<?php
$code = $_GET['code'];
?>
<p>編集画面</p>
<form action= "staff_edit_check.php" method = "post">
	<dl>
		<dt>名前</dt>
		<dd>
		<input type = "hidden" name = "code" value = "<?php print $code;?>">
			<input type = "text" name = "name">
		</dd>
		<dt>パスワード</dt>
		<input type = "password" name = "pass">
	</dl>
	<input type = "submit" value ="送信する"　/>
</form>
