<?php 
	include "config.php";

	$this_masinhvien = $_GET['this_masinhvien'];

	$sql = "SELECT * FROM baitapgodiem WHERE masinhvien = '$this_masinhvien' ";

	$query = mysqLi_query($conn, $sql );

	$rows = mysqli_fetch_assoc($query);

	if(isset($_POST['sua']))
	{
		echo "string";
		$hoten = $_POST['hoten'];
		$masinhvien = $_POST['masinhvien'];
		$namsinhsv = $_POST['namsinhsv'];
		$lop = $_POST["lop"];

		$sql = "UPDATE baitapgodiem SET hoten = '$hoten', masinhvien = '$masinhvien', namsinhsv = '$namsinhsv', lop = '$lop', WHERE masinhvien = '$this_masinhvien'";

		mysqli_query($conn,$sql);
	}
 ?>


 <form action="" method="POST">
 	<label for="">Họ tên</label><input type="text" name="hoten" value="<?php echo $rows["hoten"]; ?>"><br>
 	<label for="">Mã sinh viên</label><input type="text" name="masinhvien" value="<?php echo $rows["masinhvien"]; ?>"><br>
 	<label for="">Năm sinh</label><input type="text" name="namsinhsv" value="<?php echo $rows["namsinhsv"]; ?>"><br>
	 <label for="">Đõ Việt Dũng</label><input type="text" name="lop" value="<?php echo $rows["lop"]; ?>"><br>
 	<button name="sua">
 		Sửa
 	</button>
 </form>