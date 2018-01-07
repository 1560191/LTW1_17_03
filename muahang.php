<?php require_once 'connection.php' ?>
<?php include "header.php" ?>
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
            
            $sql2="UPDATE sanpham SET soluongban = soluongban+1 where mahang = '$mahang'";
            $exe2=$db->prepare($sql2);
            $exe2->execute();
            
            $stmt = $db->prepare("INSERT INTO `donhang` (`mahang`, `idkhachhang`, `ngaylap`, `trangthai`) VALUE (?, ?, curdate(), 'Chưa Giao')");
            $stmt->execute(array($mahang, $currentUser['id']));
		}
?>
        <div class="clearfix"></div>
         
            <div class="promotion-banner">
               <div class="container">
                  
               </div>
            </div>
         
         <div class="clearfix"></div>
         <div class="container_fullwidth">
            <div class="container">
               <div class="hot-products">
                  <h3>Đã Mua Hàng Thành Công!</h3>
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
                                  Trạng Thái
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
                                  <h5>
                                      Thành Công
                                  </h5>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <?php endforeach; ?>
                          <div class="clearfix">
                          </div>
                          
                        </div>
                    </div>
                </div>
               <div class="clearfix"></div>
            </div>
        </div>
        </div>
        </div>
<?php include "footer.php" ?>