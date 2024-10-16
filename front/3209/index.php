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
$less->compileFile('./less/3209.less', './css/3209.css');
?>


<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Thêm liên kết Font Awesome -->
    <link rel="stylesheet" href="./css/3209.css">
    <title>Shop Page</title>
</head>
<body>
    <div class="page-title-inner">
        <h1>Shop</h1>
    </div>

    <div class="shop-controls">
        <div class="results-info">
            Showing 1–12 of 16 results
        </div>

        <div class="controls-right">
            <div class="view-options">
                <!-- Grid view icon -->
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                        <path d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2zm6 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V2zm6-1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h2zM1 8a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V8zm6 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8zm6-1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h2zM1 14a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-2zm6 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-2zm6-1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h2z"/>
                    </svg>
                </button>
                <!-- List view icon -->
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </button>
            </div>

            <div class="sort-filter">
                <select>
                    <option value="latest">Sort by latest</option>
                    <option value="popularity">Sort by popularity</option>
                    <option value="rating">Sort by rating</option>
                    <option value="price">Sort by price</option>
                </select>
                <button class="filter-button">
                    <div class="filter-icon">
                        <i class="fas fa-filter"></i>
                    </div>
                    <span>Filter</span>
                </button>
            </div>
        </div>
    </div>

        <!-- Product grid -->
        <div class="product-grid">
            <div class="product-item">
                <img src="img/product-11-3.jpg" alt="Product 1">
                <div class="product-price">$12.00 – $20.00</div> <!-- Đặt giá lên trước -->
                <div class="product-name">Shield Conditioner</div> <!-- Đổi vị trí tên sản phẩm -->
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="product-item">
                <img src="img/product-13-4" alt="Product 2">
                <div class="product-price">$20.00</div> <!-- Đặt giá lên trước -->
                <div class="product-name">Perfecting Facial Oil</div> <!-- Đổi vị trí tên sản phẩm -->
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="product-item">
                <span class="discount-badge">-24%</span>
                <img src="img/product-10-3.jpg" alt="Product 3">
                <div class="product-price">
                    <span class="old-price">$25.00</span> $19.00
                </div> <!-- Đặt giá lên trước -->
                <div class="product-name">Enriched Hand & Body Wash</div> <!-- Đổi vị trí tên sản phẩm -->
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="product-item">
                <img src="img/product-12-3" alt="Product 4">
                <div class="product-price">$45.00</div> <!-- Đặt giá lên trước -->
                <div class="product-name">Shield Shampoo</div> <!-- Đổi vị trí tên sản phẩm -->
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <!-- Add more product items as needed -->
        </div>
    </body>
</html>
