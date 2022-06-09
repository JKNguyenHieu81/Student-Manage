
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xóa sinh viên</title>
</head>
<body>
	

<?php 
	include "config.php";

	$this_masinhvien = $_GET['this_masinhvien'];

	$sql = "DELETE FROM manageDB WHERE masinhvien='$this_masinhvien'";

	echo "Sinh viên ->" . $this_masinhvien . " đã được xóa!";

	mysqli_query($conn,$sql);
 ?>
</body>
</html>