<?php include('../my resources/header.php') ?>
	<?php 
	if(isset($_POST['submit']))
	{
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];
		if($a==0){
			if($b==0){
				if($c==0){
					$nghiem = "Phương trinh có vô số nghiệm";
				}
				else if($c!=0){
					$nghiem = "Phương trinh vô nghiệm";
				}
			}
			else if($b!=0){
				$nghiem = "x= ". -$c/$b;
			}
		}
		else if($a!=0){
			$d = ($b*$b) - (4*$a*$c);
			if($d<0){
				$nghiem = "Phương trinh vô nghiệm";
			}
			else if($d==0){
				$nghiem = "Phương trinh có nghiệm kép x1=x2= ". -$b/2*$a ;
			}
			else if($d>0){
				$nghiem = "Phương trinh có 2 nghiệm phân biệt: x1=" . (-$b + Sqrt($d)) / (2 * $a) . ", x2=" . (-$b - Sqrt($d)) / (2 * $a);
			}
		}
	}
 ?>
	<form action="#" method="post" >
	<table>
		<tbody>
			<tr style="padding: 0;border: none;">
				<td colspan="2"><h2 style="text-align: center;padding: 10px;">GIẢI PHƯƠNG TRÌNH BẬC HAI</h2></td>
			</tr>
			<tr>
				<td>Phương trình: </td>
				<td>
					<input style="width: 10%; margin-right: 0;" type="text" name="a" value="<?php if(isset($a)) echo $a; ?>">
					x <sup>2</sup><pre style="display: inline;">  +</pre>
					<input style="width: 10%;"  type="text" name="b" value="<?php if(isset($b)) echo $b; ?>">x +
					<input style="width: 10%;"  type="text" name="c" value="<?php if(isset($c)) echo $c; ?>">= 0
				</td>
			</tr>
			<tr>
				<td>Nghiệm:</td>
				<td>
					<input readonly type="text" name="nghiem" value="<?php if(isset($nghiem)) echo $nghiem; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2" style="margin: 0; padding: 0;">
					<input type="submit" name="submit" value="Giải phương trình" />
				</td>
			</tr>
		</tbody>
	</table>
</form>
<?php include('../my resources/footer.php') ?>