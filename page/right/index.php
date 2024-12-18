<?php
if(isset($_GET['trang'])){
    $page = $_GET['trang'];
}else{
    $page = '';
}
if($page == '' || $page == 1){
    $begin = 0;
}else{
    $begin = ($page*8)-8;
}
   $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc= tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin, 8";
   $query_pro= mysqli_query($mysqli,$sql_pro);
?>
<?php
	if(isset($_POST['loc'])){	
	}
    $orderField = isset($_GET['quanly']) ? $_GET['quanly'] : "";
    $orderSort = isset($_GET['sort']) ? $_GET['sort'] : "";
 
 if(!empty($orderField) && !empty($orderSort)){
     $orderCondition = "ORDER BY `tbl_sanpham`.`".$orderField."` ".$orderSort;
 
	$sql_pro = "SELECT * FROM tbl_sanpham  ".$orderCondition."  ";
	$query_pro = mysqli_query($mysqli,$sql_pro);
} 
?>
    <h2>SẢN PHẨM MỚI NHẤT</h2>
    <div class="chon_size">
<select name="loc" class="selects" onchange="this.options[this.selectedIndex].value && (window.location= this.options[this.selectedIndex].value);">
	<option value="">Sắp xếp giá</option>
	<option value="?quanly=giamgia&sort=desc">Từ cao đến thấp </option>
	<option value="?quanly=giamgia&sort=asc">Từ thấp đến cao</option>	
</select>
</div>
<div class="clear"></div>
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
                  <button type="submit" name="themgiohangs"><i class="fas fa-cart-plus"></i></button>
<?php 
    }else{
    }      
?>   
              </form>
              <a href="chitiet.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
                 <button class="khoi2" ><i class="fas fa-eye "></i></button></a>                                    
                 </div>   
                  <a href="chitiet.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
                  <p class="title_product"><?php echo $row['tensanpham'] ?></p>
                  <p class="gia_sp"><?php echo number_format($row['giasp']).'₫'?></p>               
                  <p class="giamgia_sp"><?php echo number_format($row['giamgia']).'₫'?></p>                 
                  </div>
             </li>
<?php } ?>             
           </ul>
           <div class="clear"></div>
           <?php
             $sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
             $row_count = mysqli_num_rows($sql_trang);
             $trang = ceil($row_count/8);
             ?>
           
<nav style="  width: 0%; margin: auto;margin-top: 70px;" aria-label="Page navigation example">
  <ul class="pagination">
      <a class="page-link" href="#" aria-label="Previous">    
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php              
                for($i=1;$i<=$trang;$i++){
                ?>
    <span class="page-item"><a class="page-link" <?php if($i == $page){echo 'style="background: #bfbfbf;"';}else{ echo ''; } ?> href="indexs.php?
    trang=<?php echo $i ?>"><?php echo $i ?></a></span>        
<?php
 }
?>
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>               
 </li>
  </ul>
</nav>
    <div class="clear"></div>
            </div>

