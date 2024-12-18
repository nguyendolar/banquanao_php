<?php
$row_ss =  $_SESSION['id_khachhang'];
$row_pp = "SELECT * FROM tbl_dangky WHERE id_dangky = ".$row_ss."  ";
$row_pro = mysqli_query($mysqli,$row_pp);
$result=mysqli_fetch_array($row_pro);
?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $result['tenkhachhang'] ?></span><span class="text-black-50"><?php echo $result['email'] ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Tài khoản</h4>
                </div>
            <div class="row mt-3">
                <div class="col-md-12"><label class="labels">Họ và Tên</label><input type="text" class="form-control" placeholder="Họ và tên" value="<?php echo $result['tenkhachhang'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Số điện thoại</label><input type="text" class="form-control" placeholder="Số điện thoại" value="<?php echo $result['dienthoai'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Địa chỉ</label><input type="text" class="form-control" placeholder="Địa chỉ" value="<?php echo $result['diachi'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value="<?php echo $result['email'] ?>"></div>
                </div>
            
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Nhận thông báo của H-Shop</span></div><br>
                <div class="col-md-12"><label class="labels">Nhập email</label><input type="text" class="form-control" placeholder="Email" value=""></div> <br>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button" name="suaprofile">Gửi</button></div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
