<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
	body{
		color: white;
		background: linear-gradient(45deg, #C8C8C8 ,#25D2CC, #005863);
		background-repeat: no-repeat;
		min-height: 100vh;
	}
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
		padding: 5px;
	}
	button{
		color: white;
		padding: 5px 10px;
		width: 100%;
		background: linear-gradient(65deg, #00F9D2 -25%, #00A2B8 100%);
		border: none;
		border-radius: 5px;
		box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
		transition:0.25s;
	}
	button:hover{
		transform: translate(-3px, -3px);

		box-shadow: 5px 5px 2px rgba(0, 0, 0, 0.2);
	}

</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
	<table style="position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	margin: 0;
	background-color: rgba(0,0,0,0.05)">
	<tbody style="margin: 5px;">
		<?php 
		//tạo chuỗi kết nối CSDL
		$connect = mysqli_connect('localhost','root','','qlsv') or die('Kết nối không thành công');

		mysqli_set_charset($connect,'utf8');
		//khai báo câu lệnh sql

		if(isset($_POST["them"]))
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
					$error ="Mission complete";
				}
				else{
					$error ="Mission fail";
				}
			}
		}
		if(isset($_POST["sua"])){

			$masv = $_POST["masv"];
			$tensv = $_POST["tensv"];
			$diachi = $_POST["diachi"];
			$sdt = $_POST["sdt"];

			$sql2= "select masv from sinhvien where masv='$masv'";
			$kq = mysqli_query($connect,$sql2);
			$data = mysqli_fetch_assoc($kq);
			if(isset($data))
			{
				//khai báo câu lệnh sql
				$sql = "update sinhvien set masv='$masv', tensv='$tensv', diachi='$diachi',sdt='$sdt' where masv='$masv'";
				//thực thi cau lệnh truy vấn
				$result = mysqli_query($connect, $sql);

				if(mysqli_affected_rows($connect)>0){
					$error ="Mission complete";
				}
				else{
					$error ="Mission fail";
				}
			}
			else
			{
				$error = "Mã sinh viên không tồn tại hãy liên hệ admin để sửa";
			}
		}
		if(isset($_POST["xoa_ok"])){

			$masv = $_POST["xoa_ok"];

			$sql2= "select masv from sinhvien where masv='$masv'";
			$kq = mysqli_query($connect,$sql2);
			$data = mysqli_fetch_assoc($kq);
			if(isset($data))
			{
				//khai báo câu lệnh sql
				$sql = "DELETE FROM sinhvien WHERE masv='$masv'";
				//thực thi cau lệnh truy vấn
				$result = mysqli_query($connect, $sql);

				if(mysqli_affected_rows($connect)>0){
					$error ="Mission complete";
				}
				else{
					$error ="Mission fail";
				}
			}
			else
			{
				$error = "Mã sinh viên không tồn tại hãy liên hệ admin để sửa";
			}
		}

		$sql = 'select * from sinhvien';
		//thực thi cau lệnh truy vấn
		$result = mysqli_query($connect, $sql);
		//xuất ra màn hình

		while ($db = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td><?php echo "masv: ".$db['masv']; ?></td>
				<td><?php  echo "họ tên: ".$db['tensv'];?></td>
				<td><?php  echo "địa chỉ: ".$db['diachi'];?></td>
				<td><?php  echo "sdt: ".$db['sdt'];?></td>
				<td><?php echo "images: ".$db['images']; ?></td>
				<td >
					<button onclick="document.getElementById('xoa').style.display='block';document.getElementById('xoa_ok').value=<?php echo "'".$db['masv']."'";?>"style="width:auto;"> Xoá
					</button>
					<button onclick="document.getElementById('sua').style.display='block';document.getElementById('sua_sv').value=<?php echo "'".$db['masv']."'";?>"style="width:auto;" > Sửa
					</button>
				</td>
			</tr>
			

			<?php
		}
		?>
		<tr>
			<td colspan="6" rowspan="" headers="" style="text-align: center"><button onclick="document.getElementById('them').style.display='block'"style="width:auto;"> Thêm
			</button></td>
		</tr>
	</tbody>
</table>
<style type="text/css" media="screen">
table, th, td {
	border: 0;
}
table{ border: none;
	margin: 50px auto;
}
input[type="text"]{
	padding: 5px 10px;
	border: 1.5px solid white;
	border-radius: 2px;
	margin: 5px;
	background: none;
	color: white;
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
#them, #sua, #xoa{
	display: none;
	position: fixed;
	z-index: 1;
	left: 0;
	top: 0;
	width: 100%; 
	height: 100%; 
	overflow: auto;
	background-color: rgba(0,0,0,0.4);
}
</style>
<div id="them">
	<form action="connect.php" method="post" accept-charset="utf-8">
		<table style="position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.8);
		background-color: rgba(0,0,0,0.6);
		margin: 0">
		<i class="fas fa-times" style="font-size: 3rem;float: right; margin:7px;"onclick="document.getElementById('them').style.display='none'">
		</i>
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
					<button class="button" type="submit" name="them"><strong>Thêm</strong></button>
				</td>
			</tr>
		</tbody>
	</table>
</form>
</div>
<div id="xoa">
	<form action="connect.php" method="post" accept-charset="utf-8">
		<table style="position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.8);
		background-color: rgba(0,0,0,0.6);
		margin: 0">
		<tbody>
			<tr >
				<td colspan="" style="text-align: center" width="50%">
					<button class="button" type="submit" name="xoa_ok" id="xoa_ok" value=""><strong>Ok</strong></button>
				</td>
				<td colspan="" style="text-align: center" width="50%">
					<button class="button" onclick="document.getElementById('xoa').style.display='none'"><strong>Cancel</strong></button>
				</td>
			</tr>
		</tbody>
	</table>
</form>
</div>
<div id="sua">
	<form action="connect.php" method="post" accept-charset="utf-8">
		<table style="position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.8);
		background-color: rgba(0,0,0,0.6);
		margin: 0
		">
		<i class="fas fa-times" style="font-size: 3rem;float: right; margin:7px;"onclick="document.getElementById('sua').style.display='none'">
		</i>
		<tbody>
			<tr>
				<td>Tên sinh viên</td>
				<td>
					<input type="text" name="masv" id="sua_sv" value="" readonly="">
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
					<button class="button" type="submit" name="sua"><strong>Sửa</strong></button>
				</td>
			</tr>
		</tbody>
	</table>
</form>
</div>
</body>
</html>
<?php 
if (isset($error)) {
	echo "<script>alert('".$error."');</script>";
}
?>