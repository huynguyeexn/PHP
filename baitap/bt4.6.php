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
		$soa = $_GET['soa'];
		$sob = $_GET['sob'];
		if($soa > $sob){
			$solh = ' Số a: ' . $soa;
		}else if($sob > $soa){
			$solh = ' Số b: ' . $sob;
		}
		else{
			$solh = "Hai số bằng nhau";
		}
	}

 ?>
	<form action="#" method="get">
	<table style="background-color: #9575CD">
		<tbody>
			<tr style="padding: 0;border: none;background-color: #D1C4E9;">
				<td colspan="2"><h2 style="text-align: center;padding: 10px; color: black;">TÌM SỐ LỚN HƠN</h2></td>
			</tr>
			<tr>
				<td>Số A:</td>
				<td>
					<input type="text" name="soa" value="<?php if(isset($soa)) echo $soa; ?>">
				</td>
			</tr>
			<tr>
				<td>Số B:</td>
				<td>
					<input type="text" name="sob" value="<?php if(isset($sob)) echo $sob; ?>">
				</td>
			</tr>
			<tr>
				<td>Số lớn hơn</td>
				<td>
					<input type="text" readonly name="solh" value="<?php if(isset($solh)) echo $solh; ?>">
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
<?php include('../my resources/footer.php') ?>
</body>
</html>