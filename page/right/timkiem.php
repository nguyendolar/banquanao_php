<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
    $_SESSION['tukhoa'] = $_POST['tukhoa'];
    if(isset($_SESSION['dangky'])){
      $sql_dl_tk_kh = "SELECT * FROM tbl_timkiem WHERE tbl_timkiem.id_khachhang='".$_SESSION['id_khachhang']."'";
      $kq = mysqli_query($mysqli,$sql_dl_tk_kh);  
      if ($kq->num_rows > 0) {
        $sql_update = "UPDATE tbl_timkiem SET tukhoa='".$tukhoa."' WHERE id_khachhang='".$_SESSION['id_khachhang']."'";
        mysqli_query($mysqli,$sql_update);
      }
      else {
        $sql_them = "INSERT INTO tbl_timkiem(id_khachhang,tukhoa) VALUE('".$_SESSION['id_khachhang']."','".$tukhoa."')";
        mysqli_query($mysqli,$sql_them);
      }
    }
  }

	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
	$query_pro = mysqli_query($mysqli,$sql_pro);	
?>
    <h2>Tìm Kiếm :<?php echo $_POST['tukhoa']; ?></h2>
           <ul class="product_list">
           <?php
	if(isset($_POST['loc'])){	
	}
    $orderField = isset($_GET['quanly']) ? $_GET['quanly'] : "";
    $orderSort = isset($_GET['sort']) ? $_GET['sort'] : ""; 
 if(!empty($orderField) && !empty($orderSort)){
     $orderCondition = "ORDER BY `tbl_sanpham`.`".$orderField."` ".$orderSort;
 
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'.".$orderCondition."  ";
	$query_pro = mysqli_query($mysqli,$sql_pro);
}
  
?>
    <div class="chon_size">
<select name="loc" class="selects" onchange="this.options[this.selectedIndex].value && (window.location= this.options[this.selectedIndex].value);">
	<option value="">Sắp xếp giá</option>
	<option value="?quanly=giamgia&sort=desc">Từ cao đến thấp </option>
	<option value="?quanly=giamgia&sort=asc">Từ thấp đến cao</option>	
</select>
</div>
           <?php 
            while($row = mysqli_fetch_array($query_pro)){       
        ?>    
                 <li>
                   <a href="chitiet.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
                   <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="100px">
                   <p class="title_product"><?php echo $row['tensanpham'] ?></p>
                   <p class="gia_sp"><?php echo number_format($row['giasp']).'₫'?></p>
                   <p class="giamgia_sp"><?php echo number_format($row['giamgia']).'₫'?></p>
               </li>
       <?php } ?>
              
           </ul>
           </div>
    </div>
    <div class="clear"></div>
