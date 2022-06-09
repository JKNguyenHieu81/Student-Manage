<?php 
	include "config.php";

	$this_masinhvien = $_GET['this_masinhvien'];

	$sql = "SELECT * FROM baitapgodiem WHERE masinhvien = '$this_masinhvien' ";

	$query = mysqli_query($conn, $sql );

	$rows = mysqli_fetch_assoc($query);

	if(isset($_POST['sua']))
	{
		echo "string";
		$hoten = $_POST['hoten'];
		$masinhvien = $_POST['masinhvien'];
		$namsinhsv = $_POST['namsinhsv'];
		$lop = $_POST["lop"];
        $diachi = $_POST["diachi"];

		$sql = "UPDATE baitapgodiem SET hoten = '$hoten', masinhvien = '$masinhvien', namsinhsv = '$namsinhsv', lop = '$lop', diachi = '$diachi' WHERE masinhvien = '$this_masinhvien'";

		mysqli_query($conn,$sql);
	}
 ?>


 <form action="" method="POST">
 	<label for="">Họ tên</label><input type="text" name="hoten" value="<?php echo $rows["hoten"]; ?>"><br>
 	<label for="">Mã sinh viên</label><input type="text" name="masinhvien" value="<?php echo $rows["masinhvien"]; ?>"><br>
 	<label for="">Năm sinh</label><input type="text" name="namsinhsv" value="<?php echo $rows["namsinhsv"]; ?>"><br>
	 <label for="">Lớp</label><input type="text" name="lop" value="<?php echo $rows["lop"]; ?>"><br>
   <label for="">Địa chỉ</label><input type="text" name="diachi" value="<?php echo $rows["diachi"]; ?>"><br>
 	<button name="sua">
 		Sửa
 	</button>
     <button><a href="home.php">Trang chủ</a></button>
 </form>