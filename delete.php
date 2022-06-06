

<?php 
	include "config.php";

	$this_masinhvien = $_GET['this_masinhvien'];

	$sql = "DELETE FROM baitapgodiem WHERE masinhvien='$this_masinhvien'";

	echo "Sinh viên này đã được xóa! " . $this_masinhvien;

	mysqli_query($conn,$sql);
 ?>