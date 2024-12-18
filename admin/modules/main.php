<div class="clear"></div>
<div class="main">
<?php
            if(isset($_GET['action']) && $_GET['query']){
                $tam = $_GET['action'];
                $query = $_GET['query'];

            }else{
                $tam ='';
                $query ='';

            }
            if($tam=='quanlydanhmucsanpham' && $query =='them'){
                 include("modules/quanlydanhmucsp/them.php");
                 include("modules/quanlydanhmucsp/lietke.php");

            }elseif($tam=='quanlydanhmucsanpham' && $query =='sua'){
                include("modules/quanlydanhmucsp/sua.php");
          
            }elseif($tam=='quanlysp' && $query =='them'){
                include("modules/quanlysp/them.php");
             
            }elseif($tam=='quanlysp' && $query =='sua'){
                include("modules/quanlysp/sua.php");
          
            }elseif($tam=='quanlydonhang' && $query =='lietke'){
                include("modules/quanlydonhang/lietke.php");

            }elseif($tam=='quanlyphanhoi' && $query =='lietke'){
                include("modules/quanlyphanhoi/lietke.php");
          
            }elseif($tam=='donhang' && $query =='xemdonhang'){
                include("modules/quanlydonhang/xemdonhang.php");
        
            }elseif($tam=='sanpham' && $query =='them'){
                include("modules/quanlysp/lietke.php");
         
            }elseif($tam=='quanlydanhmucbaiviet' && $query =='them'){
                include("modules/quanlydanhmucbaiviet/them.php");
                include("modules/quanlydanhmucbaiviet/lietke.php");

            }elseif($tam=='quanlydanhmucbaiviet' && $query =='sua'){
                include("modules/quanlydanhmucbaiviet/sua.php");
            
            }elseif($tam=='quanlybaiviet' && $query =='them'){
                include("modules/quanlybaiviet/lietke.php");
                
            }elseif($tam=='quanlybv' && $query =='them'){
                include("modules/quanlybaiviet/them.php");

            }elseif($tam=='quanlybaiviet' && $query =='sua'){
                include("modules/quanlybaiviet/sua.php");

            }elseif($tam=='timkiem' && $query =='them'){
                include("modules/quanlysp/timkiem.php");
         
            }elseif($tam=='timkiemmadh' && $query =='them'){
                include("modules/quanlydonhang/timkiem.php");
         
            }elseif($tam=='timkiembv' && $query =='them'){
                include("modules/quanlybaiviet/timkiem.php");
         
            }elseif($tam=='quanlythanhvien' && $query =='lietke'){
                include("modules/quanlythanhvien/lietke.php");
               

            }elseif($tam=='quanlythanhvien' && $query =='sua'){
                include("modules/quanlythanhvien/sua.php");
                
            }elseif($tam=='quanlythanhvien' && $query =='them'){
                include("modules/quanlythanhvien/them.php");
          
            }elseif($tam=='quanlyslide' && $query =='them'){
                include("modules/quanlyslide/lietke.php");

            }elseif($tam=='quanlyslide' && $query =='sua'){
                include("modules/quanlyslide/sua.php");
           
            }else{
                 include("modules/dashboard.php");
            }
        ?>
</div>