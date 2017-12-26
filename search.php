<?php require_once 'connection.php' ?>
<?php include "header.php" ?>
<?php
    $search = isset($_GET['search']);
    $searchid = $_GET['search'];
    $sql="SELECT * from sanpham where tensp like '$searchid%' or giatien like '$searchid%' or xuatxu like '$searchid%' or loai like '$searchid%' or nhasanxuat like '$searchid%'";
    $exe=$db->query($sql);
    $exe->setFetchMode(PDO::FETCH_ASSOC);
    $exe->execute();
    $resultSet = $exe->fetchAll();
                            
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
                  <h3 class="title"><strong>Kết Quả Tìm Kiếm Cho Từ Khóa: <?php echo $searchid ?></strong></h3>
                  
                  <ul id="hot">
                     <li>
                        <div class="row">
                          
                                <?php { foreach($resultSet as $row): ?>
                                
                                    <div class="col-md-3 col-sm-6">
                                      <div class="products">
                                         
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
                                <?php endforeach; }?>
                           
                            </div>
                     </li>
                     
                  </ul>
               </div>
               <div class="clearfix"></div>
            </div>
        </div>
<?php include "footer.php" ?>