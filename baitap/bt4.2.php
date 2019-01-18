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
			width: 400px;
			border: none;
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
		$nd = $_GET['noidung'];
		$mn = $_GET['maunen'];
		$mc = $_GET['mauchu'];
	}
 ?>
	<form action="#" method="get">
	<table style="background-color: #9575CD ;margin: 200px auto 0;">
		<tbody>
			<tr style="padding: 0;border: none;background-color: #D1C4E9;">
				<td colspan="2"><h2 style="padding: 10px; color: black;">ĐỊNH MÀU CHỮ - MÀU NỀN</h2></td>
			</tr>
			<tr>
				<td>Nội dung: </td>
				<td>
					<input type="text" name="noidung" value="<?php if(isset($nd)) echo $nd  ?>">
				</td>
			</tr>
			<tr>
				<td>Màu nền: </td>
				<td>
					<input type="text" name="maunen" value="<?php if(isset($mn)) echo $mn  ?>">
				</td>
			</tr>
			<tr>
				<td>Màu chữ</td>
				<td>
					<input type="text" name="mauchu" value="<?php if(isset($mc)) echo $mc  ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<input type="submit" name="submit" value="Xem kết quả" />
				</td>
			</tr>
		</tbody>
	</table>
	<table style="margin: 0 auto;">
		<tbody>
			<tr>
				<td colspan="2" style="text-align: center;padding: 10px;
			margin: 0;">
					Kết quả khi nhấn nút <i style="color: red">xem Kết quả</i>
				</td>
			</tr>
			<tr>
				<td colspan="2"style="text-align: center;padding: 0px;
			margin: 0;">
					
					<?php if(isset($mn)&& isset($mc) && isset($nd))
						echo '<p style="padding: 10px; background-color:#' . $mn . ';color:#' . $mc . ' ">' . $nd . '</p>';
					?>
				</td>
			</tr>
		</tbody>
	</table>
</form>
<?php include('footer.php') ?>
</body>
</html>