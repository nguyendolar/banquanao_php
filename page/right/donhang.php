<?php
    $row_ss =  $_SESSION['id_khachhang'];
	$sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky 
    AND tbl_cart.id_khachhang = '".$row_ss."'  
    ORDER BY tbl_cart.id_cart DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
 <div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3 class="the_h">Đơn Hàng Đã Đặt</h3>
		<table class="table table-bordered table-hover" style="margin-top: 20px;">
    <thead>
  <tr>
  	<th>STT</th>
    <th>Mã đơn hàng</th>
    <th>Thời gian đặt</th>
    <th>Sản phẩm đã đặt</th>
    <th>Thành tiền</th>
    <th>Tình trạng</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['updata_time'] ?></td>
    <td>
        <?php
        $sql_ct_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham ,tbl_size 
        WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham 
        AND tbl_cart_details.code_cart='".$row['code_cart']."' and tbl_cart_details.size_id = tbl_size.size_id  
        ORDER BY tbl_cart_details.id_cart_details DESC";
        $query_ct_dh = mysqli_query($mysqli,$sql_ct_dh);
        $i = 0;
        $tongtien = 0;
        $tienlai =0;
        while($row = mysqli_fetch_array($query_ct_dh)){
            $i++;
            $thanhtien = $row['giamgia']*$row['soluongmua'];
            $tongtien += $thanhtien ;
            $tienlaia = $row['gianhap'] * $row['soluongmua'];
            $tienlai+= $tienlaia;
            $lai= $tongtien - $tienlai;
            $lais=$thanhtien - $tienlaia
        ?>
        <img style="width:50px;max-height:80px;" src = "admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
        <?php echo $row['tensanpham'] ?> x <?php echo $row['soluongmua'] ?>
        <br>
        <?php
        } 
        ?>
    </td>
    <td><?php echo number_format($tongtien,0,',','.').'vnđ' ?></td>
    <td>
    	<?php if($row['cart_status']==1){
    		echo 'Đơn hàng mới';
    	}else{
    		echo 'Đã xác nhận';
    	}
    	?>
    </td>
  </tr>
  <?php
  } 
  ?>
   </tr>
  </thead>
  
</table>

