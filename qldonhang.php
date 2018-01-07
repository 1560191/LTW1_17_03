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
    	    $sql="SELECT * from donhang order by ngaylap desc";
            $exe=$db->query($sql);
            $exe->setFetchMode(PDO::FETCH_ASSOC);
            $exe->execute();
            $resultSet = $exe->fetchAll();
    ?>
    <div class="col-sm-9">
    <div class="well">
      <h4>Danh Sách Sản Phẩm Hiện Có</h4>
    </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Mã Sản Phẩm</th>
            <th>Mã Khách Hàng</th>
            <th>Ngày Lập</th>
            <th>Trạng Thái</th>
          </tr>
        </thead>
        <?php foreach($resultSet as $row): ?>
        <tbody>
          <tr>
            <td>
                <?php echo $row['id'] ?>
            </td>
            <td>
                <?php echo $row['mahang'] ?>
            </td>
            <td>
                <?php echo $row['idkhachhang'] ?>
            </td>
            <td>
                <?php echo $row['ngaylap'] ?>
            </td>
            <td>
                <?php if($row['trangthai'] == ''): ?>
                <a href="thaydoidonhang.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" role="button">Chưa Giao</a>
                <?php endif; ?>
                <?php if($row['trangthai'] == 'Chưa Giao'): ?>
                <a href="thaydoidonhang.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" role="button"><?php echo $row['trangthai'] ?></a>
                <?php endif; ?>
                <?php if($row['trangthai'] == 'Đang Giao'): ?>
                <a href="thaydoidonhang.php?id=<?php echo $row['id'] ?>" class="btn btn-warning" role="button"><?php echo $row['trangthai'] ?></a>
                <?php endif; ?>
                <?php if($row['trangthai'] == 'Đã Giao'): ?>
                <a href="thaydoidonhang.php?id=<?php echo $row['id'] ?>" class="btn btn-success" role="button"><?php echo $row['trangthai'] ?></a>
                <?php endif; ?>
            </td>
          </tr>
        </tbody>
        <?php endforeach; ?>
      </table>
    </div>
    <?php include"footer2.php" ?>
<?php endif; ?>