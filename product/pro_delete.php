<?php
$code = $_GET['code'];
print $code;
print '本当に削除してもよろしいでしょうか';
print '<form action = "pro_delete_done.php" method = "post">';
print '<input type = "hidden" name = "code" value = "'.$code.'">';
print '<input type = "submit" value = "はい">';
print '</form>';
?>
