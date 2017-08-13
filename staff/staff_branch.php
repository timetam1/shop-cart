<?php
if(isset($_POST['add'])){
	header('Location:staff_add.php');
	exit();
}
if(isset($_POST['edit'])){
	$code = $_POST['code'];
	header('Location:staff_edit.php?code='.$code.'');
	exit();
}
if(isset($_POST['delete'])){
	$code = $_POST['code'];
	header('Location:staff_delete.php?code='.$code.'');
	exit();
}

if(isset($_POST['disp'])){
	$code = $_POST['code'];
	header('Location:staff_disp.php?code='.$code.'');
	exit();
}
?>
