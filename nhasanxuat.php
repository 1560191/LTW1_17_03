<?php require_once 'connection.php' ?>
<?php include "header.php" ?>
<?php
   $sql1="SELECT * from sanpham where nhasanxuat like 'nhóm 3'";
   $exe1=$db->query($sql1);
   $exe1->setFetchMode(PDO::FETCH_ASSOC);
   $exe1->execute();
   $resultSet1 = $exe1->fetchAll();
   $sql2="SELECT * from sanpham where nhasanxuat like 'hoàng huỳnh'";
   $exe2=$db->query($sql2);
   $exe2->setFetchMode(PDO::FETCH_ASSOC);
   $exe2->execute();
   $resultSet2 = $exe2->fetchAll();
   $sql3="SELECT * from sanpham where nhasanxuat like 'huy huỳnh'";
   $exe3=$db->query($sql3);
   $exe3->setFetchMode(PDO::FETCH_ASSOC);
   $exe3->execute();
   $resultSet3 = $exe3->fetchAll();
   $sql4="SELECT * from sanpham where nhasanxuat like 'hòa'";
   $exe4=$db->query($sql4);
   $exe4->setFetchMode(PDO::FETCH_ASSOC);
   $exe4->execute();
   $resultSet4 = $exe4->fetchAll();
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
                  <h3 class="title"><strong>Nhóm 3</strong></h3>
                  
                  <ul id="hot">
                     <li>
                        <div class="row">
                           <?php foreach($resultSet1 as $row): ?>
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
               <div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title"><strong>Hoàng Huỳnh</strong></h3>
                  
                  <ul id="featured">
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
						<div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title"><strong>Huy Huỳnh</strong></h3>
                  
                  <ul id="featured">
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
					<div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title"><strong>Hòa</strong></h3>
                  
                  <ul id="featured">
                     <li>
                        <div class="row">
                           <?php foreach($resultSet4 as $row): ?>
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
               <div class="clearfix"></div>
<?php include "footer.php" ?>