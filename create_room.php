<?php
	include 'connect.php';
	$sql = "SELECT * FROM types";
	$sm = $connect->prepare($sql);
	$sm->execute();

	$types = $sm->fetchAll();

	$mess = isset($_GET['thong_bao']) ? $_GET['thong_bao'] : '';


 ?>

<p style="color: red"><?= $mess ?></p>
 <form action="res_create.php" method="POST" enctype="multipart/form-data">
 	<input type="text" name='name'>
 	<input type="file" name='avatar'>
 	<input type="number" name='price'>
 	<select name="type_id" id="">
 		<?php foreach($types as $key => $value) { ?>
 			<option value="<?= $value['name'] ?>">
 				<?= $value['name'] ?>
 			</option>
 		<?php } ?>
 	</select>
 	<button>ADD NEW</button>
 </form>