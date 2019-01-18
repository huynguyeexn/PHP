<?php 

if(isset($_GET['masv']))
{
	$masv= $_GET['masv'];

	$connect = mysqli_connect('localhost','root','','qlsv') or die('Kết nối không thành công');

	mysqli_set_charset($connect,'utf8');

	$sql= "select masv from sinhvien where masv='$masv'";
	$kq = mysqli_query($connect,$sql);
	$data = mysqli_fetch_assoc($kq);
		if(isset($data))
			{
				//khai báo câu lệnh sql
				$sql_update = "delete from sinhvien where masv='$masv'";
				//thực thi cau lệnh truy vấn
				$result = mysqli_query($connect, $sql_update);

				if(mysqli_affected_rows($connect)>0){
					header("location:sinhvien.php");
				}
				else{
					header("location:sinhvien.php");
				}
			}
			else
			{
				$error= "Mã sinh viên không tồn tại hãy liên hệ admin để sửa";
			}
}

 ?>

 ?>