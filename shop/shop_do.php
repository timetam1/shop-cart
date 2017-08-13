<?php
$code = $_GET['code'];
print $code.'を送信します';

session_start();
$_SESSION['code'] = $code;

print '<a href = "shop_list.php">';
print $_SESSION['code'];
print '</a>';
?>
