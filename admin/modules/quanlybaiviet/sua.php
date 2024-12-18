<?php
	$sql_sua_bv = "SELECT * FROM tbl_baiviet WHERE id='$_GET[idbaiviet]' LIMIT 1";
	$query_sua_bv = mysqli_query($mysqli,$sql_sua_bv);
?>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h2 class="the_h">Sửa bài viết</h2>
		<div class="panel panel-primary">
			<div class="panel-body">
			<?php
while($row = mysqli_fetch_array($query_sua_bv)) {
?>
 <form method="POST" action="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>" enctype="multipart/form-data">
 <div class="row">
					<div class="col-md-9 col-12">
						<div class="form-group">
						  <label for="usr">Tên Bài Viết:</label>
						  <input required="true" type="text" class="form-control" id="usr" name="tenbaiviet"value="<?php echo $row['tenbaiviet'] ?>" >
						  </div>
            <div class="form-group">
						  <label for="pwd">Nội Dung:</label>
						  <textarea class="form-control" rows="5" name="noidung" id="description"><?php echo  $row['noidung'] ?></textarea>
						</div>
						<div class="form-group">
						  <label for="pwd">Tóm tắt</label>
						  <textarea class="form-control" rows="5" name="tomtat" id="description" ><?php echo $row['tomtat'] ?></textarea>
						</div>

						<button class="btn btn-success"   type="submit" name="suabaiviet">Sửa Bài Viết</button>
            </div>
			<div class="col-md-3 col-12" style="border: solid grey 1px; padding-top: 10px; padding-bottom: 10px;">
						<div class="form-group">
						  <label for="thumbnail">Hình ảnh</label>
						  <input type="file" class="form-control" id="thumbnail" name="hinhanh" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
						  <img src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
						</div>       
						<div class="form-group">
						  <label for="usr">Danh Mục Bài viết</label>
						  <select class="form-control" name="danhmuc" id="category_id" required="true">
						  	<option value="">-- Chọn --</option>				
	    		<?php
	    		$sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){

	    			if($row_danhmuc['id_baiviet']==$row['id_danhmuc']){
	    		?>
	    		<option selected value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>

			<div class="form-group">
						  <label for="usr">Tình trạng</label>
						  <select class="form-control" name="tinhtrang" id="category_id" required="true" >
	    		<?php
	    		if($row['tinhtrang']==1){ 
	    		?>
	    		<option value="1" selected>Kích hoạt</option>
	    		<option value="0">Ẩn</option>
	    		<?php
	    		}else{ 
	    		?>
	    		<option value="1">Kích hoạt</option>
	    		<option value="0" selected>Ẩn</option>
	    		<?php
	    		} 
	    		?>

	    	</select>
						  
			</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
 } 
 ?>

<script type="text/javascript">
	function updateThumbnail() {
		$('#thumbnail_img').attr('src', $('#thumbnail').val())
	}
</script>
<script>
  $('#description').summernote({
    placeholder: 'Nhập nội dung dữ liệu',
    tabsize: 2,
    height: 300,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']]
    ]
  });
</script>





