
<?php 
	$ten = isset($_POST['name']) ? $_POST['name'] : '';
	$anh_dai_dien = isset($_FILES['avatar']) ? $_FILES['avatar'] : '';
	$price = isset($_POST['price']) ? $_POST['price'] : '';
	$type_room = isset($_POST['type_id']) ? $_POST['type_id'] : '';


	$message = '';

	if($price <= 0 ) {
		$message .= 'Price chua la so duong';
	}

	$save_url = '';
	if($anh_dai_dien['size'] > 0 ) {
		if($anh_dai_dien['size'] > 200000) {
			$message .= 'Anh qua lon';
		}

		$folder = './photos/';
		$new_name_photo = uniqid() . $anh_dai_dien['name'];
		$new_context = $anh_dai_dien['tmp_name'];
		$new_url = $folder . $new_name_photo;
		if(move_uploaded_file($new_context, $new_url)) {
			$save_url = $new_url;
		}
	}


	if($message != '') {
		header("location: create_room.php?thong_bao=$message");
	}else {
		include 'connect.php';
		$sql = "INSERT INTO rooms (name, image, price, type_id) VALUES ('$ten', '$save_url', '$price', '$type_room')";

		$sm = $connect->prepare($sql);
		// $sm->execute();
		if($sm->execute()) {
			$message = "Tao thanh cong";
			header("location: index.php?thong_bao=$message");
		}
	}


?>


