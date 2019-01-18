<?php include('../my resources/header.php') ?>
	<?php 
	if(isset($_POST['submit']))
	{
		$a = $_POST['a'];
		$b = $_POST['b'];
		if($a==0){
			if($b==0){
				$nghiem = "Phương trinh có vô số nghiệm";
			}
			else if($b!=0){
				$nghiem = "Phương trinh vô nghiệm";
			}
		}
		else if($a!=0){
			$nghiem = "x= ". -$b/$a;
		}
	}
 ?>
	<form action="#" method="post">
	<table style="background-color: #9575CD">
		<tbody>
			<tr style="padding: 0;border: none;background-color: #D1C4E9;">
				<td colspan="2"><h2 style="text-align: center;padding: 10px; color: black;">GIẢI PHƯƠNG TRÌNH BẬC NHẤT</h2></td>
			</tr>
			<tr>
				<td>Phương trình: </td>
				<td>
					<input style="width: 10%;margin-right: 0;" type="text" name="a" value="<?php if(isset($a)) echo $a; ?>">
					<pre style="display: inline;">x  +</pre>
					<input style="width: 10%;"  type="text" name="b" value="<?php if(isset($b)) echo $b; ?>">=0
				</td>
			</tr>
			<tr>
				<td>Nghiệm:</td>
				<td>
					<input readonly type="text" name="nghiem" value="<?php if(isset($nghiem)) echo $nghiem; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<input type="submit" name="submit" value="Giải phương trình" />
				</td>
			</tr>
		</tbody>
	</table>
</form>
<?php include('../my resources/footer.php') ?>