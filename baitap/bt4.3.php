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
		$pi = 3.14;
		$bankinh = $_GET['bankinh'];
		$dientich = $pi * ($bankinh * $bankinh);
		$chuvi = 2 * $pi * $bankinh;
	}

 ?>
	<form action="#" method="get">
	<table style="background-color: #9575CD">
		<tbody>
			<tr style="padding: 0;border: none;background-color: #D1C4E9;">
				<td colspan="2"><h2 style="padding: 10px; color: black;">DIỆN TÍCH HÌNH TRÒN</h2></td>
			</tr>
			<tr>
				<td>Bán kính:</td>
				<td>
					<input type="text" name="bankinh" value="<?php if(isset($bankinh)) echo $bankinh; ?>">
				</td>
			</tr>
			<tr>
				<td>Diện tích:</td>
				<td>
					<input type="text" readonly name="dientich" value="<?php if(isset($dientich)) echo $dientich; ?>">
				</td>
			</tr>
			<tr>
				<td>Chu vi:</td>
				<td>
					<input type="text" readonly name="chuvi" value="<?php if(isset($chuvi)) echo $chuvi; ?>">
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