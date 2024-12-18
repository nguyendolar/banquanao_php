
<?php
	$code = $_GET['code'];
	$sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham ,tbl_size WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart='".$code."' and tbl_cart_details.size_id = tbl_size.size_id  ORDER BY tbl_cart_details.id_cart_details DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
 <div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3 class="the_h">Xem đơn hàng</h3>
    <table class="table table-bordered table-hover" style="margin-top: 20px;">
    <thead>
  <tr >
  	<th>Id</th>
    <th>Mã đơn hàng</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Mã sp</th>
    <th>Size</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
    <th style="color:red;"><i>Giá nhập</i></th>
    <th style="color:red;"><i>Tiền lãi</i></th>
  </tr>
    </thead>
  <?php
  $i = 0;
  $tongtien = 0;
  $tienlai =0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
  	$i++;
  	$thanhtien = $row['giamgia']*$row['soluongmua'];
  	$tongtien += $thanhtien ;
    $tienlaia = $row['gianhap'] * $row['soluongmua'];
    $tienlai+= $tienlaia;
    $lai= $tongtien - $tienlai;
    $lais=$thanhtien - $tienlaia
  ?>
  <tr style="text-align: center;">
  	<td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><img style="width:50px;max-height:80px;" src = "modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>"></td>

    <td><?php echo $row['soluongmua'] ?></td>
    <td><?php echo $row['masp'] ?></td>
    <td><?php echo $row['name'] ?></td>

    <td><?php echo number_format($row['giamgia'],0,',','.').'vnđ' ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
    <td><?php echo number_format($tienlaia,0,',','.').'vnđ' ?></td>
    <td><?php echo number_format($lais,0,',','.').'vnđ' ?></td>   	
  </tr>
  <?php
  } 
  ?>
  <tr>
  	<td colspan="6">
   		<p>Tổng tiền : <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p>
   	</td>
  </tr>
  <tr>
  	<td colspan="6">
   		<p style="color:red;">Tổng tiền lãi : <?php echo number_format($lai,0,',','.').'vnđ' ?></p>
   	</td>
  </tr>
</table>