<?php 
require_once 'connection.php';
$success = true;
if (!empty($_POST['email']) && !empty($_POST['password'])) {  
  $user = findUserByEmail($_POST['email']);
  if ($user) {
    if (password_verify($_POST['password'], $user['password'])) {
      $success = true;
      $_SESSION['userId'] = $user['id'];
      header('Location: index.php');
      exit();
    } else {
      $success = false;
    }      
  } else {
    $success = false;
  }
}
?>
<?php include 'header.php' ?>
<h1><span style="color: white">Đăng Nhập</span></h1>
  <?php if (!$success) : ?>
  <div class="alert alert-danger" role="alert">
    Email và mật khẩu không hợp lệ vui lòng đăng nhập lại!
  </div>
  <?php endif; ?>
<form method="POST">
  <div class="form-group">
    <label for="email"></label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email đăng nhập..." value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
  </div>
  <div class="form-group">
    <label for="password"></label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu...">
  </div>
  <button type="submit" class="btn btn-primary">Đăng nhập</button>
</form>
<?php include 'footer.php' ?>