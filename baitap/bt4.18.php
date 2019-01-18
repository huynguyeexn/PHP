<?php include('../my resources/header.php') ?>
	<?php 

 ?>
	<form action="#" method="post" >
	<table>
		<tbody>
			<tr style="">
				<td colspan="2"><h2 style="text-align: center;padding: 10px;">BẢNG CỬU CHƯƠNG</h2></td>
			</tr>
			<tr>
				<td>Bắt đầu tại: </td>
				<td>
					<input style="width: 90%;"  type="text" name="bd" value="<?php if(isset($bd)) echo $bd; ?>">
				</td>
			</tr>
			<tr>
				<td>Kết thúc tại: </td>
				<td>
					<input style="width: 90%;"  type="text" name="kt" value="<?php if(isset($kt)) echo $kt; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2" style="margin: 0; padding: 0;">
					<input type="submit" name="submit" value="Tính" />
				</td>
			</tr>
			<tr>
				<td colspan="2"/>
				<?php 
					if(isset($_POST['submit']))
					{
						$bd = $_POST['bd'];
						$kt = $_POST['kt'];
							echo "
							<form>
								<table style='margin: 10px auto;
								position: relative;
								top: 0;
								left: 0;
								transform: translate(0, 0);'>
							<tbody>";
							for ($i= $bd; $i <= $kt ; $i++) { 
								echo "<td>";
								 for ($j=1; $j <= 10; $j++) { 
								 	echo $i ."x". $j . "=". $i*$j . "<br>";
								 }
								 echo "</td>";
							}
							echo "</tr></tbody></table></form>";
					}
				?>
				</tr>
			</tr>
		</tbody>
	</table>
</form>
<?php include('../my resources/footer.php') ?>