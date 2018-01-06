<?php require_once 'connection.php' ?>
<?php include "header.php" ?>
<?php
   $sql="SELECT mahang,tensp,giatien,hinhanh,ngaynhap from sanpham group by tensp,giatien,hinhanh,ngaynhap order by ngaynhap desc limit 8";
   $exe=$db->query($sql);
   $exe->setFetchMode(PDO::FETCH_ASSOC);
   $exe->execute();
   $resultSet = $exe->fetchAll();
   $sql1="SELECT mahang,tensp,giatien,hinhanh,soluongban from sanpham group by tensp,giatien,hinhanh,soluongban order by soluongban desc limit 8";
   $exe1=$db->query($sql1);
   $exe1->setFetchMode(PDO::FETCH_ASSOC);
   $exe1->execute();
   $resultSet1 = $exe1->fetchAll();
   $sql2="SELECT mahang,tensp,giatien,hinhanh,soluotxem from sanpham group by tensp,giatien,hinhanh,soluotxem order by soluotxem desc limit 8";
   $exe2=$db->query($sql2);
   $exe2->setFetchMode(PDO::FETCH_ASSOC);
   $exe2->execute();
   $resultSet2 = $exe2->fetchAll();
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
                  <h3 class="title">Sản Phẩm<strong> Mới</strong></h3>
                  
                  <ul id="hot">
                     <li>
                        <div class="row">
                           <?php foreach($resultSet as $row): ?>
                            <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">New</div>
                                 <div class="thumbnail"><a href="details.php?id=<?php echo $row['mahang']?>"><img src="<?php echo $row['hinhanh'] ?>" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $row['tensp'] ?></div>
                                 <h4 class="price"><?php echo $row['giatien'] ?>đ</h4>
                                 <div class="button_group">
                                     <button class="button add-cart" type="button">
                                     <?php if (!$currentUser) : ?>
                                        <h8>Đăng Nhập Để Mua Hàng</h8>
                                     <?php else: ?>
                                     <a href="add.php?id=<?php echo $row['mahang']?>">Mua</button>
                                     <?php endif ?>
                                     <button class="button compare" type="button">
                                         <a href="details.php?id=<?php echo $row['mahang'] ?>">Xem Thông Tin
                                         </button>
                                 </div>
                              </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title">Sản Phẩm<strong> Bán Chạy</strong></h3>
                  
                  <ul id="featured">
                     <li>
                        <div class="row">
                           <?php foreach($resultSet1 as $row): ?>
                            <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">Số Lượng Bán: <?php echo $row['soluongban'] ?></div>
                                 <div class="thumbnail"><a href="details.php?id=<?php echo $row['mahang']?>"><img src="<?php echo $row['hinhanh'] ?>" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $row['tensp'] ?></div>
                                 <h4 class="price"><?php echo $row['giatien'] ?>đ</h4>
                                 <div class="button_group">
                                     <button class="button add-cart" type="button">
                                     <?php if (!$currentUser) : ?>
                                        <h8>Đăng Nhập Để Mua Hàng</h8>
                                     <?php else: ?>
                                     <a href="add.php?id=<?php echo $row['mahang']?>">Mua</button>
                                     <?php endif ?>
                                     <button class="button compare" type="button">
                                         <a href="details.php?id=<?php echo $row['mahang'] ?>">Xem Thông Tin
                                         </button>
                                 </div>
                              </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
					</li>
						
						<div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title">Sản Phẩm<strong> Nổi Bật</strong></h3>
                  
                  <ul id="featured">
                     <li>
                        <div class="row">
                           <?php foreach($resultSet2 as $row): ?>
                            <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">Số Lượt Xem: <?php echo $row['soluotxem'] ?></div>
                                 <div class="thumbnail"><a href="details.php?id=<?php echo $row['mahang']?>"><img src="<?php echo $row['hinhanh'] ?>" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $row['tensp'] ?></div>
                                 <h4 class="price"><?php echo $row['giatien'] ?>đ</h4>
                                 <div class="button_group">
                                     <button class="button add-cart" type="button">
                                     <?php if (!$currentUser) : ?>
                                        <h8>Đăng Nhập Để Mua Hàng</h8>
                                     <?php else: ?>
                                     <a href="add.php?id=<?php echo $row['mahang']?>">Mua</button>
                                     <?php endif ?>
                                     <button class="button compare" type="button">
                                         <a href="details.php?id=<?php echo $row['mahang'] ?>">Xem Thông Tin
                                         </button>
                                 </div>
                              </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
<?php include "footer.php" ?>