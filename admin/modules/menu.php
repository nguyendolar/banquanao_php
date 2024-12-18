<?php
            if(!isset($_SESSION['dangky'])){
              header('Location:../index.php');
 } 
?>
<?php
           if(isset($_GET['dangxuat'])&&$_GET['dangxuat'] == 1){
            unset($_SESSION['dangky']);
            
            header('Location:../index.php');        
        }
?>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">  
    </li>
  </ul>
</nav>	
<div class="container-fluid">
  <div class="row">
 <?php

if( $_SESSION['role_id'] == 1){
  //admin
 ?>
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a style="color:blue" class="nav-link active" href="index.php?action=dashboard&query=them">
              <i class="bi bi-house-fill"></i>
              Dashboard
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?action=quanlydanhmucsanpham&query=them">
              <i class="bi bi-folder"></i>
              Danh Mục Sản Phẩm
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=sanpham&query=them">
              <i class="bi bi-minecart"></i>
            Quản lý sản phẩm
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=quanlydonhang&query=lietke">
              <i class="bi bi-question-circle-fill"></i>
              Quản Lý đơn hàng
            </a>
          </li>       
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=quanlyphanhoi&query=lietke">
            <i class="bi bi-vector-pen fs-2x"></i>
              Quản Lý phản hồi
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="index.php?action=quanlydanhmucbaiviet&query=them">
              <i class="bi bi-people-fill"></i>
              Danh mục bài viết
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=quanlybaiviet&query=them">
              <i class=" bi bi-file-earmark-text"></i>
             Quản Lý bài viết
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=quanlyslide&query=them">
              <i class=" bi bi-file-earmark-text"></i>
             Quản Lý Silde
            </a>
          </li>
          <li >
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=quanlythanhvien&query=lietke">
              <i class=" bi bi-file-earmark-text"></i>
             Quản Lý thành viên
            </a>
          </li>
        </ul>
      </div>
    </nav>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    
</ul>
<?php 
// Quản lý
}elseif( $_SESSION['role_id'] == 2){
?>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap"> 
    </li>
  </ul>
</nav>	
<div class="container-fluid">
  <div class="row">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=quanlydanhmucsanpham&query=them">
              <i class="bi bi-folder"></i>
              Danh Mục Sản Phẩm
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=sanpham&query=them">
              <i class="bi bi-minecart"></i>
            Quản lý sản phẩm
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=quanlydonhang&query=lietke">
              <i class="bi bi-question-circle-fill"></i>
              Quản Lý đơn hàng
            </a>
          </li>       
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=quanlyphanhoi&query=lietke">
            <i class="bi bi-vector-pen fs-2x"></i>
              Quản Lý phản hồi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=quanlydanhmucbaiviet&query=them">
              <i class="bi bi-people-fill"></i>
              Danh mục bài viết
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=quanlybaiviet&query=them">
              <i class=" bi bi-file-earmark-text"></i>
             Quản Lý bài viết
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=quanlyslide&query=them">
              <i class=" bi bi-file-earmark-text"></i>
             Quản Lý Silde
            </a>
          </li>
          <li >
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=quanlythanhvien&query=lietke">
              <i class=" bi bi-file-earmark-text"></i>
             Quản Lý thành viên
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<?php 
// Nhân viên
}else{
?>

  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
    </li>
  </ul>
</nav>	
<div class="container-fluid">
  <div class="row">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=sanpham&query=them">
              <i class="bi bi-minecart"></i>
            Quản lý sản phẩm
            </a>
          </li>        
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=quanlyphanhoi&query=lietke">
            <i class="bi bi-vector-pen fs-2x"></i>
              Quản Lý phản hồi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=quanlydanhmucbaiviet&query=them">
              <i class="bi bi-people-fill"></i>
              Danh mục bài viết
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=quanlybaiviet&query=them">
              <i class=" bi bi-file-earmark-text"></i>
             Quản Lý bài viết
            </a>
          </li>      
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=quanlyslide&query=them">
              <i class=" bi bi-file-earmark-text"></i>
             Quản Lý Silde
            </a>
          </li>
          <li >
        </ul>
      </div>
    </nav>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<?php } ?>