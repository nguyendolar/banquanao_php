<div id="mains">
<?php 
include('left/danhmuc.php');
?>
    <div class="sidebar_right">
<?php 
    if(isset($_GET['quanly'])){
    $tam = $_GET['quanly'];
 }else{
    $tam='';
 }
if ($tam=='danhmucsanpham'){
    include("right/danhmucsanpham.php");

}elseif($tam == 'danhmucsp'){
    include("./page/right/index.php");

 } elseif ($tam=='danhmucsanpham'){
        include("./page/left/danhmuc.php");

}elseif($tam == 'ao'){
    include("./page/right/ao.php");

}elseif($tam == 'quan'){
    include("./page/right/quan.php");

}elseif($tam == 'phukien'){
    include("./page/right/phukien.php");

}elseif($tam == 'giohang'){
    include("./page/right/giohang.php");

}elseif($tam == 'lienhe'){
    include("./page/right/lienhe.php");

}elseif($tam == 'tintuc'){
    include("./page/right/tintuc.php");

}elseif($tam == 'dangky'){
    include("./page/right/dangky.php");

} elseif ($tam == 'camon') {
    include("./page/right/camon.php");

}elseif($tam == 'timkiem'){
    include("./page/right/timkiem.php");
    
}else{
    include("right/index.php");
}
 
    ?>
</div>
<div class="clear"></div>
