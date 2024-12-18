<?php
use Carbon\Carbon;
session_start();
include('../../admin/config/config.php');
require('../../mail/sendmail.php');
require('../../carbon/autoload.php');
    use Carbon\CarbonInterval;
	$now = Carbon::now('Asia/Ho_Chi_Minh');
    $id_khachhang = $_SESSION['id_khachhang'];
    $code_order=rand(0,9999);   
    $insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status,updata_time) VALUE('".$id_khachhang."','". $code_order."',1,'". $now."') ";
    $cart_query = mysqli_query($mysqli,$insert_cart);
    if( $cart_query){
        foreach($_SESSION['cart'] as $key => $value){
            $id_sanpham = $value['id'];
            $soluong=$value['soluong'];
            $size = $_POST['size_id'];
            if(isset($_POST['size'])){        
            } 
            $insert_order_details= "INSERT INTO tbl_cart_details(id_sanpham,code_cart,soluongmua,size_id) VALUE('".$id_sanpham."','".$code_order."','".$soluong."','".$size."') ";
      mysqli_query($mysqli,$insert_order_details);          
    }
        $tieude = "Đặt hàng website hshop321.net thành công!";
		$noidung = "<p>Cảm ơn quý khách đã đặt hàng của H-Shop , đơn hàng sẽ được gửi sớm nhất. <br> Mã đơn hàng : ".$code_order."</p>";
		$noidung.="<h4>Đơn hàng đặt bao gồm :</h4p>";

		foreach($_SESSION['cart'] as $key => $val){
			$noidung.= "<ul style='border:none ;margin:10px;'>
				<li>".$val['tensanpham']."</li>
				<li><img src='".$val["hinhanh"]."' width='100'/>
                </li>
				<li>".$val['masp']."</li>
				<li>".number_format($val['giamgia'],0,',','.')."đ</li>
				<li>".$val['soluong']."</li>
				</ul>";
		}
		$maildathang = $_SESSION['email'];      
		$mail = new Mailer();
		// $mail->dathangmail($tieude,$noidung,$maildathang);
    }
unset($_SESSION['cart']);
header('location:../../chitiet.php?quanly=camon')

?>