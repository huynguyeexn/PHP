<?php 
	include('../my resources/header.php');
	// mảng có khoá do nguòi dùng tự định nghĩa
	$array_a = array("1"=>0,"3"=>10);
	//Mảng tự động tăng
	$array_b = array(20,40,15,-5);

	//duyệt mảng tự động tăng
	//cách 1
	for ($i=0; $i < count($array_b) ; $i++) { 
		echo $array_b[$i];
		echo "<br>";
	}

	echo "<hr><br>";

	//cách 2
	foreach ($array_b as $value) {
		echo $value;
		echo "<br>";
	}

	echo "<hr><br>";
	//Duyệt mảng có khoá do người dùng tự định nghĩa
	foreach ($array_a as $val) {
		echo $val;
		echo "<br>";
	}

	$tong = 0;
	foreach ($array_a as $value) {
		$tong += $value;
	}
	echo "</br><hr></br>";
	echo "Tính tổng mảng b có tổng là:" . $tong;

	//tính tổng dãy số 1 ... n

/*	for ($i=1; $i < n ; $i++) { 
		
	}*/

	echo "</br><hr></br>";

	//tìm kiếm trong mảng
	$x=20;
	$check = false;
	$vitri;
	foreach ($array_b as $key => $value) {
		if($value == $x)
			$check = true;
				$vitri = $key;
					break;
	}
	if($check == true)
		echo "Giá trị $x tồn tại ở vị trí $key trong mảng ";
	else
		echo "Giá trị $x không tồn tại trong mảng ";

	echo "<hr><br>";

	//mảng 2 chiều
	$mang = array(array(1,5,7),array('tùng','sơn','thanh'));
	$mang[2]= array(8,9,21);


	echo "<pre>"; echo print_r($mang);

	echo "<hr><br>";

	//duyệt mảng 2 chiều
	for ($i=0; $i < count($mang) ; $i++) { 

		foreach ($mang[$i] as $key => $value) {
			echo $key." => ".$value;
			echo "<br>";
		}

	}




	 include('../my resources/footer.php');
 ?>