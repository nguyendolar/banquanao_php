
<div class="clear"></div>

<h2>Giỏ hàng</h2>
<?php 
if(isset($_SESSION['dangky'])){
  echo 'Hello :'.'<span style = "color:red;font-size:18px;";">'. $_SESSION['dangky'].'</span>';
 

?>
<?php
    if(isset($_SESSION[ 'cart'])){
      
    }
?>
	<div class="col-md-12 table-responsive">
	<table class="table table-bordered " style="margin-top: 20px;">
    <thead>
  <tr>
  <th>STT</th>
  <th>Mã sp </th>
  <th>Tên </th>
 <th>Hình ảnh</th>
 <th>Số lượng</th>
  <th>Giá sản phẩm</th>
  <th>Size</th>
  <th>Thành Tiền</th>
  <th>Quản lý</th>
 



</tr>
    </thead>
    <tbody>
<?php
if(isset ($_SESSION['cart'])){
 $i = 0;
 $tongtien =0;



 foreach($_SESSION[ 'cart'] as $cart_item){
     $thanhtien = $cart_item['soluong']*$cart_item['giamgia'];
     $tongtien+=$thanhtien;
      $i++;

?>
<tr>
  <td><?php echo $i; ?></td>
  <td><?php echo $cart_item['masp'] ;?></td>
  <td><?php echo $cart_item['tensanpham']; ?></td>
  <td><img style="width:100px; max-height:150px;" src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?> " ></td>

  <td>
    <div style="display: flex;">
				<a class="btn btn-light" style="border: solid #e0dede 1px; border-radius: 0px;" href="page/right/themgiohang.php?tru=<?php echo $cart_item['id']?>">-</a>
        <a class="form-control"><?php echo $cart_item['soluong']; ?></a>
				<a class="btn btn-light" style="border: solid #e0dede 1px; border-radius: 0px;" href="page/right/themgiohang.php?cong=<?php echo $cart_item['id']?>">+</a>
			</div>
  <td><?php echo number_format($cart_item['giamgia']).'₫'; ?></td> 
  <td>
  <form method="POST" action="./page/right/thanhtoan.php">
                    <div class="form-group">
                       <?php
                       ?>
                        <select class="form-control" name="size_id"  required="true">
                            <option value="">-- Chọn --</option>
                            <?php
                            $role = "SELECT * FROM `tbl_size` ";
                            $sql_role = mysqli_query($mysqli, $role);
                            while ($row = mysqli_fetch_array($sql_role)) {
                                echo '<option value="' . $row['size_id'] . '">' . $row['name'] . '</option> ';
                            }
                            ?>
                        </select>
                    </div></td>
  <td><?php echo number_format($thanhtien).'₫'; ?></td>
  <td><a class="csw-btn-buttons" href="page/right/themgiohang.php?xoa=<?php echo $cart_item['id']?>"><button type="button" class="btn btn-danger">Xóa</button></a></td>
</tr>
<?php
  }
  ?>
  <tr>
  <td colspan="9">
      <p style="float: left";>Tổng tiền :<?php echo number_format($tongtien).'₫'; ?></p>  
    <p class="csw-btn-buttons" style="float: right;"><a style=" text-decoration: none;color:white;" href="page/right/themgiohang.php?xoatatca=1" ><button type="button" class="btn btn-warning">Xóa tất cả</button></p>
    <div style="clear:both"></div>
    <?php
    if(isset($_SESSION['dangky'])){
    ?>
     <button type="submit" class="btn btn-info" name="size">Thanh toán</button>
    </form>
<?php 
    }else{
?>
    <p><a href="chitiet.php?quanly=dangky">    <button type="button" class="btn btn-info">Đăng nhập để đặt hàng</button>
<a></p>
    <?php
    }
    ?>
</td>
   </tr>
  <?php
}else{
?>
 <tr>
 <td colspan="9"><p>Hiện tại giỏ hàng trống</p></td>
  </tr>
  <?php 
  }
  ?>
<?php 
}else{
}
?>
</table>

  </div>