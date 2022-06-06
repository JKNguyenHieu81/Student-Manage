<?php 
	include "config.php";
 ?>
<?php
	if(isset($_POST["Them"]))
	{
		$hoten = $_POST["hoten"];
		$masinhvien = $_POST["masinhvien"];
		$namsinhsv = $_POST["namsinhsv"];
		$lop = $_POST["lop"];

		if($hoten == ""){echo "Không để trống!";}
		if($masinhvien == ""){echo "Không để trống!";}
		if($namsinhsv == ""){echo "Không để trống!";}
		if($lop == ""){echo "Không để trống!";}

		if($hoten != "" && $masinhvien != "" && $namsinhsv != "" && $lop != "")
		{
			$sql = "INSERT INTO baitapgodiem(hoten,masinhvien,namsinhsv,lop) VALUES('$hoten','$masinhvien','$namsinhsv','$lop')";
			mysqli_query($conn,$sql);
		}
	}
 ?>

 <form method="POST" action="">
 	<label for="">Họ tên</label><input type="text" name="hoten"><br>
 	<label for="">Mã sinh viên</label><input type="text" name="masinhvien"><br>
 	<label for="">Năm sinh</label><input type="text" name="namsinhsv"><br>
	<label for="">Lớp</label><input type="text" name="lop"><br>
 	<input type="submit" name="Them" value="Them">
 </form>
