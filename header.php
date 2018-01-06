<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <title>Đồ Án Web</title>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
      <link href="css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="css/style.css" rel="stylesheet">
      
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   	
    
   </head>
   <body id="home">
      <div class="wrapper">
         <div class="header">
            <div class="container">
               <div class="row">
                  
                  <div class="col-md-10 col-sm-10">
                     
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              <form action="search.php" method = "get">
                              <input class="search-submit" type="submit" value="">
                              <input class="search-input" type="text" value="" name="search">
                              </form>
                           </li>
                           
                          
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <ul class="option_nav">
                              <li><a href="index.php">Trang Chủ</a></li>
                              <li class="dorpdown">
                                    <a href="#">Danh Sách Sản Phẩm</a>
                                    <ul class="subnav">
                                       <li><a href="loaisanpham.php">Loại Sản Phẩm</a></li>
							           <li><a href="nhasanxuat.php">Nhà Sản Xuất</a></li>
                                    </ul>
                              </li>
                              <?php if (!$currentUser) : ?>
            					<li class="nav-item <?php echo ($page == 'login') ? 'active' : '' ?>">
              					<a class="nav-link" href="login.php">Đăng nhập</a>
            					</li>
            				  <?php endif; ?>
                              <?php if (!$currentUser) : ?>
            					<li class="nav-item <?php echo ($page == 'register') ? 'active' : '' ?>">
              					<a class="nav-link" href="register.php">Đăng ký</a>
            					</li>
            				  <?php endif; ?>
                              <?php if ($currentUser) : ?>
            					<li class="nav-item">
              					<a class="nav-link" href="lichsumua.php?id=<?php echo $currentUser['id'] ?>">Lịch Sử Mua Hàng</a>
            					</li>
            					<li class="nav-item">
              					<a class="nav-link" href="capnhaptt.php">Cập Nhập Thông Tin</a>
            					</li>
            					<li class="nav-item">
              					<a class="nav-link" href="logout.php">Đăng xuất</a>
            					</li>
            				  <?php endif; ?>
                              </ul>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
               
         