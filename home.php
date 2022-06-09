<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Quản lý sinh viên</title>
</head>
<body>
	<table class="table-show">
		<tr class="table-row">
			<th class="title">Họ tên</th>
			<th class="title">Mã sinh viên</th>
			<th class="title">Năm sinh</th>
			<th class="title">Lớp</th>
      <th class="title">Địa chỉ</th>
			<th class="add-sv"><a href="add.php">Thêm Sinh Viên</a></th>
		</tr>
		<?php 
			include "config.php";
			$sql = "SELECT * FROM baitapgodiem";
			$qr = mysqli_query($conn,$sql);
			while($rows = mysqli_fetch_array($qr)){
		 ?>
		<tr class="content-container">
			<td><?php echo $rows["hoten"]; ?></td>
			<td><?php echo $rows["masinhvien"]; ?></td>
			<td><?php echo $rows["namsinhsv"]; ?></td>
			<td><?php echo $rows["lop"]; ?></td>
      <td><?php echo $rows["diachi"]; ?></td>
			<td class="double-btn"><a class="edit-btn" href="edit.php?this_masinhvien=<?php echo $rows["masinhvien"]; ?>">Sửa Thông Tin</a>  <a class="delete-btn" href="delete.php?this_masinhvien=<?php echo $rows["masinhvien"]; ?>">Xoá Sinh Viên</a></td>
         
		</tr>
		<?php } ?>
	</table>
</body>
</html>

