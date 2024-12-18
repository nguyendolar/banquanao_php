<?php 
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
    unset($_SESSION['dangky']);
    unset($_SESSION['id_khachhang']);
    unset($_SESSION['cart']);
}
?>
<div class="header">    
<ul class="list_header">
<li><a href="chitiet.php?quanly=lienhe">Liên Hệ <i class="fas fa-headset "></i></a></li>
  <li ><a href="">  <i style="color: blue;" class="fab fa-facebook fa-lg"></i></a></li> 
  <li ><a href="">  <i style="color: red;" class="fab fa-instagram-square fa-lg"></i></a></li>       
</ul>
<ul style="display: block;">
<?php
if(isset($_SESSION['dangky'])){ 
?>
<div class="dropdown">
<button class="dropbtn"><i class="fas fa-user-alt"><?php  echo '<span style = "color:red;font-size:18px;";">'. $_SESSION['dangky'].'</span>';?></i></button>
<div class="dropdown-content">
  <a style="text-decoration: none;" href="chitiet.php?quanly=taikhoan">Tài khoản <i class="fas fa-user-circle"></i></a>
  <a style="text-decoration: none;" href="chitiet.php?quanly=donhang">Đơn hàng đã đặt</a>
  <a style="text-decoration: none;" href="index.php?dangxuat=1">Đăng xuất <i class="fas fa-sign-out-alt"></i></a>
</div>
</div>
<?php
}else{
?>

 <a  href="chitiet.php?quanly=dangnhap"><i class="fas fa-user-alt"> Đăng nhập<?php  if(isset($_SESSION[ 'cart'])){ }?></i></a>
<?php
}
?>
</ul>
<ul>
     <form action="indexs.php?quanly=timkiem" method="POST">
            <input style="margin-left: 29%; width:532px;height:39px;border-radius :5px;    border: solid 1px #ff7f00; outline:none;padding:10px;" type="text" name="tukhoa" placeholder="Tìm kiếm..">
            <button style="height: 40px;margin: -21px; border: none; border-radius:4px;color:white; background: #ee7c1a;outline:none;width:40px;" name="timkiem" type="submit"><i class="fa fa-search"></i></button>
            </form>        
</ul>
</div>

