<?php 
		//tạo chuỗi kết nối CSDL
		$connect = mysqli_connect('localhost','root','','qlsv') or die('Kết nối không thành công');

		mysqli_set_charset($connect,'utf8');
		//khai báo câu lệnh sql

		if(isset($_POST["them"]))
		{
			$masv = $_POST["masv"];
			$tensv = $_POST["tensv"];
			$diachi = $_POST["diachi"];
			$sdt = $_POST["sdt"];
			$tenfile="";
			$tenluu="";

			//tạo chuỗi kết nối CSDL
			$connect = mysqli_connect('localhost','root','','qlsv') or die('Kết nối không thành công');
			mysqli_set_charset($connect,'utf8');

			$sql2= "select masv from sinhvien where masv='$masv'";
			$kq = mysqli_query($connect,$sql2);
			$data = mysqli_fetch_assoc($kq);
			if($masv == "" ){
				$error = "Mã sinh viên không được để trống";
			}
			else if(isset($data))
			{
				$error = "Mã sinh viên đã tồn tại";
			}
			else
			{
				if(isset($_FILES["image"])){
				//lấy tên file hình
					$array_ext=array("image/png","image/jpeg","image/jpg","image/gif");
					$ext=$_FILES['image']['type'];
					if(in_array($ext, $array_ext))
					{
						$tenfile= $_FILES['image']['name'];

						$mang = explode('.',$tenfile);
						$tenluu = uniqid()."_".time().".".$mang[1];
						if(!is_dir("images/")) // nếu chưa có thư mục images
						{
							// lệnh tạo thư mục
							mkdir("images/");
							move_uploaded_file($_FILES['image']['tmp_name'],"images/".$tenluu);
							$success = "Hình ảnh tải lên thành công";	
						}
						else
						{
							move_uploaded_file($_FILES['image']['tmp_name'],"images/".$tenluu);
							$success = "Hình ảnh tải lên thành công";	
						}
						
					}
				}
					//khai báo câu lệnh sql
				$sql = "insert into sinhvien(masv,tensv,diachi,sdt,image) value('$masv','$tensv','$diachi','$sdt','$tenluu')";
					//thực thi cau lệnh truy vấn
				$result = mysqli_query($connect, $sql);

				if(mysqli_affected_rows($connect)>0){
					$success ="Mission complete";
				}
				else{
					$error ="Mission fail";
				}
			}
		}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="">
 	<style type="text/css" media="screen">
		*,
		:before,
		:after {
		  box-sizing: border-box;
		}

		body {
		  color:#A7A1AE;
		  background-color:#1F2739;
		}

		form {
		  width: 320px;
		  margin: 45px auto;
		}
		form h1 {
		  font-size: 3em;
		  font-weight: 300;
		  text-align: center;
		  color: #2196F3;
		}
		form h5 {
		  text-align: center;
		  text-transform: uppercase;
		  color: #c6c6c6;
		}
		form hr.sep {
		  background: #2196F3;
		  box-shadow: none;
		  border: none;
		  height: 2px;
		  width: 25%;
		  margin: 0px auto 45px auto;
		}
		form .emoji {
		  font-size: 1.2em;
		}

		.group {
		  position: relative;
		  margin: 45px 0;
		}

		textarea {
		  resize: none;
		}

		input,
		textarea {
		  background: none;
		  color: #c6c6c6;
		  font-size: 18px;
		  padding: 10px 10px 10px 5px;
		  display: block;
		  width: 320px;
		  border: none;
		  border-radius: 0;
		  border-bottom: 1px solid #c6c6c6;
		}
		input:focus,
		textarea:focus {
		  outline: none;
		}
		input:focus ~ label, input:valid ~ label,
		textarea:focus ~ label,
		textarea:valid ~ label {
		  top: -14px;
		  font-size: 12px;
		  color: #2196F3;
		}
		input:focus ~ .bar:before,
		textarea:focus ~ .bar:before {
		  width: 320px;
		}

		input[type="password"] {
		  letter-spacing: 0.3em;
		}

		label {
		  color: #c6c6c6;
		  font-size: 16px;
		  font-weight: normal;
		  position: absolute;
		  pointer-events: none;
		  left: 5px;
		  top: 10px;
		  transition: 300ms ease all;
		}

		.bar {
		  position: relative;
		  display: block;
		  width: 320px;
		}
		.bar:before {
		  content: '';
		  height: 2px;
		  width: 0;
		  bottom: 0px;
		  position: absolute;
		  background: #2196F3;
		  transition: 300ms ease all;
		  left: 0%;
		}

		.btn {
		  background: #fff;
		  color: #959595;
		  border: none;
		  padding: 10px 20px;
		  border-radius: 3px;
		  letter-spacing: 0.06em;
		  text-transform: uppercase;
		  text-decoration: none;
		  outline: none;
		  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
		  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
		}
		.btn:hover {
		  color: #8b8b8b;
		  box-shadow: 0 7px 14px rgba(0, 0, 0, 0.18), 0 5px 5px rgba(0, 0, 0, 0.12);
		}
		.btn.btn-link {
		  background: #2196F3;
		  color: #d3eafd;
		}
		.btn.btn-link:hover {
		  background: #0d8aee;
		  color: #deeffd;
		}
		.btn.btn-submit {
		  background: #2196F3;
		  color: #bce0fb;
		}
		.btn.btn-submit:hover {
		  background: #0d8aee;
		  color: #deeffd;
		}
		.btn.btn-cancel {
		  background: #eee;
		}
		.btn.btn-cancel:hover {
		  background: #e1e1e1;
		  color: #8b8b8b;
		}

		.btn-box {
		  text-align: center;
		  margin: 50px 0;
		}
		.alert {
		  padding: 20px;
		  background-color: #f44336;
		  color: white;
		}

		.closebtn {
		  margin-left: 15px;
		  color: white;
		  font-weight: bold;
		  float: right;
		  font-size: 22px;
		  line-height: 20px;
		  cursor: pointer;
		  transition: 0.3s;
		}

		.closebtn:hover {
		  color: black;
		}
		.alert.success {background-color: #4CAF50;}
		.alert.info {background-color: #2196F3;}
		.alert.warning {background-color: #ff9800;}
 	</style>
 </head>
 <body>
 	<?php 
	 	if(isset($error)){
	 		echo '
	 		<div class="alert warning" >
	 		<span class="closebtn" onclick="this.parentelement.style.display=\'none\'";">&times;</span> 
	 		<strong>lỗi! </strong> '.$error.'</div>
	 		';
	 	}else if(isset($success)){
	 		echo '
	 		<div class="alert success" >
	 		<span class="closebtn" onclick="this.parentelement.style.display=\'none\'";">&times;</span> 
	 		<strong>hoàn thành! </strong> '.$success.'</div>
	 		';}
 	?>
 		<div class="wrapper">
 			<form action="" method="post" enctype="multipart/form-data">
 				<h1>Thêm dữ liệu</h1>
 				<div class="group">
 					<input type="text" name="masv" required="" /><span class="highlight"></span><span class="bar"></span>
 					<label>mã sinh viên</label>
 				</div>
 				<div class="group">
 					<input type="text" name="tensv" required/><span class="highlight"></span><span class="bar"></span>
 					<label>tên sinh viên</label>
 				</div>
 				<div class="group">
 					<input type="text" name="diachi"required/><span class="highlight"></span><span class="bar"></span>
 					<label>địa chỉ</label>
 				</div>
 				<div class="group">
 					<input type="text" name="sdt"required/><span class="highlight"></span><span class="bar"></span>
 					<label>số điện thoại</label>
 				</div>
 				<div class="group">
 					<input  type="file" name="image"class="input-file" /><span class="highlight"></span><span class="bar"></span>
 					<label>ảnh</label>
 				</div>
 				<div class="btn-box">
 					<button class="btn btn-submit" type="submit" name="them">submit</button>
 					<button class="btn btn-cancel" type="button" onclick="window.location.href='sinhvien.php';">cancel</button>
 				</div>

 			</form>
 		</div>
 	</body>
 </html>