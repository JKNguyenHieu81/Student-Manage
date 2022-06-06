<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>quanlisinhvien</title>
</head>
<body>
	<table border="2">
		<tr>
			<th>Họ tên</th>
			<th>Mã sv</th>
			<th>Năm sinh</th>
			<th>Lớp</th>
			<th><a href="add.html">Thêm Sinh Viên</a></th>
		</tr>
		<?php 
			include "config.php";
			$sql = "SELECT * FROM baitapgodiem";
			$qr = mysqli_query($conn,$sql);
			while($rows = mysqli_fetch_array($qr)){
		 ?>
		<tr>
			<td><?php echo $rows["hoten"]; ?></td>
			<td><?php echo $rows["masinhvien"]; ?></td>
			<td><?php echo $rows["namsinhsv"]; ?></td>
			<td><?php echo $rows["lop"]; ?></td>
			<td><a href="edit.html?this_masinhvien=<?php echo $rows["masinhvien"]; ?>">Sửa Thông Tin</a> | <a href="delete.html?this_masinhvien=<?php echo $rows["masinhvien"]; ?>">Xoá Sinh Viên</a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>