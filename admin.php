<?php 
require_once 'connection.php';
$success = true;
if (!empty($_POST['email']) && !empty($_POST['password'])) {  
  $user = findUserByEmail($_POST['email']);
  if ($user['email'] == 'admin@gmail.com') {
    if (password_verify($_POST['password'], $user['password'])) {
      $success = true;
      $_SESSION['userId'] = $user['id'];
      header('Location: index2.php');
      exit();
    } else {
      $success = false;
    }      
  } else {
    $success = false;
  }
}
?>
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
    #customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    
    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }
    
    #customers tr:nth-child(even){background-color: #f2f2f2;}
    
    #customers tr:hover {background-color: #ddd;}
    
    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
    </style>
</head>
<body>
    <table id="customers">
    <tr>
    <th>
    <center><h3>Đăng Nhập Vào Trang Admin</h3></center>
      <?php if (!$success) : ?>
      <center><div class="alert alert-danger" role="alert">
        Email và mật khẩu không hợp lệ vui lòng đăng nhập lại!
      </div></center>
      <?php endif; ?>
    <form method="POST">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email đăng nhập..." value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
      </div>
      <div class="form-group">
        <label for="password">Mật Khẩu:</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu...">
      </div>
      <button type="submit" class="btn btn-primary">Đăng nhập</button>
    </form>
    </th>
    </tr>
    </table>
    <center><button type="button" class="btn btn-success"><a href="index.php" style="color: white">Trở Về Trang Chủ</button></center>
</body>
</html>