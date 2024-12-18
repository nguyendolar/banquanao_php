<?php

   $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY tbl_sanpham.id_sanpham DESC";
   $query_pro= mysqli_query($mysqli,$sql_pro);
   //get tên danh mục
   $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
   $query_cate= mysqli_query($mysqli,$sql_cate);
   $row_title = mysqli_fetch_array($query_cate);
?>
<h2><?php echo $row_title['tendanhmuc'] ?></h2>
           <ul class="product_list">
               <?php
               while($row_pro = mysqli_fetch_array($query_pro)){
               ?>
               <li>
               <div class="khoi">
                  <a href="chitiet.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
                  <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" ></a>
                  <div class="khoi3">
<form method="POST" action="page/right/themgiohang.php?idsanpham=<?php echo $row_pro['id_sanpham'] ?>">
                 <button type="submit" name="themgiohangs"><i class="fas fa-shopping-cart"></i></button>
              </form>
              <a href="chitiet.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
                 <button class="khoi2" ><i class="fas fa-eye "></i></button></a>
                 </div>
                  <a href="chitiet.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
                  <p class="title_product"><?php echo $row_pro['tensanpham'] ?></p>
                  <p class="gia_sp"><?php echo number_format($row_pro['giasp']).'₫'?></p>
                  <p class="giamgia_sp"><?php echo number_format($row_pro['giamgia']).'₫'?></p>
                  </div>
               </li>
             <?php }?>
           </ul>
           </div>
    </div>
    <div class="clear"></div>
