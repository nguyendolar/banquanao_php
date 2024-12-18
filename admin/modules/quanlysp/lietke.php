
<?php
// phân trang
if(isset($_GET['trang'])){
    $page = $_GET['trang'];
}else{
    $page = '';
}
if($page == '' || $page == 1){
    $begin = 0;
}else{
    $begin = ($page*20)-20;
}
?>
<?php
                             
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC LIMIT $begin, 20 ";
    $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
                               
   <div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3 class="the_h">Quản Lý Sản Phẩm</h3>
    <form class="form-inline"action="index.php?action=timkiem&query=them" method="POST">
    <input class="form-control mr-sm-2" type="search" placeholder="Tên sản phẩm" aria-label="Search " name="tukhoa">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="timkiem">Tìm</button>
  </form>
		<a href="index.php?action=quanlysp&query=them"><button class="btn btn-success" style="margin-top: 10px;;">Thêm Sản Phẩm</button></a>
		<table class="table table-bordered table-hover" style="margin-top: 20px;">
    <thead>
    <tr style="text-align: center;">
    <th>STT</th>
   <th>Tên</th>
   <th>Giá bán</th>
   <th>Giảm giá</th>
   <th style="color:red;"><i>Giá nhập</i></th>
   <th>Số lượng</th>
   <th>Size</th>
   <th>Danh mục</th>
   <th>Hình ảnh</th>
   <th>Mã sản phẩm</th>
   <th style="text-align: center;" colspan="2">Quản lý</th>
  </tr>
  </thead>
  <tbody>
  <?php
 $i = 0;
  while($row = mysqli_fetch_array($query_lietke_sp)){
    $i++;
  ?>
  <tr style="text-align: center;">
    <td><?php echo $i ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    
    <td><?php echo $row['giasp'] ?></td>
    <td><?php echo $row['giamgia'] ?></td>
    <td><?php echo $row['gianhap'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['size'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><img style="width:100px;max-height:100px" src = "modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>"></td>
    <td><?php echo $row['masp'] ?></td>
    <?php
    // Phân quyền ==1 (admin)
if( $_SESSION['role_id'] == 1 ){
 ?>
 <td>
    <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row[ 'id_sanpham'] ?>"><button class="btn btn-danger">Xóa</button></a> </td>
<?php 
    // Phân quyền ==2 (quản lý)

}elseif( $_SESSION['role_id'] == 2 ){
?>
<td>
    <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row[ 'id_sanpham'] ?>"><button class="btn btn-danger">Xóa</button></a> </td>
      <?php
      // còn nhân viên thì không thể xóa
}else{
      ?>
      <td width = "80px">Ẩn</td>
      <?php } ?>
  <td>  <a href="
?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>"><button class="btn btn-warning">Sửa</button></a>
    </td>
  </tr>
  <?php
  }
  ?>
</table>
<?php
// phân trang
     $sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
     $row_count = mysqli_num_rows($sql_trang);
     $trang = ceil($row_count/20);
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
    <span class="page-item"><a class="page-link" <?php if($i == $page){echo 'style="background: #bfbfbf;"';}else{ echo ''; } ?> href="index.php?action=sanpham&query=them&trang=<?php echo $i ?>"><?php echo $i ?></a></span>        
    <?php
             }
             ?>
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>               
               </li>
  </ul>
</nav>