<?php
if(isset($_POST['add'])){
	header('Location:pro_add.php');
	exit();
}
if(isset($_POST['edit'])){
	$code = $_POST['code'];
	header('Location:staff_edit.php?code='.$code.'');
	exit();
}
if(isset($_POST['delete'])){
	$code = $_POST['code'];
	header('Location:pro_delete.php?code='.$code.'');
	exit();
}

if(isset($_POST['disp'])){
	$code = $_POST['code'];
	header('Location:pro_disp.php?code='.$code.'');
	exit();
}
?>
