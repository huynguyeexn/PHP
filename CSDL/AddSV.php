<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thêm dữ liệu cho bảng sinh viên</title>
	<link rel="stylesheet" href="">
	
	<style type="text/css">
		body{
			color: white;
			background: linear-gradient(45deg, #73FFE9 , #007281);
			background: url('../Images/bg.jpeg');
		}
		input[type="text"]{
			padding: 5px 10px;
			border: 1.5px solid white;
			border-radius: 2px;
			margin: 5px;
			background: none;
		}
		.button{
			color: white;
			padding: 10px;
			width: 100%;
			background: linear-gradient(65deg, #00F9D2 -25%, #00A2B8 100%);
			border: none;
			border-radius: 5px;
			box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
			transition:0.25s;
		}
		.button:hover{
			transform: translate(-3px, -3px);

			box-shadow: 5px 5px 2px rgba(0, 0, 0, 0.2);
		}
		.main{
			padding: 20px;
			border-radius: 5px;
			margin: 0;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
			background: rgba(0, 0, 0, 0.2);
		}
	</style>
</head>
<body>
	<?php 
		if(isset($_POST["submit"]))
		{
			$masv = $_POST["masv"];
			$tensv = $_POST["tensv"];
			$diachi = $_POST["diachi"];
			$sdt = $_POST["sdt"];

			//tạo chuỗi kết nối CSDL
			$connect = mysqli_connect('localhost','root','','qlsv') or die('Kết nối không thành công');
			mysqli_set_charset($connect,'utf8');

			$sql2= "select masv from sinhvien where masv='$masv'";
			$kq = mysqli_query($connect,$sql2);
			$data = mysqli_fetch_assoc($kq);
			if($masv == "" ){
				$error = "Mã sinh viên không được để trống";
			}
			else if(isset($data))
			{
				$error = "Mã sinh viên đã tồn tại";
			}
			else
			{
					//khai báo câu lệnh sql
					$sql = "insert into sinhvien(masv,tensv,diachi,sdt) value('$masv','$tensv','$diachi','$sdt')";
					//thực thi cau lệnh truy vấn
					$result = mysqli_query($connect, $sql);

					if(mysqli_affected_rows($connect)>0){
						$error ="Thêm thành công";
					}
					else{
						$error ="Thêm không thành công";
					}
			}
		}

	?>
	<div class="main" style="">
		<form action="AddSV.php" method="post" accept-charset="utf-8">
			<table>
				<tbody>
					<tr>
						<td>Mã sinh viên</td>
						<td>
							<input type="text" name="masv">
						</td>
					</tr>
					<tr>
						<td>Tên sinh viên</td>
						<td>
							<input type="text" name="tensv">
						</td>
					</tr>
					<tr>
						<td>Địa chỉ</td>
						<td>
							<input type="text" name="diachi">
						</td>
					</tr>
					<tr>
						<td>Điện thoại</td>
						<td>
							<input type="text" name="sdt">
						</td>
					</tr>
					<tr >
						<td colspan="2" style="text-align: center">
							<button class="button" type="submit" name="submit"><strong>Thêm</strong></button>
						</td>
					</tr>
					<tr >
						<td  colspan="2" style="text-align: center">
							<?php if(isset($error)) echo "<strong style='color: red'>$error</strong>";?>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</body>
</html>