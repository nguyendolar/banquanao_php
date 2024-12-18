<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h2 class="the_h">Thêm bài viết</h2>
		<div class="panel panel-primary">
			<div class="panel-body">
 <form method="POST" action="modules/quanlybaiviet/xuly.php" enctype="multipart/form-data">


 <div class="row">
					<div class="col-md-9 col-12">
						<div class="form-group">
						  <label for="usr">Tên Bài Viết:</label>
						  <input required="true" type="text" class="form-control" id="usr" name="tenbaiviet">
						  </div>
            <div class="form-group">
						  <label for="pwd">Nội Dung:</label>
						  <textarea class="form-control" rows="5" name="noidung" id="description"></textarea>
						</div>
						<div class="form-group">
						  <label for="pwd">Tóm tắt</label>
						  <textarea class="form-control" rows="5" name="tomtat" id="description"></textarea>
						</div>

						<button class="btn btn-success" name="thembaiviet">Thêm Bài Viết</button>
            </div>
			<div class="col-md-3 col-12" style="border: solid grey 1px; padding-top: 10px; padding-bottom: 10px;">
						<div class="form-group">
						  <label for="thumbnail">Hình ảnh</label>
						  <input type="file" class="form-control" id="thumbnail" name="hinhanh" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
						  <img id="thumbnail_img" style="max-height: 160px; margin-top: 5px; margin-bottom: 15px;">
						</div>       
						<div class="form-group">
						  <label for="usr">Danh Mục Bài Viết:</label>
						  <select class="form-control" name="danhmuc" id="category_id" required="true">
						  	<option value="">-- Chọn --</option>				<?php
	    		$sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	    		?>
	    		<option value="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
			<div class="form-group">
						  <label for="usr">Tình trạng</label>
						  <select class="form-control" name="tinhtrang" id="category_id" required="true">
	    		<option value="1">Kích hoạt</option>
	    		<option value="0">Ẩn</option>
	    	</select>
			</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
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





	