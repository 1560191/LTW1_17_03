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
<?php
    $id= isset($_GET["id"]);
		if($_GET['id'])
		{
			$mahang2=$_GET['id'];
			$sql2="select * from sanpham where loai = (SELECT loai from sanpham where mahang = '$mahang2') limit 4";
            $exe2=$db->query($sql2);
            $exe2->setFetchMode(PDO::FETCH_ASSOC);
            $exe2->execute();
            $resultSet2 = $exe2->fetchAll();
		}
?>
<?php
    $id= isset($_GET["id"]);
		if($_GET['id'])
		{
			$mahang3=$_GET['id'];
			$sql3="select * from sanpham where nhasanxuat = (SELECT nhasanxuat from sanpham where mahang = '$mahang3') limit 4";
            $exe3=$db->query($sql3);
            $exe3->setFetchMode(PDO::FETCH_ASSOC);
            $exe3->execute();
            $resultSet3 = $exe3->fetchAll();
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
              <h1>Thông Tin Sản Phẩm</h1>
            </p>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
              <?php foreach($resultSet as $row): ?>
            <div class="col-md-9">
              <div class="products-details">
                <div class="preview_image">
                  <div class="preview-small">
                    <img src="<?php echo $row['hinhanh'] ?>">
                  </div>
                </div>
                <div class="products-description">
                  <h5 class="name">
                      <?php echo $row['tensp'] ?>
                  </h5>
                  
                  <p>
                    Thông Tin sản phẩm:
                  </p>
                  <p>
                    Mô tả: <?php echo $row['mota'] ?>
                  </p>
                  <p>
                    Lượt xem: <?php echo $row['soluotxem'] ?>
                  </p>
                  <p>
                    Số lượng bán: <?php echo $row['soluongban'] ?>
                  </p>
                  <p>
                    Loại: <?php echo $row['loai'] ?>
                  </p>
                  <p>
                    Nhà sản xuất: <?php echo $row['nhasanxuat'] ?>
                  </p>
                  <hr class="border">
                  <div class="price">
                    Giá:  
                    <span class="new_price">
                      <?php echo $row['giatien'] ?>đ
                    </span>
                    
                  </div>
                  <hr class="border">
                  <div class="wided">
                    
                    <div class="button_group">
                        <button class="button add-cart" type="button"><a href="add.php?id=<?php echo $row['mahang'] ?>">Mua</button>
                    </div>
                  </div>
                  <div class="clearfix">
                  </div>
                  
                </div>
              </div>
              <?php endforeach; ?>
              <div class="clearfix">
              </div>
              
              <div id="productsDetails" class="hot-products">
                <h3 class="title">
                  <strong>
                    Sản Phẩm Cùng Loại
                  </strong>
                 
                </h3>
                
                <ul id="hot">
                  <li>
                    <div class="row">
                      <?php foreach($resultSet2 as $row): ?>
                            <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 
                                 <div class="thumbnail"><a href="details.php"><img src="<?php echo $row['hinhanh'] ?>" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $row['tensp'] ?></div>
                                 <h4 class="price"><?php echo $row['giatien'] ?>đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button"><a href="add.php?id=<?php echo $row['mahang']?>">Mua</button><button class="button compare" type="button"><a href="details.php?id=<?php echo $row['mahang'] ?>">Xem Thông Tin</button></div>
                              </div>
                            </div>
                            <?php endforeach; ?>
                      
                    </div>
                  </li>
                </ul>
              </div>
              <div id="productsDetails" class="hot-products">
                <h3 class="title">
                  <strong>
                    Sản Phẩm Cùng Nhà Sản Xuất
                  </strong>
                 
                </h3>
                
                <ul id="hot">
                  <li>
                    <div class="row">
                      <?php foreach($resultSet3 as $row): ?>
                            <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 
                                 <div class="thumbnail"><a href="details.php"><img src="<?php echo $row['hinhanh'] ?>" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $row['tensp'] ?></div>
                                 <h4 class="price"><?php echo $row['giatien'] ?>đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button"><a href="add.php?id=<?php echo $row['mahang']?>">Mua</button><button class="button compare" type="button"><a href="details.php?id=<?php echo $row['mahang'] ?>">Xem Thông Tin</button></div>
                              </div>
                            </div>
                            <?php endforeach; ?>
                      
                    </div>
                  </li>
                </ul>
              </div>
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
