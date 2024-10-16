<?php
// Định nghĩa class B kế thừa class C
require_once('C.php');
class B extends C {
    // Phương thức b1() của class B
    public function b1() {
        echo "This is function b1 from class B";
    }
}
