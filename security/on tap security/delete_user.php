<?php
// Bắt đầu phiên
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$userIdToDelete = NULL; // ID người dùng để xóa
$currentUserId = $_SESSION['id']; // ID của người dùng đang đăng nhập

if (!empty($_GET['id'])) {
    $userIdToDelete = $_GET['id'];

    // Kiểm tra xem người dùng có cố gắng xóa tài khoản của chính họ không
    if ($userIdToDelete == $currentUserId) {
        $userModel->deleteUserById($userIdToDelete); // Xóa người dùng
        header('location: list_users.php'); // Quay lại danh sách người dùng
    } else {
        // Hiển thị thông báo không có quyền
        $_SESSION['message'] = 'Không có quyền xóa tài khoản của người khác.';
        header('location: list_users.php'); // Quay lại danh sách người dùng
        exit();
    }
}
?>
