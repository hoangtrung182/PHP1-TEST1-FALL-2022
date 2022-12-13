<?php 
	include 'connect.php';
	$sql = "SELECT * FROM rooms";
	$sm = $connect->prepare($sql);
	$sm->execute();

	$res = $sm->fetchAll();

	$thongbao = isset($_GET['thong_bao']) ? $_GET['thong_bao'] : '';
?>

<p style="color: red"><?= $thongbao ?></p>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Avatar</th>
			<th>Price</th>
			<th>Type_Room</th>
		</tr>
	</thead>	
	<tbody>
		<?php foreach($res as $key => $value) { ?>
			<tr>
				<td><?= $value['id'] ?></td>
				<td><?= $value['name'] ?></td>
				<td><img src="<?= $value['image'] ?>" alt="" width='100px'></td>
				<td><?= $value['price'] ?></td>
				<td><?= $value['type_id'] ?></td>
				<td>
					<a href="edit_room.php?id=<?= $value['id'] ?>">
						<button>EDIT</button>
					</a>
					<a href="del_room.php?id=<?= $value['id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa không')">
						<button>DEL</button>
					</a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<a href="create_room.php">
	<button>ADD</button>
</a>