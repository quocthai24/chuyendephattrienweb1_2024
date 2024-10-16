<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

if (!empty($_POST['submit'])) {
    $users = [
        'username' => $_POST['username'],
        'password' => $_POST['password']
    ];
    $user = NULL;

    // Kiểm tra thông tin đăng nhập
    if ($user = $userModel->auth($users['username'], $users['password'])) {
        // Đăng nhập thành công
        $_SESSION['id'] = $user[0]['id'];

        // Kiểm tra xem user_id có phải là 2 không
        if ($_SESSION['id'] == 2) {
            echo "Không có quyền truy cập cho người dùng có ID = 2."; // Thông báo
            exit(); // Dừng thực thi
        }

        $_SESSION['message'] = 'Đăng nhập thành công';
        header('location: list_users.php');
    } else {
        // Đăng nhập thất bại
        $_SESSION['message'] = 'Đăng nhập thất bại';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Đăng Nhập</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
<?php include 'views/header.php'?>

    <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Đăng Nhập</div>
                    <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Quên mật khẩu?</a></div>
                </div>

                <div style="padding-top:30px" class="panel-body">
                    <form method="post" class="form-horizontal" role="form">
                        <div class="margin-bottom-25 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="tên người dùng hoặc email">
                        </div>

                        <div class="margin-bottom-25 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="mật khẩu">
                        </div>

                        <div class="margin-bottom-25">
                            <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                            <label for="remember"> Nhớ mật khẩu</label>
                        </div>

                        <div class="margin-bottom-25 input-group">
                            <div class="col-sm-12 controls">
                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Gửi</button>
                                <a id="btn-fblogin" href="#" class="btn btn-primary">Đăng nhập bằng Facebook</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 control">
                                Bạn chưa có tài khoản!
                                <a href="form_user.php">Đăng ký ở đây</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
