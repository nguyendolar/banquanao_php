<?php
                             
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<div style="float: right;" class="col-md-6 table-responsive">
		<table class="table table-bordered table-hover" style="margin-top: 20px;">
			<thead>
				<tr style="text-align: center;" >
    <th>STT</th>
   <th>Tên danh mục</th>
   <th style="text-align: center; " colspan="2">Quản lý</th>
  </tr>
  </thead>
  <tbody>
  <?php
 $i = 0;
  while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
    $i++;
  ?>
  <tr style="text-align: center;" >
    <td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td>
      <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php  echo $row['id_danhmuc']; ?>"><button  class="btn btn-danger">Xóa</button></a> </td>
      <td>
      <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?> "><button class="btn btn-warning">Sửa</button></a>
    </td>
  </tr>
  <?php
  }
  ?>
  </tbody>

</div>
<div style="clear: both;"></div>

