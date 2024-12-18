<div style="float: left;" class="container-fluid">
    <span class="navbar-brand mb-0 h1">Liên hệ</span>
  </div>
<?php
if(isset($_POST['lienhe'])){
    $tennguoidung = $_POST['hoten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];   
    $diachi = $_POST['diachi'];
    $chude =$_POST['chude'];
    $noidung=$_POST['noidung'];
	$time_lh = date('Y-m-d H:i:s');
    $sql_dangky = mysqli_query($mysqli,"INSERT INTO feedback(tennguoidung,email,dienthoai,diachi,chude,noidung,time_lh,status_lh) VALUE ('".$tennguoidung."','".$email."', '".$dienthoai."',  '".$diachi."',  '".$chude."',  '".$noidung."',  '".$time_lh."',1 )");
    if($sql_dangky){
        echo'<p style="color:red">Bạn đã đăng ký thành công</p>';
        $_SESSION['dangky'] = $tennguoidung;
		
        $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);

        header('Location:chitiet.php?quanly=camon');
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
<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	<form method="post">
	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
               
                </div>
			
			</div>
			<div class="form-group">
					  <label ></label>
					  <input type="text" class="form-control" id="email" name="hoten" placeholder="Nhập Họ & Tên"  >
					</div>
			<div class="form-group">
			  <input required="true" type="email" class="form-control" id="email" name="email" placeholder="Nhập email">
			</div>
			<div class="form-group">
			  <input required="true" type="tel" class="form-control" id="phone" name="dienthoai" placeholder="Nhập sđt">
			</div>
            <div class="form-group">
					  <label></label>
					  <input type="text" class="form-control" id="diachi"  placeholder="Nhập địa chỉ" name="diachi" >
					</div>
			<div class="form-group">
			  <input required="true" type="text" class="form-control" id="subject_name" name="chude" placeholder="Nhập chủ đề">
			</div>
			<div class="form-group">
			  <label for="pwd">Nội dung:</label>
			  <textarea class="form-control" rows="3" name="noidung"></textarea>
			</div>
			<button name="lienhe" class="btn btn-success" style="border-radius: 5px; font-size: 26px; width: 100%;">GỬI PHẢN HỒI</button>
		</div>
		<div class="col-md-6">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.096966609173!2d105.78049781424785!3d21.028805785998376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4cd0c66f05%3A0xea31563511af2e54!2zOCBUw7RuIFRo4bqldCBUaHV54bq_dCwgTeG7uSDEkMOsbmgsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1635332704619!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>
</form>
</div>