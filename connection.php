<?php
// PHP hiển thị lỗi
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Khởi tạo session
session_start();
// Gán biến page giống với tên file
$page = basename($_SERVER['SCRIPT_NAME'], '.php');
// Kết nối CSDL
$db = new PDO('mysql:host=localhost:3306;dbname=id2899612_nhom3;charset=utf8', 'adminh', 'adminh');
// Kiểm tra thông tin người dùng
$currentUser = null;
require_once 'functions.php';
if (isset($_SESSION['userId'])) {
  $currentUser = findUserById($_SESSION['userId']);
}