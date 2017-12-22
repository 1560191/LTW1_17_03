<?php
require_once 'connection.php';
if (!$currentUser) {
  header('Location: index.php');
  exit();
}
$fullname = $currentUser['fullname'];
$success = true;
// Kiểm tra người dùng có nhập tên
if (isset($_POST['fullname'])) {
  if (strlen($_POST['fullname']) > 0) {
    $fullname = $_POST['fullname'];
    $currentUser['fullname'] = $fullname;
    updateUser($currentUser);
  } else {
    $success = false;
  }
}
if (isset($_POST['oldPassword'])) {
  $oldPassword = $_POST['oldPassword'];
  $newPassword = $_POST['newPassword'];
  $newPassword2 = $_POST['newPassword2'];
  $oldPasswordOk = password_verify($oldPassword, $currentUser['password']);
  $newPasswordOk = $newPassword == $newPassword2 && strlen($newPassword) >= 1;
  $success = $oldPasswordOk && $newPasswordOk;
  if ($success) {
    updateUserPassword($currentUser['id'], password_hash($newPassword, PASSWORD_DEFAULT));
  }
}
?>
<?php include 'header.php' ?>
<h1><span style="color: white">Thông tin cá nhân</span></h1><br>
<?php if (!$success) : ?>
<div class="alert alert-danger" role="alert">
  <ul>
    <?php if (!$oldPasswordOk) : ?>
    <li>Mật khẩu cũ không chính xác!</li>
    <?php endif; ?>
    <?php if (!$newPasswordOk) : ?>
    <li>Lỗi mật khẩu mới!</li>
    <?php endif; ?>
  </ul>
</div>
<?php endif; ?>
<form method="POST">
  <div class="form-group">
    <label for="fullname"><span style="color: white">Họ Và Tên</span></label><br>
    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="họ và tên..." value="<?php echo $fullname ?>">
  </div>
  <div class="form-group">
    <label for="oldPassword"><span style="color: white">Mật Khẩu Cũ</span></label><br>
    <input type="password" class="form-control" id="oldPassword" name="oldPassword" placeholder="nhập mật khẩu cũ...">
  </div>
  <div class="form-group">
    <label for="newPassword"><span style="color: white">Mật Khẩu Mới</span></label><br>
    <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="nhập mật khẩu mới...">
  </div>
  <div class="form-group">
    <label for="newPassword2"><span style="color: white">Nhập Lại Mật Khẩu Mới</span></label><br>
    <input type="password" class="form-control" id="newPassword2" name="newPassword2" placeholder="nhập lại mật khẩu mới...">
  </div>
  <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
<?php include 'footer.php' ?>
