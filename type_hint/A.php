<?php
// Định nghĩa class A kế thừa class C
require_once('C.php');
class A extends C {
    // Phương thức a1() của class A
    public function a1():void {
        echo "This is function a1 from class A";
    }
}
