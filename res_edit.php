
<?php
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$ten = isset($_POST['name']) ? $_POST['name'] : '';
	$anh_dai_dien = isset($_POST['image']) ? $_POST['image'] : '';
	$price = isset($_POST['price']) ? $_POST['price'] : '';
	$type_room = isset($_POST['type_id']) ? $_POST['type_id'] : '';


	include 'connect.php';
	$sql = "UPDATE rooms SET name='$ten', image='$anh_dai_dien', price='$price', type_id='$type_room' WHERE id = $id";
	$sm = $connect->prepare($sql);
	$sm->execute();
	header('location: index.php');

 ?>