<p>商品登録入会画面</p>
<form action= "pro_add_check.php" method = "post"　enctype = "multipart/form-data">
	<dl>
		<dt>商品名</dt>
		<dd>
		<input type = "text" name = "name">
		</dd>
		<dt>価格</dt>
		<input type = "text" name = "price">
		<dt>画像</dt>
		<dd>
			<input type = "file" name = "gazou" style = "width:200px">
		</dd>
 	</dl>
	<input type = "submit" value ="送信する"　/>
</form>
