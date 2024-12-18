<div class="danhmuc_baiviet">
<h2 style="color:#1c6587;padding:10px;">Danh mục bài viết</h2>
				<ul class="list_sidebar">
					<?php
	
						$sql_danhmuc_bv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
						$query_danhmuc_bv = mysqli_query($mysqli,$sql_danhmuc_bv);
						while($row = mysqli_fetch_array($query_danhmuc_bv)){
						    		
					?>
					<li style="text-transform: uppercase;"><a href="chitiet.php?quanly=tintucs&id=<?php echo $row['id_baiviet'] ?>"><?php echo $row['tendanhmuc_baiviet'] ?></a></li>
					<?php

					} 
					?>
					
				</ul>
				</div>