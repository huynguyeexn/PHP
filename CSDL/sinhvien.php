<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quản lý sinh viên</title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}
a{
	color: #A7A1AE;
	text-decoration: none;
}
.container th h1 {
	font-weight: bold;
	font-size: 1em;
	text-align: center;
  	color: #185875;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  min-width: 80%;
	  margin: 0 auto;
  display: table;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}
.container th{
		  padding-top: 0%;
  padding-left:0%;  
}
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
	        z-index: 9999;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
  z-index: 9999;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
	button {
	  background: #2196F3;
	  color: #fff;
	  border: none;
	  padding: 10px 20px;
	  border-radius: 3px;
	  letter-spacing: 0.06em;
	  text-transform: uppercase;
	  text-decoration: none;
	  outline: none;
	  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
	  transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
	}
	button:hover {
	    
	    box-shadow: 0 7px 14px rgba(0, 0, 0, 0.18), 0 5px 5px rgba(0, 0, 0, 0.12);
	  }

	  .chucnang{
	  	color: #E94643;
	  }
	</style>
</head>
<?php 


 ?>
<body>
	<div class="table">
		<!-- <form method="get" action=""> -->
		
		<table class="container">
			<caption style=" color: #FB667A;"> <h2>QUẢN LÝ SINH VIÊN</h2></caption>
			<thead>
				<tr>
					<th><h1>Mã SV</h1></th>
					<th><h1>Tên SV</h1></th>
					<th><H1>Địa chỉ</H1></th>
					<th><h1>SĐT</h1></th>
					<th><h1>Ảnh</h1></th>
					<th colspan="2"><h1>Chức năng</h1></th>	
				</tr>
			</thead>
		<?php 
		//tạo chuỗi kết nối CSDL
		$connect = mysqli_connect('localhost','root','','qlsv') or die('Kết nối không thành công');

		mysqli_set_charset($connect,'utf8');
		//khai báo câu lệnh sql

		$sql = 'select * from sinhvien';
		//thực thi cau lệnh truy vấn
		$result = mysqli_query($connect, $sql);
		//xuất ra màn hình


		while ($db = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td name="masv" width="10%"><?php echo $db['masv']; ?></td>
				<td width="25%"><?php  echo $db['tensv'];?></td>
				<td width="25%"><?php  echo $db['diachi'];?></td>
				<td width="15%"><?php  echo $db['sdt'];?></td>
				<td width="11%" style=" padding: 5px 0 2px 0;text-align:center;"><img src="images/<?php echo $db['image']; ?>" alt="" height="150" > </td>
				<td width="7%">
					<a class="chucnang" style="width:auto;" href="xoa_sv.php?masv=<?php echo $db['masv'] ?>"> Xoá
					</a>
				</td>
				<td width="7%">
					<a class="chucnang" style="width:auto;" href="sua_sv.php?masv=<?php echo $db['masv'] ?>"> Sửa
					</a>
				</td>
			</tr>
			

			<?php
		}
		?>
	</tbody>
</table>
<button onclick="window.location.href='them_sv.php'"style="width:auto; margin: 5px auto; display: flex;"> Thêm
			</button>
<!-- </form> -->
</div>
</body>
</html>