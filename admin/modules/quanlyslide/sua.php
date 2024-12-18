<?php
	$sql_sua_slide = "SELECT * FROM tbl_slide WHERE id_slide='$_GET[idslide]' LIMIT  1";
	$query_sua_slide = mysqli_query($mysqli,$sql_sua_slide);
?>
<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h2 class="the_h">Sửa bài viết</h2>
		<div class="panel panel-primary">
			<div class="panel-body">
			<?php
while($row = mysqli_fetch_array($query_sua_slide)) {
?>
<form method="POST" action="./modules/quanlyslide/xuly.php?idslide=<?php echo $row['id_slide'] ?>" enctype="multipart/form-data">
 <div class="row">
 <div class="form-group">
						  <label for="thumbnail">Hình ảnh</label>
						  <input type="file" class="form-control" id="thumbnail" name="hinhanh" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
						  <img src="modules/quanlyslide/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
						</div>       
						<div class="form-group">
                        <button class="btn btn-success"   name="suaslide">Sửa slide</button>
                        </div>
</form>
                        </div>
                        <?php } ?>
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