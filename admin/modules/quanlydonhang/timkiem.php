<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky  AND tbl_cart.code_cart LIKE '%".$tukhoa."%'";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);	
?>
    <h2>Tìm Kiếm : <?php  echo $tukhoa; ?></h2>
    <div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">		
		<table class="table table-bordered table-hover" style="margin-top: 20px;">
    <thead>
  <tr>
  <th>STT</th>
    <th>Mã đơn hàng</th>
    <th>Tên khách hàng</th>
    <th>Địa chỉ</th>
    <th>Email</th>
    <th>Số điện thoại</th>
    <th>Thời gian tạo</th>
    <th>Tình trạng</th>
  	<th>Quản lý</th>	
  </tr>
  </thead>
  <tbody>
  <?php
 $i = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
    $i++;
  ?>
  <tr>
  <td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['tenkhachhang'] ?></td>
    <td><?php echo $row['diachi'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['dienthoai'] ?></td>
    <td><?php echo $row['updata_time'] ?></td>    
    <td>
    	<?php if($row['cart_status']==1){
    		echo '<a href="modules/quanlydonhang/xuly.php?sts=2&&code='.$row['code_cart'].'"><button  class="btn btn-primary">Xác nhận đơn hàng</button></a>';
    	}
      else 
      if($row['cart_status']==2){
    		echo '<a href="modules/quanlydonhang/xuly.php?sts=3&&code='.$row['code_cart'].'"><button  class="btn btn-primary">Đang giao hàng</button></a>';
    	}
      else 
      if($row['cart_status']==3){
    		echo '<a href="modules/quanlydonhang/xuly.php?sts=0&&code='.$row['code_cart'].'"><button  class="btn btn-primary">Giao hàng thành công</button></a>';
    	}
      else{
    		echo '<button  class="btn btn-secondary">Đã hoàn thành</button>';
    	}
    	?>
    </td>
   	<td>
   		<a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a> 
   	</td>
  </tr>
  <?php
  }
  ?>

               
 