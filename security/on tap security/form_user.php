<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
require_once 'encryption_helper.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$errors = []; // Mảng lưu lỗi

$_id = decryptId($_GET['id'],"key");


if (!empty($_GET['id']) && $_SESSION['id'] === $_id) {
    $user = $userModel->findUserById($_id); //Update existing user
}
else{
    echo "Tài lộc quá lớn";
}

if (!empty($_POST['submit'])) {
    // Validate name
    if (empty($_POST["name"])) {
        $errors[] = "Tên là bắt buộc.";
    } elseif (!preg_match("/^[a-zA-Z0-9]{5,15}$/", $_POST["name"])) {
        $errors[] = "Tên phải từ 5 đến 15 ký tự và chỉ chứa chữ cái hoặc số.";
    }

    // Validate password
    if (empty($_POST["password"])) {
        $errors[] = "Mật khẩu là bắt buộc.";
    } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()]).{5,10}$/", $_POST["password"])) {
        $errors[] = "Mật khẩu phải bao gồm chữ thường, chữ HOA, số và ký tự đặc biệt (~!@#$%^&*()), chiều dài từ 5 đến 10 ký tự.";
    }

    // Nếu không có lỗi, xử lý logic cập nhật
    if (empty($errors)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>
    <div class="container">

        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <?php if (!empty($errors)) { ?>
                <div class="alert alert-danger">
                    <?php foreach ($errors as $error) {
                        echo $error . "<br>";
                    } ?>
                </div>
            <?php } ?>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>