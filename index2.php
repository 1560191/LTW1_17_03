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
    	    $sql="SELECT * from donhang order by ngaylap desc limit 2";
            $exe=$db->query($sql);
            $exe->setFetchMode(PDO::FETCH_ASSOC);
            $exe->execute();
            $resultSet = $exe->fetchAll();
    ?>
    <div class="col-sm-9">
    <div class="well">
      <h4>Tổng Sản Phẩm Đã Được Bán</h4>
    </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Hình ảnh sản phẩm</th>
            <th>Thông tin sản phẩm</th>
            <th>Thông tin người mua</th>
          </tr>
        </thead>
        <?php foreach($resultSet as $row): ?>
            <?php
                $mahang = $row['mahang'];
                $sql2="SELECT * from sanpham where mahang = '$mahang'";
                $exe2=$db->query($sql2);
                $exe2->setFetchMode(PDO::FETCH_ASSOC);
                $exe2->execute();
                $resultSet2 = $exe2->fetchAll();
            ?>
        <?php foreach($resultSet2 as $row2): ?>
        <tbody>
          <tr>
            <td>
                <img src="<?php echo $row2['hinhanh'] ?>" alt="">
            </td>
            <td>
                <div>
                <div>
                  Tên Sản Phẩm: <?php echo $row2['tensp'] ?>
                </div>
                <div>
                  Mô Tả: <?php echo $row2['mota'] ?>
                </div>
                </div>
            </td>
            <td>
                ID Khách Hàng: <?php echo $row['idkhachhang'] ?>
            </td>
          </tr>
        </tbody>
        <?php endforeach; ?>
        <?php endforeach; ?>
      </table>
    </div>
    </div>
    <?php include"footer2.php" ?>
<?php endif; ?>