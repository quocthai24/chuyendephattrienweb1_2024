<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/' ;

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./less/3094.less', './css/3094.css');
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 4</title>
    <link rel="stylesheet" href="stylesheet" type="text/css"> <!-- Lỗi ở đây, nên sửa thành rel="stylesheet" -->
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@400&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/less@4.1.1"></script>
    <link rel="stylesheet" href="./fonts/fonts.css">
    <link rel="stylesheet" href="./css/3094.css">
</head>
<body>
    <!-- Thanh điều hướng -->
    <div class="nav-bar">
        <ul>
            <li><a href="#" class="active">Show All</a></li>
            <li><a href="#">Computer Repair</a></li>
            <li><a href="#">Data Recovery</a></li>
            <li><a href="#">Mac Repair</a></li>
            <li><a href="#">Screen Repair</a></li>
            <li><a href="#">Virus Removal</a></li>
        </ul>
    </div>

    <!-- Phần hiển thị hình ảnh -->
    <div class="gallery">
        <div class="item">
            <img src="img/portfolio-1_600x600" alt="Charging Issues">
            <div class="overlay">
                <div class="buttons">
                    <button class="button" onclick="openModal('portfolio-1_600x600.jpg')">Zoom</button>
                    <button class="button">View</button>
                </div>
            </div>
            <div class="info">
                <h4>Charging Issues</h4>
                <p>Computer Repair</p>
            </div>
        </div>

        <div class="item">
            <img src="img/portfolio-2_600x600" alt="Battery Replacement">
            <div class="overlay">
                <div class="buttons">
                    <button class="button" onclick="openModal('portfolio-2_600x600.jpg')">Zoom</button>
                    <button class="button">View</button>
                </div>
            </div>
            <div class="info">
                <h4>Battery Replacement</h4>
                <p>Apple Services</p>
            </div>
        </div>
    </div>

    <!-- Modal hiển thị hình ảnh -->
    <div class="modal" id="myModal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img id="modalImage" src="" alt="Zoomed Image">
    </div>

    <script src="./js/3094.js"></script> <!-- Thêm liên kết đến tệp JavaScript -->
</body>
</html>
