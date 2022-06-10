<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="add.css">
	<title>Thêm sinh viên</title>
</head>
<style>
	.error {
		color: red;
		display: inline;
		font-size: 14px;
	}
</style>

<body>
	<?php
	include "config.php";
	?>
	<?php
	if (isset($_POST["Them"])) {
		$hoten = $_POST["hoten"];
		$masinhvien = $_POST["masinhvien"];
		$namsinhsv = $_POST["namsinhsv"];
		$lop = $_POST["lop"];
		$diachi = $_POST["diachi"];

		if ($hoten != "" && $masinhvien != "" && $namsinhsv != "" && $lop != "" && $diachi != "") {
			$sql = "INSERT INTO baitapgodiem(hoten,masinhvien,namsinhsv,lop,diachi) VALUES('$hoten','$masinhvien','$namsinhsv','$lop','$diachi');";
			mysqli_query($conn, $sql);
		}
	}
	//check if value inside input form is empty print err mess
	$hotenErr = $masinhvienErr = $namsinhsvErr = $lopErr = $diachiErr = "";
	$hoten = $masinhvien = $namsinhsv = $lop = $diachi = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["hoten"])) {
			$hotenErr = "Vui lòng nhập họ tên sinh viên!";
		} else {
			$hoten = test_input($_POST["hoten"]);
		}

		if (empty($_POST["masinhvien"])) {
			$masinhvienErr = "Vui lòng nhập mã sinh viên!";
		} else {
			$masinhvien = test_input($_POST["masinhvien"]);
		}

		if (empty($_POST["namsinhsv"])) {
			$namsinhsvErr = "Vui lòng nhập năm sinh!";
		} else {
			$namsinhsv = test_input($_POST["namsinhsv"]);
		}

		if (empty($_POST["lop"])) {
			$lopErr = "Nhập lớp cho sinh viên!";
		} else {
			$lop = test_input($_POST["lop"]);
		}

		if (empty($_POST["diachi"])) {
			$diachiErr = "Vui lòng nhập địa chỉ!";
		} else {
			$diachi = test_input($_POST["diachi"]);
		}
	}

	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	?>
	<form class="form-section" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	<h1 class="title">Thêm sinh viên tại đây!</h1>
		Tên sinh viên: <input class="add-name" type="text" name="hoten">
		<span class="error">* <?php echo $hotenErr; ?></span>
		<br>
		Mã sinh viên: <input class="add-id"  type="text" name="masinhvien">
		<span class="error">* <?php echo $masinhvienErr; ?></span>
		<br>
		Năm sinh: <input class="add-birthday"  type="text" name="namsinhsv">
		<span class="error">*<?php echo $namsinhsvErr; ?></span>
		<br>
		Lớp: <input class="add-class"  type="text" name="lop">
		<span class="error">*<?php echo $lopErr; ?></span>
		<br>
		Địa chỉ: <input class="add-address"  type="text" name="diachi">
		<span class="error">*<?php echo $diachiErr; ?></span>
		<br>
		<input class="add-btn" type="submit" name="Them" value="Thêm sinh viên">
	</form> <br>
	<a href="home.php"> <input class="back-home" type="submit" name="button" value="Trang chủ"> </a>

</body>

</html>