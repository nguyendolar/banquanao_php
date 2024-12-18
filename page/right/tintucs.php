<?php
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_danhmuc='$_GET[id]' ORDER BY id DESC";
	$query_bv = mysqli_query($mysqli,$sql_bv);
	//get ten danh muc
	$sql_cate = "SELECT * FROM tbl_danhmucbaiviet WHERE tbl_danhmucbaiviet.id_baiviet='$_GET[id]' LIMIT 1";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);
?>
<h2><span style="margin-left: -1023px;margin-top:30px;text-transform: uppercase;"><?php echo $row_title['tendanhmuc_baiviet'] ?></span></h3>
<?php
					while($row_bv = mysqli_fetch_array($query_bv)){ 
					?>
					<div class="product_lists" >
					<div class="clearfix">
				
					<li class="tintuc_sp">
					<a style="text-decoration: none;" href="chitiet.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>">
					<div class="img-container">	<img src="admin/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>"></div>
							<h2 class="title_products"><?php echo $row_bv['tenbaiviet'] ?></h2>							
						</a>
					
						<p class="tomtat_sanpham" style="margin:10px" ><?php echo $row_bv['tomtat'] ?></p>
						</div>
					</li>
					</div>
					<?php
					} 
					?>
					
</div>
		