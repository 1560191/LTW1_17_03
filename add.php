<?php require_once 'connection.php' ?>
<?php
    $id= isset($_GET["id"]);
		if($_GET['id'])
		{
			$mahang=$_GET['id'];
			$sql="SELECT * from sanpham where mahang = '$mahang'";
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
              <h1>Giỏ Hàng</h1>
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
              <?php foreach($resultSet as $row): ?>
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
                      Hủy
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img src="<?php echo $row['hinhanh'] ?>" alt="">
                    </td>
                    <td>
                      <div class="shop-details">
                        <div class="productname">
                          Tên Sản Phẩm: <?php echo $row['tensp'] ?>
                        </div>
                        <div class="productname">
                          Mô Tả: <?php echo $row['mota'] ?>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h5>
                          <?php echo $row['giatien'] ?>đ
                      </h5>
                    </td>
                    <td>
                      <a href="index.php">
                        <img src="images/remove.png" alt="">
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <?php endforeach; ?>
              <div class="clearfix">
              </div>
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div class="shippingbox">
                    <h5>
                      Thông tin khách hàng
                    </h5>
                    
                      <label>
                        Địa Chĩ:
                      </label>
                      <input type="diachi" class="form-control" id="diachi" name="diachi">
                      <label>
                        Số Điện Thoại:
                      </label>
                      <input type="sdt" class="form-control" id="sdt" name="sdt">
                      
                      <div class="clearfix">
                      </div>
                      <button>
                        Xác Nhận
                      </button>
                    
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="shippingbox">
                    <h5>
                      Mã Giảm Giá
                    </h5>
                    
                      <label>
                        Điền mã giảm giá vào đây:
                      </label>
                      <input type="text" name="">
                      <div class="clearfix">
                      </div>
                      <button>
                        Xác Nhận
                      </button>
                    
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="shippingbox">
                    <div class="grandtotal">
                      <h5>
                        Tổng Tiền:
                      </h5>
                      <span>
                        999.000đ
                      </span>
                    </div>
                    <button>
                      <a href="muahang.php?id=<?php echo $row['mahang'] ?>">Xác Nhận Mua Hàng
                    </button>
                  </div>
                </div>
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