<?php require_once 'connection.php' ?>
<?php include "header.php" ?>
<?php if ($currentUser) : ?>
Chào mừng <?php echo $currentUser['fullname'] ?> đã trở lại.
<?php else: ?>
Bạn chưa đăng nhập
<?php endif ?>
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
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">New</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/1.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Ba Lô Loại 1</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
							  	 <div class="offer">New</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/7.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Ba Lô Loại 7</div>
                                 <h4 class="price">999.000đ</h4>
                                  <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								  </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">New</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/11.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Laptop Loại 1</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
							  	 <div class="offer">New</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/14.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Laptop Loại 4</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">New</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/21.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Điện Thoại Loại 1</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
							  	 <div class="offer">New</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/23.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Điện Thoại Loại 3</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">New</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/40.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Xe Loại 10</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
							  	 <div class="offer">New</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/33.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Xe Loại 3</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
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
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
							  	 <div class="offer">Hot</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/23.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Điện Thoại 3</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
							  	 <div class="offer">Hot</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/29.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Điện Thoại Loại 9</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">Hot</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/26.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Điện Thoại Loại 6</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
							  	 <div class="offer">Hot</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/17.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Laptop Loại 7</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
					</li>
					<li>
						<div class="row">
						   <div class="col-md-3 col-sm-6">
                              <div class="products">
							  	 <div class="offer">Hot</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/4.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Ba Lô Loại 4</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
						
						   <div class="col-md-3 col-sm-6">
                              <div class="products">
							  	 <div class="offer">Hot</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/25.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Điện Thoại Loại 5</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
						   <div class="col-md-3 col-sm-6">
                              <div class="products">
							  	 <div class="offer">Hot</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/16.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Laptop Loại 6</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
						   <div class="col-md-3 col-sm-6">
                              <div class="products">
							  	 <div class="offer">Hot</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/8.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Ba Lô Loại 8</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
                        </div>
					</li>
						
						<div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title">Sản Phẩm<strong> Nổi Bật</strong></h3>
                  
                  <ul id="featured">
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
							  	 <div class="offer">Lượt Xem: 420</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/23.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Điện Thoại Loại 3</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
							  	 <div class="offer">Lượt Xem: 364</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/29.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Điện Thoại Loại 9</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">Lượt Xem: 328</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/26.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Điện Thoại Loại 6</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
							  	 <div class="offer">Lượt Xem: 136</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/4.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Ba Lô Loại 4</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
                        </div>
						
						
                     </li>
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
							  	 <div class="offer">Lượt Xem: 63</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/32.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Xe Loại 2</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
							  	 <div class="offer">Lượt Xem: 39</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/33.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Xe Loại 3</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
							  	 <div class="offer">Lượt Xem: 25</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/28.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Điện Thoại Loại 8</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								</div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
							  	 <div class="offer">Lượt Xem: 8</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/5.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Ba Lô Loại 5</div>
                                 <h4 class="price">999.000đ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Mua</button><button class="button compare" type="button">Xem Thông Tin</button></div>
								 </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
<?php include "footer.php" ?>