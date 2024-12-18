<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_lietke_bv = "SELECT * FROM tbl_baiviet,tbl_danhmucbaiviet WHERE tbl_baiviet.id_danhmuc=tbl_danhmucbaiviet.id_baiviet AND tbl_baiviet.tenbaiviet  LIKE '%".$tukhoa."%'";
	$query_lietke_bv = mysqli_query($mysqli,$sql_lietke_bv);

?>
    <h2>Tìm Kiếm : <?php  echo $tukhoa; ?></h2>
    <div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3 class="the_h">Quản Lý Sản Phẩm</h3>

		<a href="index.php?action=quanlybv&query=them"><button class="btn btn-success">Thêm bài viết</button></a>

		<table class="table table-bordered table-hover" style="margin-top: 20px;">
    <thead>
  <tr>
  <th>STT</th>
    <th style="text-align: center;" >Tên bài viết</th>
    <th style="text-align: center;">Hình ảnh</th>
    <th style="text-align: center;">Danh mục</th>
    <th style="text-align: center;">Tóm tắt</th>
    <th style="text-align: center;">Trạng thái</th>
  	<th style="text-align: center;" colspan="2">Quản lý</th>
  
  </tr>
  </thead>
  <tbody>
  <?php
 $i = 0;
  while($row = mysqli_fetch_array($query_lietke_bv)){
    $i++;
  ?>
  <tr>
  <td><?php echo $i ?></td>
    <td><?php echo $row['tenbaiviet'] ?></td>
    <td><img src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
   
    <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
   
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php if($row['tinhtrang']==1){
        echo 'Kích hoạt';
      }else{
        echo 'Ẩn';
      } 
      ?>
      
    </td>
   	<td>
   		<a href="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>"><button class="btn btn-danger">Xóa</button></a> </td><td> <a href="?action=quanlybaiviet&query=sua&idbaiviet=<?php echo $row['id'] ?>"><button class="btn btn-warning">Sửa</button></a> 
   	</td>
   
  </tr>
  <?php
  }
  ?>
  </table>

               
 