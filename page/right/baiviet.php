</div>
<?php
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id='$_GET[id]' LIMIT 1";
	$query_bv = mysqli_query($mysqli,$sql_bv);
	$query_bv_all = mysqli_query($mysqli,$sql_bv);
	$row_bv_title = mysqli_fetch_array($query_bv);
?>

 <div class="col-md-6 table">
<nav class="navbar navbar-light ">
  <div style="float: left;" class="container-fluid">
    <span class="navbar-brand mb-0 h1">
 				<ul class="baiviet">
					<?php
					while($row_bv = mysqli_fetch_array($query_bv_all)){ 
					?>
					<li>
						<h2><?php echo $row_bv['tenbaiviet'] ?></h2>
						</div>
</nav>
</div>
					<!-- 	<img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>"> -->
						<p class="title_product"><?php echo $row_bv['tomtat'] ?></p>

						<p style="margin:10px" class="title_product"><?php echo $row_bv['noidung'] ?></p>
					</li>
					<?php
					} 
					?>
				</ul>