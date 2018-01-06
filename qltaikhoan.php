<?php require_once 'connection.php' ?>
<?php if ($currentUser) : ?>
<center>
    <h1>Bạn Chưa Đăng Nhập!</h1>
    <br><a href="admin.php">Click vào đây để đăng nhập</a>
</center>
<?php endif; ?>
<?php if (!$currentUser) : ?>
    <?php
        if(!empty($_POST['id']))
        {
            $id = $_POST['id'];
            $sql="DELETE from users where id = $id";
            $exe=$db->query($sql);
            $exe->execute();
            
            $sql2="DELETE from donhang where idkhachhang = $id";
            $exe2=$db->query($sql2);
            $exe2->execute();
        }
    ?>
    <?php include"header2.php" ?>
    <?php
    	    $sql="SELECT * from users";
            $exe=$db->query($sql);
            $exe->setFetchMode(PDO::FETCH_ASSOC);
            $exe->execute();
            $resultSet = $exe->fetchAll();
    ?>
    <div class="col-sm-9">
    <div class="well">
      <h4>Danh Sách Tài Khoản Thành Viên</h4>
    </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Email</th>
            <th>PassWord</th>
            <th>Họ Và Tên</th>
          </tr>
        </thead>
        <?php foreach($resultSet as $row): ?>
        <tbody>
          <tr>
            <td>
                <?php echo $row['id'] ?>
            </td>
            <td>
                <?php echo $row['email'] ?>
            </td>
            <td>
                <?php echo $row['password'] ?>
            </td>
            <td>
                <?php echo $row['fullname'] ?>
            </td>
          </tr>
        </tbody>
        <?php endforeach; ?>
      </table>
      <form method="POST">
    <div class="form-group">
    <label for="id">Xóa Tài Khoản</label>
    <input type="id" class="form-control" id="id" name="id" placeholder="Nhập ID Vào Đây...">
    </div>
    <button type="submit" class="btn btn-primary">Xác Nhận</button>
    </form>
    </div>
    <?php include"footer2.php" ?>
<?php endif; ?>