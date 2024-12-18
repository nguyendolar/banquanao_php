<?php
include('../../config/config.php');
$tensanpham = $_POST[ 'tensanpham' ];
$masp=$_POST['masp'];
$gianhap=$_POST['gianhap'];

$giasp=$_POST['giasp'];
$giamgia=$_POST['giamgia'];
$soluong=$_POST['soluong'];
$size=$_POST['size'];
$hinhanh=$_FILES['hinhanh']['name'];
$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$tomtat=$_POST['tomtat'];
$noidung=$_POST['noidung'];
$tinhtrang=$_POST['tinhtrang'];
$danhmuc=$_POST['danhmuc'];

if(isset($_POST['themsanpham' ])){
    // thêm
    $sql_them = "INSERT INTO tbl_sanpham(tensanpham,masp,gianhap,giasp,giamgia,soluong,size,hinhanh,tomtat,noidung,tinhtrang,id_danhmuc) VALUE ('". $tensanpham."', '".$masp."', '".$gianhap."','".$giasp."','".$giamgia."','".$soluong."','".$size."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."','".$danhmuc."')";
    mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);

    header('Location:../../index.php?action=sanpham&query=them');
} elseif(isset($_POST['suasanpham'])){
    // sửa
    if(!empty($_FILES[ 'hinhanh']['name'])){
        move_uploaded_file($hinhanh_tmp,'uploads/'. $hinhanh);
   
  
    $sql_update = "UPDATE tbl_sanpham SET tensanpham = '".$tensanpham."' ,gianhap='".$gianhap."', masp ='".$masp."',giasp ='".$giasp."',giamgia ='".$giamgia."',soluong ='".$soluong."',size ='".$size."',hinhanh ='".$hinhanh."',tomtat ='".$tomtat."',noidung ='".$noidung."',tinhtrang ='".$tinhtrang."',id_danhmuc ='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    
while($row = mysqli_fetch_array($query)){
    unlink('uploads/'.$row['hinhanh']);
}
 }else{
        $sql_update = "UPDATE tbl_sanpham SET tensanpham = '".$tensanpham."'  ,gianhap='".$gianhap."', masp ='".$masp."',giasp ='".$giasp."',giamgia ='".$giamgia."',soluong ='".$soluong."',size ='".$size."',tomtat ='".$tomtat."',noidung ='".$noidung."',tinhtrang ='".$tinhtrang."',id_danhmuc ='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
    }
    mysqli_query($mysqli,$sql_update);
    header('Location:../../index.php?action=sanpham&query=them');
}      else{
$id = $_GET['idsanpham'];
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
while($row = mysqli_fetch_array($query)){
    unlink('uploads/'.$row['hinhanh']);
}
$sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham = '".$id."'";
mysqli_query($mysqli,$sql_xoa);
header('Location:../../index.php?action=sanpham&query=them');
}   

?>