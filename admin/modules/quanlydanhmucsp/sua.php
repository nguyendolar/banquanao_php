<?php
                             
          $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc ='$_GET[iddanhmuc]' LIMIT 1";
          $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<h2>Sửa danh mục sản phẩm </h2>
<div class="col-md-6 table-responsive">
		<table class="table table-bordered table-hover" >
<table border="1" width=50% style="border-collapse:collapse;">
<form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
    <?php 
    while($dong = mysqli_fetch_array($query_sua_danhmucsp)){  
    ?>
<div class="form-group">
<label for="usr" style="font-weight: bold;">Tên Danh Mục:</label>

  <input  type="text" class="form-control" id="usr"  value ="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"name="tendanhmuc">
  <label for="usr" style="font-weight: bold;">Thứ tự:</label>
  <input  type="text" class="form-control" id="usr" name="thutu" value="<?php echo $dong['thutu'] ?>" name="thutu" >

	</div>
  <button type="submit"name="suadanhmuc" class="btn btn-success">Sửa</button>

<?php 
    }
?>
</form>
</table>