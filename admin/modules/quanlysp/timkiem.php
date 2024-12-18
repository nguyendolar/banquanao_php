<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham  LIKE '%".$tukhoa."%'";
    $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
    <h2>Tìm Kiếm : <?php  echo $tukhoa; ?></h2>
    <div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3 class="the_h">Quản Lý Sản Phẩm</h3>
		<a href="index.php?action=quanlysp&query=them"><button class="btn btn-success">Thêm Sản Phẩm</button></a>
		<table class="table table-bordered table-hover" style="margin-top: 20px;">
    <thead>
  <tr style="text-align: center;" >
   <th>id</th>
   <th>Tên</th>
   <th>Giá</th>
   <th>Giảm giá</th>
   <th>Số lượng</th>
   <th>Size</th>
   <th>Danh mục</th>
   <th>Hình ảnh</th>
   <th>Mã sản phẩm</th>
   <th>Trạng thái</th>
   <th style="text-align: center;" colspan="2">Quản lý</th>
  </tr>
  </thead>
  <tbody>
  <?php
 $i = 0;
  while($row = mysqli_fetch_array($query_lietke_sp)){
    $i++;
  ?>
  <tr style="text-align: center;" >
    <td><?php echo $i ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><?php echo $row['giasp'] ?></td>
    <td><?php echo $row['giamgia'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['size'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><img src = "modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>"width ="100px";height="100px"></td>
    <td><?php echo $row['masp'] ?></td>
       <?php

if( $_SESSION['role_id'] == 1 ){
 ?>
 <td>
    <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row[ 'id_sanpham'] ?>"><button class="btn btn-danger">Xóa</button></a> </td>  
<?php 
}elseif( $_SESSION['role_id'] == 2 ){
  
?>
<td>
    <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row[ 'id_sanpham'] ?>"><button class="btn btn-danger">Xóa</button></a> </td> 
      <?php
}else{
      ?>
      <td width = "80px">Ẩn</td>
      <?php } ?>
    <td>
    <a href="
?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>"><button class="btn btn-warning">Sửa</button></a>
    </td>
  </tr>
  <?php
  }
  ?>

               
 