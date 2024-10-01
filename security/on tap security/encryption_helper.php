<?php
// encryption_helper.php

function encryptId($id, $key) {
    return base64_encode($id . $key);
}

function decryptId($encoded_id, $key) {
    $decoded_id = base64_decode($encoded_id);
    return str_replace($key, '', $decoded_id); // Loại bỏ khóa để lấy lại ID
}
?>