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
			width: 70%; margin: 5px;
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
	if(isset($_GET['submit']))
	{
		$tenchuho = $_GET['tenchuho'];
		$chisocu = $_GET['chisocu'];
		$chisomoi = $_GET['chisomoi'];
		$dongia = $_GET['dongia'];
		$sotientt = ($chisomoi - $chisocu)* $dongia;
	}

 ?>
	<form action="bt4.4.php" method="get">
	<table style="background-color: #9575CD">
		<tbody>
			<tr style="padding: 0;border: none;background-color: #D1C4E9;">
				<td colspan="2"><h2 style="text-align: center;padding: 10px; color: black;">THANH TOÁN TIỀN ĐIỆN</h2></td>
			</tr>
			<tr>
				<td>Tên chủ hộ:</td>
				<td>
					<input type="text" name="tenchuho" value="<?php if(isset($tenchuho)) echo $tenchuho; ?>">
				</td>
			</tr>
			<tr>
				<td>Chỉ số cũ:</td>
				<td>
					<input type="text" name="chisocu" value="<?php if(isset($chisocu)) echo $chisocu; ?>">(Kw)
				</td>
			</tr>
			<tr>
				<td>Chỉ số mới:</td>
				<td>
					<input type="text" name="chisomoi" value="<?php if(isset($chisomoi)) echo $chisomoi; ?>">(Kw)
				</td>
			</tr>
			<tr>
				<td>Đơn giá:</td>
				<td>
					<input type="text" name="dongia" value="<?php if(isset($dongia)) echo $dongia; ?>">(VNĐ)
				</td>
			</tr>
			<tr>
				<td>Số tiền thanh toán:</td>
				<td>
					<input type="text" readonly name="sotientt" value="<?php if(isset($sotientt)) echo $sotientt; ?>">(VNĐ)
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<input type="submit" name="submit" value="Tính" />
				</td>
			</tr>
		</tbody>
	</table>
</form>
<?php include('footer.php') ?>
</body>
</html>