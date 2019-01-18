<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tính diện tích hinh chữ nhật</title>
	<link rel="stylesheet" href="">
	<style>
	*{
		font-family: Roboto, Helvetica, Arial, sans-serif;
		color: white;
		padding: 0;
		margin: 0;
	}
		table{
			border: none;
			margin: 200px auto;
		}
		input{
			 color: black;
			padding: 5px;
			border: none;
			width: 90%; margin: 5px;
		}
		td{
			padding: 0 5px;
			margin: 5px;
		}
		tr{
			border: none;
		}
		tbody{
			border: none;
			border-spacing: 0px;
		}
	</style>
</head>

<body style="background-image:linear-gradient(to bottom right,#77a1d3,#79cbca,#e684ae);background-repeat:no-repeat; height: 100vh;">
	<?php 
	if(isset($_POST['submit']))
	{
		$hk1 = $_POST['hk1'];
		$hk2 = $_POST['hk2'];
		$tb = ($hk1 + ($hk2 * 2)) / 3;
		if($tb >=8){
			$kq = "Được lên lớp";
			$hl = "Giỏi";
		}else if($tb >= 6.5 && $tb <8){
			$kq = "Được lên lớp";
			$hl = "Khá";
		}else if($tb < 6.5 && $tb >=5){
			$kq = "Được lên lớp";
			$hl = "Trung bình";
		}else{
			$kq = "Ở lại lớp";
			$hl = "Yếu";
		}
	}
 ?>
	<form action="#" method="post">
	<table style="background-color: #9575CD">
		<tbody>
			<tr style="padding: 0;border: none;background-color: #D1C4E9;">
				<td colspan="2"><h2 style="text-align: center;padding: 10px; color: black;">KẾT QUẢ HỌC TẬP</h2></td>
			</tr>
			<tr>
				<td>Điểm KH1:</td>
				<td>
					<input type="text" name="hk1" value="<?php if(isset($hk1)) echo $hk1; ?>">
				</td>
			</tr>
			<tr>
				<td>Điểm KH2:</td>
				<td>
					<input type="text" name="hk2" value="<?php if(isset($hk2)) echo $hk2; ?>">
				</td>
			</tr>
			<tr>
				<td>Điểm TB:</td>
				<td>
					<input readonly type="text" name="tb" value="<?php if(isset($tb)) echo $tb; ?>">
				</td>
			</tr>
			<tr>
				<td>Kết quả:</td>
				<td>
					<input readonly type="text" name="kq" value="<?php if(isset($kq)) echo $kq; ?>">
				</td>
			</tr>
			<tr>
				<td>Xếp loại học lực:</td>
				<td>
					<input readonly type="text" name="hl" value="<?php if(isset($hl)) echo $hl; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2" style="margin: 0; padding: 0;">
					<input type="submit" name="submit" value="Xem kết quả" />
				</td>
			</tr>
		</tbody>
	</table>
</form>
<?php include('../my resources/footer.php') ?>