
                <h2 style="text-transform: uppercase;color:#ff700b;margin-top:100px;text-align:center;">Tin tức mới nhất</h2>
<?php
if(isset($_GET['trang'])){
    $page = $_GET['trang'];
}else{
    $page = '';
}
if($page == '' || $page == 1){
    $begin = 0;
}else{
    $begin = ($page*10)-10;
}
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tinhtrang=1 ORDER BY id DESC LIMIT $begin, 10";
	$query_bv = mysqli_query($mysqli,$sql_bv);
	
?>				
		<?php
		while($row_bv = mysqli_fetch_array($query_bv)){ 
		?>
		<div class="product_lists" >
			<div class="clearfix">			
				<li class="tintuc_sp">
					<a style="text-decoration: none;" href="chitiet.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>">
          <div class="img-container">	<img src="admin/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>"></div>
					<h2 class="title_products"><?php echo $row_bv['tenbaiviet'] ?></h2>							
					</a>
					<p class="tomtat_sanpham" style="margin:10px" ><?php echo $row_bv['tomtat'] ?></p>
				</div>
				</li>
				</div>
			<?php
			} 
			?>
	  <?php
      $sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_baiviet");
      $row_count = mysqli_num_rows($sql_trang);
      $trang = ceil($row_count/10);
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
    <span class="page-item"><a class="page-link" <?php if($i == $page){echo 'style="background: #bfbfbf;"';}else{ echo ''; } ?> href="chitiet.php?quanly=tintuc&trang=<?php echo $i ?>"><?php echo $i ?></a></span>        
    <?php
     }
    ?>
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>               
               </li>
  </ul>
</nav>
</div>
				
