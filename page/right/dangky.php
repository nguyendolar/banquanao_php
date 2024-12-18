<?php
if(isset($_POST['dangky'])){
    $id_dangky= $_POST['id_dangky'];
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];   
    $matkhau = md5($_POST['matkhau']);
    $diachi = $_POST['diachi'];
	$id_role = $_POST['role_id'];
    $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(id_dangky,tenkhachhang,email,dienthoai,matkhau,diachi,role_id) VALUE ('". $id_dangky."','".$tenkhachhang."','".$email."', '".$dienthoai."', '".$matkhau."', '".$diachi."',4 )");
        if($sql_dangky){
        echo'<p style="color:red">Bạn đã đăng ký thành công</p>';
	
        $_SESSION['dangky'] = $tenkhachhang;

        $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
        header('Location:chitiet.php?quanly=giohang');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Đăng Ký</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="https://gokisoft.com/uploads/2021/03/s-568-ico-web.jpg" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body">
	<div class="container">
		<div class="panel panel-primary" style="width: 480px; margin: 0px auto; margin-top: 50px; background-color: white; padding: 10px; border-radius: 5px; box-shadow: 2px 2px 2px 2px #9ac9f5;">
			<div class="panel-heading">
				<h2 class="text-center">Đăng Ký Tài Khoản</h2>
				<h5 style="color: red;" class="text-center"></h5>
			</div>
			<div class="panel-body">
				<form action="" method="POST" >
					<div class="form-group">
					  <label >Họ & Tên:</label>
					  <input type="text" class="form-control" id="email" name="hovaten" placeholder="Nhập Họ & Tên"  >
					</div>
					<div class="form-group">
					  <label >Email:</label>
					  <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email"  >
					</div>
                    <div class="form-group">
					  <label >Số điện thoại</label>
					  <input  type="text" class="form-control" id="pwd" name="dienthoai" minlength="6" placeholder="Nhập số điện thoại" >
					</div>
                    <div class="form-group">
					  <label>Địa chỉ</label>
					  <input type="text" class="form-control" id="diachi"  placeholder="Nhập địa chỉ" name="diachi" >
					</div>
					<div class="form-group">
					  <label for="pwd">Mật Khẩu:</label>
					  <input required="true" type="password" class="form-control" id="pwd" name="matkhau" minlength="6">
					</div>
					<div class="form-group">
					  <label for="confirmation_pwd">Xác Minh Mật Khẩu:</label>
					  <input required="true" type="password" class="form-control" id="confirmation_pwd" minlength="6">
					</div>
					<div class="form-group" style="text-align: center; ">
				<input type="submit" name="dangky" class="btn btn-success" value="Đăng ký" style="margin-bottom: 15px;" ></input>
				<br>
			<a href="chitiet.php?quanly=dangnhap" style="text-decoration: none;">Đã có tài khoản</a>
			</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	function validateForm() {
		$pwd = $('#pwd').val();
		$confirmPwd = $('#confirmation_pwd').val();
		if($pwd != $confirmPwd) {
			alert("Mật khẩu không khớp, vui lòng kiểm tra lại")
			return false
		}
		return true
	}
</script>
</body>
</html>