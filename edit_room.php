<?php 

	$id = isset($_GET['id']) ? $_GET['id'] : '';
	include 'connect.php';
	$sql = "SELECT * FROM rooms WHERE id = $id";
	$sm = $connect->prepare($sql);
	$sm->execute();

	$room = $sm->fetch();



	$sql_type = "SELECT * FROM types";
	$sm_type = $connect->prepare($sql_type);
	$sm_type->execute();

	$types = $sm_type->fetchAll();
?>


<form action="res_edit.php" method="POST">
	<input type="text" name='id' value="<?= $room['id'] ?>" hidden>
	<input type="text" name='name' value="<?= $room['name'] ?>">
	<input type="text" name='image' value="<?= $room['image'] ?>">
	<input type="number" name='price' value="<?= $room['price'] ?>">
	<select name="type_id" id="">
		<?php foreach($types as $key => $value) { ?>
 			<option value="<?= $value['name'] ?>">
 				<?= $value['name'] ?>
 			</option>
 		<?php } ?>
	</select>
	<button>EDIT</button>
</form>