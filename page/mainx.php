<div id="mainx">


    <div class="sidebar-right">
        <?php
        if (isset($_GET['quanly'])) {
            $tam = $_GET['quanly'];
        } else {
            $tam = '';
        }
        if ($tam == 'danhmucsanpham') {
            include("right/danhmucsanpham.php");

        } elseif ($tam == 'sanpham') {
            include("right/sanpham.php");

        } elseif ($tam == 'dangky') {
            include("./page/right/dangky.php");

        } elseif ($tam == 'dangnhap') {
            include("./page/right/dangnhap.php");

        } elseif ($tam == 'giohang') {
            include("./page/right/giohang.php");

        } elseif ($tam == 'thanhtoan') {
            include("./page/right/thanhtoan.php");

        } elseif ($tam == 'camon') {
            include("./page/right/camon.php");
            
        } elseif ($tam == 'tintuc') {
            include("./page/left/danhmucbaiviet.php");
            include("./page/right/tintuc.php");   

        } elseif ($tam == 'tintucs') {
            include("right/tintucs.php");

        } elseif ($tam == 'danhmucbaiviet') {
            include("./page/left/danhmucbaiviet.php");
            include("./page/right/tintuc.php");

        }elseif($tam == 'lienhe'){
            include("./page/right/lienhe.php");

        } elseif ($tam == 'baiviet') {
            include("./page/right/baiviet.php");
            
        } elseif ($tam == 'taikhoan') {
            include("./page/right/taikhoan.php");
        } elseif ($tam == 'donhang') {
            include("./page/right/donhang.php");
        } else {

            include("right/danhmucsanpham.php");
        }


        ?>
        <div class="clear"></div>
    </div>