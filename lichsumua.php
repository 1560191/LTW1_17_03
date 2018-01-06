<?php require_once 'connection.php' ?>
<?php
    $id= isset($_GET["id"]);
	if($_GET['id'])
	{
	    $idkhachhang = $_GET['id'];
	    $sql="SELECT * from donhang where idkhachhang = '$idkhachhang' order by ngaylap";
        $exe=$db->query($sql);
        $exe->setFetchMode(PDO::FETCH_ASSOC);
        $exe->execute();
        $resultSet = $exe->fetchAll();
	}
?>
<?php include "header.php" ?>
    <div class="wrapper">
      <div class="header">
        <div class="clearfix">
        </div>
        <div class="page-index">
          <div class="container">
            <p>
              <h3>Lịch Sử Mua Hàng Của Bạn: <?php echo $currentUser['email'] ?></h3>
            </p>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container shopping-cart">
          <div class="row">
            <div class="col-md-12">
              <div class="clearfix">
              </div>
            
              <table class="shop-table">
                <thead>
                  <tr>
                    <th>
                      Hình ảnh
                    </th>
                    <th>
                      Thông tin
                    </th>
                    <th>
                      Giá tiền
                    </th>
                    <th>
                      Trạng Thái
                    </th>
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
                      <div class="shop-details">
                        <div class="productname">
                          Tên Sản Phẩm: <?php echo $row2['tensp'] ?>
                        </div>
                        <div class="productname">
                          Mô Tả: <?php echo $row2['mota'] ?>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h5>
                          <?php echo $row2['giatien'] ?>đ
                      </h5>
                    </td>
                    <td>
                      <h5>
                          Thành Công
                      </h5>
                    </td>
                  </tr>
                </tbody>
                <?php endforeach; ?>
              <?php endforeach; ?>
              </table>
                
              <div class="clearfix">
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
<?php include "footer.php" ?>