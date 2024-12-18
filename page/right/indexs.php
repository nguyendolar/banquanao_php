<?php

   $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc= tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT  20";
   $query_pro= mysqli_query($mysqli,$sql_pro);
?>
    <p style="font-size: 30px;font-family: Arial, Helvetica, sans-serif; text-align: center;color:#78225a;margin-top:10px;">HÀNG MỚI VỀ</p>
    <div>
<a style="margin-left: 46%;text-decoration: none; color:#3f56aa;margin-top:-20px;" href="indexs.php?quanly=danhmucsp&id=1"> Xem thêm >></a>
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
<?php
    if(isset($_SESSION['dangky'])){
    ?>                
                  <button type="submit" name="themgiohang"><i class="fas fa-cart-plus"></i></button>
                  <?php 
    }else{
    }    
?>   
   </form>
               <a href="chitiet.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
    <div style="clear:both"></div>
          <button class="khoi2" ><i class="fas fa-eye"></i></button></a>                    
                  </div>   
                   <a href="chitiet.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
                   <p class="title_product"><?php echo $row['tensanpham'] ?></p>            
                   <p class="giamgia_sp"><?php echo number_format($row['giamgia']).'₫'?></p>
                   <?php
    if(isset($_SESSION['dangky'])){
    ?>
<form method="POST" action="page/right/themgiohang.php?idsanpham=<?php echo $row['id_sanpham'] ?>">
                   <button style="width:100%;" type="submit" name="muangay" class="btn btn-success">Mua ngay <i class="fas fa-shopping-cart"></i></button>
                   </form>
                   <?php 
    }else{
?>        
<a href="chitiet.php?quanly=dangnhap">  
<button style="width:100%;"  type="button" class="btn btn-success">Đăng nhập để mua ngay <i class="fas fa-shopping-cart"></i></button></a>

<?php
    }
    ?>       
                   </form>
                   </div>
               </li>
       <?php } ?>           
           </ul>
            </a>
           </div>
           <div class="clear"></div>
<?php
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tinhtrang=1 ORDER BY id DESC LIMIT 3";
	$query_bv = mysqli_query($mysqli,$sql_bv);
	
?> <a style="text-decoration: none;" href="chitiet.php?quanly=tintuc&id=1">
	  <h2 style="text-decoration: none;text-transform: uppercase;color:#ff700b;text-align:center;margin-top:80px;">Tin tức mới nhất</h2></a>
      <a  style="margin-left: 46%;text-decoration: none; color:#3f56aa;margin-top:-20px;" href="chitiet.php?quanly=tintuc&id=1">Xem thêm >></a>
	<?php
	while($row_bv = mysqli_fetch_array($query_bv)){ 
	?>
	<div class="product_lists" >
	<div class="clearfix">
    <li class="tintuc_sp">
					<a style="text-decoration: none;" href="chitiet.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>">
                    <div class="img-container">	<img  src="admin/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>"></div>
							<h2 class="title_products"><?php echo $row_bv['tenbaiviet'] ?></h3>							
						</a>
            <p class="tomtat_sanpham" style="margin:10px" ><?php echo $row_bv['tomtat'] ?></p>
	</div>
			</li>
			</div>
		<?php
		} 
		?>
</div>
           <div class="clear"></div>
            </div>

     
