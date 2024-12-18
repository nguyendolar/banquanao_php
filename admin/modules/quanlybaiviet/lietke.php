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
	$sql_lietke_bv = "SELECT * FROM tbl_baiviet,tbl_danhmucbaiviet WHERE tbl_baiviet.id_danhmuc=tbl_danhmucbaiviet.id_baiviet ORDER BY tbl_baiviet.id DESC LIMIT $begin,20";
	$query_lietke_bv = mysqli_query($mysqli,$sql_lietke_bv);
?>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3 class="the_h">Quản Lý bài viết </h3>
    <form class="form-inline"action="index.php?action=timkiembv&query=them" method="POST">
   <div style="margin-bottom: 30px;"> <input  class="form-control mr-sm-2" type="search" placeholder="Tên bài viết" aria-label="Search" name="tukhoa">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="timkiem">Search</button></div>
  </form>
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
    <span class="page-item"><a class="page-link" <?php if($i == $page){echo 'style="background: #bfbfbf;"';}else{ echo ''; } ?> href="index.php?action=quanlybaiviet&query=lietke&trang=<?php echo $i ?>"><?php echo $i ?></a></span>        
    <?php
             }
             ?>

      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>   