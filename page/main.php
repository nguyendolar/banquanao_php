<div id="main">
<div class="maincontent"> 
 <?php
 if(isset($_GET['quanly'])){
    $tam = $_GET['quanly'];
 }else{
    $tam='';
 }
if ($tam=='danhmucsanpham'){
    include("right/danhmuc.php");

}elseif($tam == 'giohang'){
    include("./page/right/giohang.php");

}elseif($tam == 'phukien'){
    include("./page/right/phukien.php");

}elseif($tam == 'tintuc'){
    include("right/tintuc.php");
    
}else{
    include("right/indexs.php");
}
    ?>
<div class="clear"></div>
</div>
</div>
