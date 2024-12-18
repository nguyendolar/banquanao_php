<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h2 class="the_h">Thêm Sản Phẩm</h2>
		<div class="panel panel-primary">
			<div class="panel-body">
				<form method="POST" action="modules/quanlysp/xuly.php"  enctype="multipart/form-data">
        <div class="row">
					<div class="col-md-9 col-12">
						<div class="form-group">
						  <label for="usr">Tên Sản Phẩm:</label>
						  <input required="true" type="text" class="form-control" id="usr" name="tensanpham">
						</div>
            <div class="form-group">
						  <label for="pwd">Nội Dung:</label>
						  <textarea class="form-control" rows="5" name="noidung" id="description"></textarea>
						</div>
						<button class="btn btn-success" name="themsanpham">Lưu Sản Phẩm</button>
            </div>
            <div class="col-md-3 col-12" style="border: solid grey 1px; padding-top: 10px; padding-bottom: 10px;">
						<div class="form-group">
						  <label for="thumbnail">Hình ảnh</label>
						  <input type="file" class="form-control" id="thumbnail" name="hinhanh" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
						  <img id="thumbnail_img" style="max-height: 160px; margin-top: 5px; margin-bottom: 15px;">
						</div>         
            <div class="form-group">
						  <label for="usr">Danh Mục Sản Phẩm:</label>
						  <select class="form-control" name="danhmuc" id="category_id" required="true">
						  	<option value="">-- Chọn --</option>
                <?php
$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc= mysqli_query($mysqli,$sql_danhmuc);
while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
  ?>                          
<option value="<?php echo $row_danhmuc ['id_danhmuc'] ?>"><?php echo $row_danhmuc ['tendanhmuc'] ?></option>
<?php
}
?>
 </select>
 </div>
						<div class="form-group">
						  <label for="price">Size</label>
						  <input required="true" type="text" class="form-control" id="price" name="size" >
						</div>
            <div class="form-group">
						  <label for="discount">Số Lượng</label>
						  <input required="true" type="text" class="form-control" id="discount" name="soluong" >
						</div>
            <div class="form-group">
						  <label for="discount">Mã sản phẩm</label>
						  <input required="true" type="text" class="form-control" id="discount" name="masp" >
						</div>
<hr>
						<div class="form-group">
						  <label for="discount">Giá nhập:</label>
						  <input required="true" type="text" class="form-control" id="discount" name="gianhap" >
						</div>
            <div class="form-group">
						  <label for="discount">Giá bán:</label>
						  <input required="true" type="text" class="form-control" id="discount" name="giasp" >
						</div>
            <div class="form-group">
						  <label for="discount">Giảm Giá:</label>
						  <input required="true" type="text" class="form-control" id="discount" name="giamgia">
						</div>  
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
