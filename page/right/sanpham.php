<?php
   $sql_chitiet= "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc= tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham = '$_GET[id]' LIMIT 1";
   $query_chitiet= mysqli_query($mysqli,$sql_chitiet);
  while($row_chitiet=mysqli_fetch_array( $query_chitiet)){

?>	
<div class="col-md-6 table-responsive">
<nav class="navbar navbar-light ">
  <div style="float: left;" class="container-fluid">
    <span class="navbar-brand mb-0 h1">Danh mục :<?php echo $row_chitiet['tensanpham'] ?></span>
  </div>
</nav>
</div>
<form method="POST" action="page/right/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
<div class="wrapper_chitiet">
<div class="hinhanh_sanpham">
<img width="50%" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
</div>
<div class="chitiet_sanpham">

<h3 class="ten_sanpham"><?php echo $row_chitiet['tensanpham'] ?></h3>
<ul style="display: flex; list-style-type: none; margin: 0px; padding: 0px;margin-bottom:15px;">
				<li style="color: orange; font-size: 13pt; padding-top: 2px; margin-right: 5px;">5.0</li>
				<li style="color: orange; padding: 2px;">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
				<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
				</svg>
				</li>
				<li style="color: orange; padding: 2px;">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
				<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
				</svg>
				</li>
				<li style="color: orange; padding: 2px;">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
				<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
				</svg>
				</li>
				<li style="color: orange; padding: 2px;">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
				 <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
				</svg>
				</li>
				<li style="color: orange; padding: 2px;">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
				<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
				</svg>
				</li>
				<li style="margin-left: 20px; border-left: solid #dad7d7 1px; font-size: 13pt; padding-top: 3px; padding-left: 20px;">7,635 Đã Bán</li>
				</ul>
<p class="ma_soluong_size">Mã : <?php echo $row_chitiet['masp'] ?></p>
<p class="ma_soluong_size">Số lượng : <?php echo $row_chitiet['soluong'] ?></p>
<p class="ma_soluong_size">Size : <?php echo $row_chitiet['size'] ?></p>
<p class="gia_sanpham"><?php echo number_format($row_chitiet['giasp']).'₫'?></p>
<p class="giamgia_sanpham"> <?php echo number_format($row_chitiet['giamgia']).'₫'?></p>

<div class="clear"></div>

<?php
    if(isset($_SESSION['dangky'])){
    ?>

<input class="mua" type="submit" name="muangay" value="Mua ngay">
<?php 
    }else{
?>
    <p><a href="chitiet.php?quanly=dangnhap"> 
<input class="mua" type="button" value="Đăng nhập để mua ngay"></a>
<?php
    }
    ?>
</div>

<div class="clear"></div>
<p class="ma_noidung">CHI TIẾT SẢN PHẨM :<br> <p class="noidung_size"> <?php echo $row_chitiet['noidung'] ?></p></p>

</div>
</form>
<?php }?>
<script type="text/javascript">
	function addMoreCart(delta) {
		num = parseInt($('[name=num]').val())
		num += delta
		if(num < 1) num = 1;
		$('[name=num]').val(num)
	}

	function fixCartNum() {
		$('[name=num]').val(Math.abs($('[name=num]').val()))
	}
</script>
<div class="clear"></div>

<?php

   $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc= tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT  5";
   $query_pro= mysqli_query($mysqli,$sql_pro);
?>
    <p style="font-size: 30px;font-family: Arial, Helvetica, sans-serif; text-align: center;">SẢN PHẨM LIÊN QUAN</p>
    <div class="sanphamlienquan">
<a style="float: right;text-decoration: none; color:#3f56aa;margin-top:-20px;" href="indexs.php?quanly=danhmucsp&id=1"> Xem thêm >></a>
           <ul class="product_list">
           <?php 
            while($row = mysqli_fetch_array($query_pro)){
        ?>

                 <li>
                  
                   <div class="khoi">
                   <a href="chitiet.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">

                   <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" ></a>
                   <div class="khoi3">
<form method="POST" action="page/right/themgiohang.php?idsanpham=<?php echo $row['id_sanpham'] ?>">
                       
                  <button type="submit" name="themgiohang"><i class="fas fa-shopping-cart"></i></button>
               </form>

               <a href="chitiet.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">

                  <button class="khoi2" ><i class="fas fa-eye "></i></button></a>
                
                  

            
                  </div>
     
                   <a href="chitiet.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
                   <p class="title_product"><?php echo $row['tensanpham'] ?></p>
                 
                   <p class="giamgia_sp"><?php echo number_format($row['giamgia']).'₫'?></p>
                   </div>

               </li>
       <?php } ?>
              
           </ul>
            </a>
           </div>
<div class="clear"></div>


<?php
  $tukhoa = '';
  if(isset($_SESSION['dangky'])){
    $sql_dl_tk_kh = "SELECT * FROM tbl_timkiem WHERE tbl_timkiem.id_khachhang='".$_SESSION['id_khachhang']."'";
    $kq = mysqli_query($mysqli,$sql_dl_tk_kh); 
    $data = mysqli_fetch_array($kq); 
    if (isset($data)) 
      $tukhoa = $data['tukhoa'];
  }
  else {
    if (isset($_SESSION['tukhoa']))
      $tukhoa = $_SESSION['tukhoa'];
  }
  $sql_gioi_thieu = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.tensanpham LIKE '%".$tukhoa."%' ORDER BY tbl_sanpham.id_sanpham DESC LIMIT  5";
  $query_gioi_thieu= mysqli_query($mysqli,$sql_gioi_thieu);
  if ($query_gioi_thieu->num_rows > 0) {
?>
    <p style="font-size: 30px;font-family: Arial, Helvetica, sans-serif; text-align: center;">SẢN PHẨM CÓ THỂ BẠN THÍCH</p>
    <div class="sanphamlienquan">
           <ul class="product_list">
           <?php 
            while($row = mysqli_fetch_array($query_gioi_thieu)){
        ?>

                 <li>
                  
                   <div class="khoi">
                   <a href="chitiet.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">

                   <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" ></a>
                   <div class="khoi3">
<form method="POST" action="page/right/themgiohang.php?idsanpham=<?php echo $row['id_sanpham'] ?>">
                       
                  <button type="submit" name="themgiohang"><i class="fas fa-shopping-cart"></i></button>
               </form>

               <a href="chitiet.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">

                  <button class="khoi2" ><i class="fas fa-eye "></i></button></a>
                
                  

            
                  </div>
     
                   <a href="chitiet.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
                   <p class="title_product"><?php echo $row['tensanpham'] ?></p>
                 
                   <p class="giamgia_sp"><?php echo number_format($row['giamgia']).'₫'?></p>
                   </div>

               </li>
       <?php }} ?>
              
           </ul>
            </a>
           </div>
<div class="clear"></div>
