<?php 
	$id = isset($_GET['id']) ? $_GET['id'] : '';

	include 'connect.php';
	$sql = "DELETE FROM rooms WHERE id = $id";
	$sm = $connect->prepare($sql);
	if($sm->execute()) {
		$mess = 'Xoa thanh cong';
		header("location: index.php?thong_bao=$mess");
	}

?>