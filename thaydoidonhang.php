<?php require_once 'connection.php' ?>
<?php if (!$currentUser) : ?>
<center>
    <h1>Bạn Chưa Đăng Nhập!</h1>
    <br><a href="admin.php">Click vào đây để đăng nhập</a>
</center>
<?php endif; ?>
<?php if ($currentUser) : ?>
    <?php
        if($_GET['id'])
		{
			$idtrangthai=$_GET['id'];
            $sql="SELECT trangthai from donhang where id = $idtrangthai";
            $exe=$db->query($sql);
            $exe->setFetchMode(PDO::FETCH_ASSOC);
            $exe->execute();
            $resultSet = $exe->fetchAll();
        }
    ?>
    <?php
    error_reporting(0);
    $trangthai = $_POST['trangthai'];
    $id= isset($_GET["id"]);
		if($_GET['id'])
		{
			$id=$_GET['id'];
            $sql="UPDATE donhang SET trangthai = '$trangthai' where id = $id";
            $exe=$db->prepare($sql);
            $exe->execute();
        }
    ?>
    <?php include"header2.php" ?>
    <div class="col-sm-9">
    <div class="well">
      <center><h4>Thay Đổi Trạng Thái Đơn Hàng</h4></center>
    </div>
    <?php foreach($resultSet as $row): ?>
    <center><form method="POST">
        <div class="form-group">
        <label for="trangthai">Trạng Thái Đơn Hàng:</label>
        <input type="trangthai" class="form-control" id="trangthai" name="trangthai" value="<?php echo $row['trangthai'] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Xác Nhận</button>
    </form></center>
    <?php endforeach; ?>
    </div>
    <?php include"footer2.php" ?>
<?php endif; ?>