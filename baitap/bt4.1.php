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
	if(isset($_GET['submit']))
	{
		$cd = $_GET['chieu-dai'];
		$cr = $_GET['chieu-rong'];
		$dt = $cr * $cd;
	}

 ?>
	<form action="#" method="get">
	<table style="background-color: #9575CD">
		<tbody>
			<tr style="padding: 0;border: none;background-color: #D1C4E9;">
				<td colspan="2"><h2 style="padding: 10px; color: black;">DIỆN TÍCH HÌNH CHỮ NHẬT</h2></td>
			</tr>
			<tr>
				<td>Chiều dài:</td>
				<td>
					<input type="text" name="chieu-dai" value="<?php if(isset($cd)) echo $cd; ?>">
				</td>
			</tr>
			<tr>
				<td>Chiều rộng:</td>
				<td>
					<input type="text" name="chieu-rong" value="<?php if(isset($cr)) echo $cr; ?>">
				</td>
			</tr>
			<tr>
				<td>Diện tích:</td>
				<td>
					<input type="text" readonly name="dien-tich" value="<?php if(isset($dt)) echo $dt; ?>">
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
</body>
<?php include('footer.php') ?>
</html>