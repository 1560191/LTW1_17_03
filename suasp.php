<?php require_once 'connection.php' ?>
<?php if (!$currentUser) : ?>
<center>
    <h1>Bạn Chưa Đăng Nhập!</h1>
    <br><a href="admin.php">Click vào đây để đăng nhập</a>
</center>
<?php endif; ?>
<?php if ($currentUser) : ?>
    <?php include"header2.php" ?>
    <?php
    	    $sql="SELECT mahang, tensp, giatien, loai, nhasanxuat from sanpham order by ngaynhap desc";
            $exe=$db->query($sql);
            $exe->setFetchMode(PDO::FETCH_ASSOC);
            $exe->execute();
            $resultSet = $exe->fetchAll();
    ?>
    <div class="col-sm-9">
    <div class="well">
      <h4>Danh Sách Sản Phẩm Hiện Có</h4>
    </div>
    <a href="themsp.php" class="btn btn-info" role="button">Thêm Sản Phẩm</a>
    <a href="xoasp.php" class="btn btn-info" role="button">Xóa Sản Phẩm</a>
    <a href="suasp.php" class="btn btn-info" role="button">Sửa Sản Phẩm</a>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá Tiền</th>
            <th>Loại</th>
            <th>Nhà Sản Xuất</th>
            <th>Sửa Thông Tin Sản Phẩm</th>
          </tr>
        </thead>
        <?php foreach($resultSet as $row): ?>
        <tbody>
          <tr>
            <td>
                <?php echo $row['mahang'] ?>
            </td>
            <td>
                <?php echo $row['tensp'] ?>
            </td>
            <td>
                <?php echo $row['giatien'] ?>
            </td>
            <td>
                <?php echo $row['loai'] ?>
            </td>
            <td>
                <?php echo $row['nhasanxuat'] ?>
            </td>
            <td>
                <a href="#" class="btn btn-danger" role="button">Sửa Thông Tin Sản Phẩm</a>
            </td>
          </tr>
        </tbody>
        <?php endforeach; ?>
      </table>
    </div>
    <?php include"footer2.php" ?>
<?php endif; ?>