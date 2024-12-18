<?php
session_start();
include('../../admin/config/config.php');
	//them so luong
	if(isset($_GET['cong'])){
		$id=$_GET['cong'];
		foreach($_SESSION['cart'] as $cart_item){
			if($cart_item['id']!=$id){
				$product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giamgia'=>$cart_item['giamgia'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				$_SESSION['cart'] = $product;
			}else{
				$tangsoluong = $cart_item['soluong'] + 1;
				if($cart_item['soluong']<=9){
					
					$product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'giamgia'=>$cart_item['giamgia'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				}else{
					$product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giamgia'=>$cart_item['giamgia'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				}
				$_SESSION['cart'] = $product;
			}
			
		}
		header('Location:../../chitiet.php?quanly=giohang');
	}
	//tru so luong
	if(isset($_GET['tru'])){
		$id=$_GET['tru'];
		foreach($_SESSION['cart'] as $cart_item){
			if($cart_item['id']!=$id){
				$product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giamgia'=>$cart_item['giamgia'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				$_SESSION['cart'] = $product;
			}else{
				$tangsoluong = $cart_item['soluong'] - 1;
				if($cart_item['soluong']>1){
					
					$product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'giamgia'=>$cart_item['giamgia'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				}else{
					$product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giamgia'=>$cart_item['giamgia'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				}
				$_SESSION['cart'] = $product;
			}
			
		}
		header('Location:../../chitiet.php?quanly=giohang');
	}
// xóa sản phẩm
if(isset($_SESSION['cart'])&&isset($_GET['xoa'])){
    $id=$_GET['xoa'];
    foreach($_SESSION['cart'] as $cart_item){

        if($cart_item['id']!=$id){
            $product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giamgia'=>$cart_item['giamgia'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
        }

    $_SESSION['cart'] = $product;
    header('Location:../../chitiet.php?quanly=giohang');
    }
}
//xoa tat ca
if(isset($_GET['xoatatca'])&&$_GET['xoatatca']==1){
    unset($_SESSION['cart']);
    header('Location:../../chitiet.php?quanly=giohang');
}
// thêm vào giỏ hàng
if(isset($_POST['muangay'])){
    //session_destroy();
    $id=$_GET['idsanpham'];
    $soluong=1;
    $sql ="SELECT * FROM tbl_sanpham WHERE id_sanpham='".$id."' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    $row = mysqli_fetch_array($query);
    if($row){
        $new_product=array(array('tensanpham'=>$row['tensanpham'],'id'=>$id,'soluong'=>$soluong,'giamgia'=>$row['giamgia'],'hinhanh'=>$row['hinhanh'],'masp'=>$row['masp']));
        //kiem tra session gio hang ton tai
        if(isset($_SESSION['cart'])){
            $found = false;
            foreach($_SESSION['cart'] as $cart_item){
                //neu du lieu trung
                if($cart_item['id']==$id){
                    $product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$soluong+1,'giamgia'=>$cart_item['giamgia'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                    $found = true;
                }else{
                    //neu du lieu khong trung
                    $product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giamgia'=>$cart_item['giamgia'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                }
            }
            if($found == false){
                //lien ket du lieu new_product voi product
                $_SESSION['cart']=array_merge($product,$new_product);
            }else{
                $_SESSION['cart']=$product;
            }
        }else{
            $_SESSION['cart'] = $new_product;
        }

    }
    
    header('Location:../../chitiet.php?quanly=giohang');
    
}
if(isset($_POST['themgiohang'])){
    //session_destroy();
    $id=$_GET['idsanpham'];
    $soluong=1;
    $sql ="SELECT * FROM tbl_sanpham WHERE id_sanpham='".$id."' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    $row = mysqli_fetch_array($query);
    if($row){
        $new_product=array(array('tensanpham'=>$row['tensanpham'],'id'=>$id,'soluong'=>$soluong,'giamgia'=>$row['giamgia'],'hinhanh'=>$row['hinhanh'],'masp'=>$row['masp']));
        //kiem tra session gio hang ton tai
        if(isset($_SESSION['cart'])){
            $found = false;
            foreach($_SESSION['cart'] as $cart_item){
                //neu du lieu trung
                if($cart_item['id']==$id){
                    $product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$soluong+1,'giamgia'=>$cart_item['giamgia'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                    $found = true;
                }else{
                    //neu du lieu khong trung
                    $product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giamgia'=>$cart_item['giamgia'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                }
            }
            if($found == false){
                //lien ket du lieu new_product voi product
                $_SESSION['cart']=array_merge($product,$new_product);
            }else{
                $_SESSION['cart']=$product;
            }
        }else{
            $_SESSION['cart'] = $new_product;
        }

    }
    
    header('Location:../../index.php');
    
}
if(isset($_POST['themgiohangs'])){
    //session_destroy();
    $id=$_GET['idsanpham'];
    $soluong=1;
    $sql ="SELECT * FROM tbl_sanpham WHERE id_sanpham='".$id."' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    $row = mysqli_fetch_array($query);
    if($row){
        $new_product=array(array('tensanpham'=>$row['tensanpham'],'id'=>$id,'soluong'=>$soluong,'giamgia'=>$row['giamgia'],'hinhanh'=>$row['hinhanh'],'masp'=>$row['masp']));
        //kiem tra session gio hang ton tai
        if(isset($_SESSION['cart'])){
            $found = false;
            foreach($_SESSION['cart'] as $cart_item){
                //neu du lieu trung
                if($cart_item['id']==$id){
                    $product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$soluong+1,'giamgia'=>$cart_item['giamgia'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                    $found = true;
                }else{
                    //neu du lieu khong trung
                    $product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giamgia'=>$cart_item['giamgia'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                }
            }
            if($found == false){
                //lien ket du lieu new_product voi product
                $_SESSION['cart']=array_merge($product,$new_product);
            }else{
                $_SESSION['cart']=$product;
            }
        }else{
            $_SESSION['cart'] = $new_product;
        }

    }
    
    header('Location:../../indexs.php');
    
}



?>