<?php
	$sql_lietke_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu DESC";
	$query_lietke_danhmucbv = mysqli_query($mysqli,$sql_lietke_danhmucbv);
?>

<div style="float: right;" class="col-md-6 table-responsive">
		<table class="table table-bordered table-hover" style="margin-top: 20px;">
			<thead>
				<tr style="text-align: center;" >
    <th>STT</th>
   <th>Tên danh mục</th>
   <th style="text-align: center;" colspan="2"></th>
					
  </tr>
  </thead>
  <tbody>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_danhmucbv)){
  	$i++;
  ?>
  <tr style="text-align: center;" >
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
   	<td>
   		<a href="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet'] ?>"><button  class="btn btn-danger">Xóa</button></a> </td> <td> <a href="?action=quanlydanhmucbaiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet'] ?>"><button class="btn btn-warning">Sửa</button></a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
  </tbody>
</div>
<div style="clear: both;"></div>
