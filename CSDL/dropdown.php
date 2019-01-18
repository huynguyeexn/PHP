<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dropdown</title>
</head>
<body>
<?php
    if(isset($_POST['submit'])){
        $masv = $_POST['dropsinhvien'];
    }

?>
    <form action="" method="post" accept-charset="utf-8">

    <span>Chọn sinh viên</span>
    <select name="dropsinhvien" id="">
    <?php
       $connect = mysqli_connect('localhost','root','','qlsv') or die('Kết nối không thành công');
       mysqli_set_charset($connect,'utf8');

       $sql = "select masv, tensv from sinhvien";
       $result = mysqli_query($connect,$sql);

       if(mysqli_num_rows($result)>0){
           while($data = mysqli_fetch_assoc($result)){

    ?>


            <option value="<?php echo $data['masv'];?>"> <?php echo $data['tensv']; ?> </option>


    <?php
           }
       }
    ?>
    
    </select>
    <input type="submit" name="submit" value="lấy mã sinh viên">
    <input type="text" name="txt_masv" value="<?php if(isset($masv)) echo $masv; ?>">
    </form>
</body>
</html>