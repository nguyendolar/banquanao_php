<?php
$sql = "SELECT * FROM tbl_slide WHERE `thutu`";
$query = mysqli_query($mysqli,$sql);
while ($row = mysqli_fetch_array($query)){
?>    
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img style=" object-fit: cover;" src="admin/modules/quanlyslide/uploads/<?php echo $row['hinhanh'] ?>" alt="Los Angeles">
    </div>  
  </div>
    <?php } ?>
  <script>
                        var myIndex = 0;
                        carousel();                     
                        function carousel() {
                        var i;
                        var x = document.getElementsByClassName("carousel-item");
                        for (i = 0; i < x.length; i++) {
                          x[i].style.display = "none";  
                        }
                        myIndex++;
                        if (myIndex > x.length) {myIndex = 1}    
                        x[myIndex-1].style.display = "block";  
                        setTimeout(carousel, 4000); // Change image every 2 seconds
                        }
                    </script>
 </div>