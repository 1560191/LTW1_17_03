<?php require_once 'connection.php' ?>
<?php if (!$currentUser) : ?>
<center>
    <h1>Bạn Chưa Đăng Nhập!</h1>
    <br><a href="admin.php">Click vào đây để đăng nhập</a>
</center>
<?php endif; ?>
<?php if ($currentUser) : ?>
    <?php
    $success = true;
    if(isset($_FILES['hinhanh'])) {
        $fileName = $_FILES['hinhanh']['name'];
        $fileSize = $_FILES['hinhanh']['size'];
        $fileTmp = $_FILES['hinhanh']['tmp_name'];
        $result = move_uploaded_file($fileTmp, 'images/' . $fileName);
        if(!empty($_POST['tensp']) && !empty($_POST['giatien']) && !empty($_POST['mota']) && !empty($_POST['xuatxu']) && !empty($_POST['loai']) && !empty($_POST['nhasanxuat']))
        {
            $tensp = $_POST['tensp'];
            $giatien = $_POST['giatien'];
            $mota = $_POST['mota'];
            $xuatxu = $_POST['xuatxu'];
            $loai = $_POST['loai'];
            $nhasanxuat = $_POST['nhasanxuat'];
            $sql="INSERT INTO sanpham(`tensp`, `hinhanh`, `giatien`, `soluotxem`, `soluongban`, `ngaynhap`, `mota`, `xuatxu`, `loai`, `nhasanxuat`) VALUES ('$tensp', 'images/$fileName', '$giatien', 0, 0, curdate(), '$mota', '$xuatxu', '$loai', '$nhasanxuat')";
            $exe=$db->prepare($sql);
            $exe->execute();
        }
        else {$success = false;}
    }
    ?>
    <?php include"header2.php" ?>
    <div class="col-sm-9">
    <div class="well">
      <h4>Thêm Sản Phẩm Mới</h4>
    </div>
    <?php if (!$success) : ?>
    <div class="alert alert-danger" role="alert">
    Vui lòng nhập đầy đủ thông tin!
    </div>
    <?php endif; ?>
    
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
        <label for="hinhanh">Hình Ảnh Sản Phẩm:</label>
        <input type="file" name="hinhanh">
        </div>
        <div class="form-group">
        <label for="tensp">Nhập Tên Sản Phẩm:</label>
        <input type="tensp" class="form-control" id="tensp" name="tensp" placeholder="Nhập Tên Sản Phẩm Vào Đây...">
        </div>
        <div class="form-group">
        <label for="giatien">Nhập Giá Tiền:</label>
        <input type="giatien" class="form-control" id="giatien" name="giatien" placeholder="Nhập Giá Tiền Vào Đây...">
        </div>
        <div class="form-group">
        <label for="mota">Mô Tả Sản Phẩm:</label>
        <input type="mota" class="form-control" id="mota" name="mota" placeholder="Nhập Mô Tả Sản Phẩm Vào Đây...">
        </div>
        <div class="form-group">
        <label for="xuatxu">Xuất Xứ Sản Phẩm:</label>
        <input type="xuatxu" class="form-control" id="xuatxu" name="xuatxu" placeholder="Nhập Xuất Xứ Sản Phẩm Vào Đây...">
        </div>
        <div class="form-group">
        <label for="loai">Loại Sản Phẩm:</label>
        <input type="loai" class="form-control" id="loai" name="loai" placeholder="Nhập Loại Sản Phẩm Vào Đây...">
        </div>
        <div class="form-group">
        <label for="nhasanxuat">Nhà Sản Xuất:</label>
        <input type="nhasanxuat" class="form-control" id="nhasanxuat" name="nhasanxuat" placeholder="Nhập Nhà Sản Xuất Sản Phẩm Vào Đây...">
        </div>
        <button type="submit" class="btn btn-primary">Xác Nhận</button>
    </form>
    </div>
    <?php include"footer2.php" ?>
<?php endif; ?>