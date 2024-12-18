<?php
	$sql_sua_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet WHERE id_baiviet='$_GET[idbaiviet]' LIMIT 1";
	$query_sua_danhmucbv = mysqli_query($mysqli,$sql_sua_danhmucbv);
?>
<h2>Sửa danh mục sản phẩm</h2>
<div class="col-md-6 table-responsive">
		<table class="table table-bordered table-hover" >
		<form method="POST" action="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>">
		<?php
 	while($dong = mysqli_fetch_array($query_sua_danhmucbv)) {
 	?>
<div class="form-group">
<label for="usr" style="font-weight: bold;">Tên Danh Mục:</label>

  <input  type="text" class="form-control" id="usr"   value="<?php echo $dong['tendanhmuc_baiviet'] ?>" name="tendanhmucbaiviet">
  <label for="usr" style="font-weight: bold;">Thứ tự:</label>
  <input  type="text" class="form-control" id="usr" name="thutu" value="<?php echo $dong['thutu'] ?>" name="thutu" >

	</div>
  <button type="submit"name="suadanhmucbaiviet" class="btn btn-success">Sửa</button>
	  <?php
	  } 
	  ?>

 </form>
</table>