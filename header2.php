<!DOCTYPE html>
<html lang="vi">
<head>
  <title>Nhóm 3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index2.php">Quản Lý Website</a>
    </div>
    <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index2.php">Dashboard</a></li>
                <li><a href="qltaikhoan.php">Quản Lý Tài Khoản</a></li>
                <li><a href="qlsanpham.php">Quản Lý Sản Phẩm</a></li>
                <li><a href="qldonhang.php">Quản Lý Đơn Hàng</a></li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Quản Lý Website</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="index2.php">Dashboard</a></li>
        <li style="background-color:Gray;"><a href="qltaikhoan.php" style="color: white">Quản Lý Tài Khoản</a></li>
        <li style="background-color:Gray;"><a href="qlsanpham.php" style="color: white">Quản Lý Sản Phẩm</a></li>
        <li style="background-color:Gray;"><a href="qldonhang.php" style="color: white">Quản Lý Đơn Hàng</a></li>
      </ul><br>
    </div>
    <br>