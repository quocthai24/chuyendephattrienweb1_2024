<?php

// Bật chế độ strict mode trong PHP
declare(strict_types=1);
require_once('A.php');
require_once('B.php');
require_once('C.php');

class Demo {
    // Lần test thứ 1
    public function typeAReturnA():A
    {
        echo __FUNCTION__ ."<br>";
        return new A();
    }
    // Lần test thứ 2
    public function typeBReturnA():B
    {
        echo __FUNCTION__ ."<br>";
        return new A();
    }
    // Lần test thứ 3
    public function typeCReturnA():C
    {
        echo __FUNCTION__ ."<br>";
        return new A();
    }
    // Lần test thứ 4
    public function typeIReturnA():I
    {
        echo __FUNCTION__ ."<br>";
        return new A();
    }
    // Lần test thứ 5
    public function typeNULLReturnA():NULL
    {
        echo __FUNCTION__ ."<br>";
        return new A();
    }
    // Lần test thứ 6
    public function typeAReturnB():A
    {
        echo __FUNCTION__ ."<br>";
        return new B();
    }
    //Lần test thứ 7
    public function typeBReturnB():B
    {
        echo __FUNCTION__ ."<br>";
        return new B();
    }
    // lần test thứ 8
    public function typeCReturnB():C
    {
        echo __FUNCTION__ ."<br>";
        return new B();
    }
    //Lần test thứ 9
    public function typeIReturnB():I
    {
        echo __FUNCTION__ ."<br>";
        return new B();
    }
    // Lần test thứ 10
    public function typeNULLReturnB():NULL
    {
        echo __FUNCTION__."<br>";
        return new B();
    }
    // Lần test thứ 11
    public function typeAReturnC():A
    {
        echo __FUNCTION__ ."<br>";
        return new C();
    }
    // Lần test thứ 12
    public function typeBReturnC():B
    {
        echo __FUNCTION__ ."<br>";
        return new C();
    }
    // Lần test thứ 13
    public function typeCReturnC():C
    {
        echo __FUNCTION__ ."<br>";
        return new C();
    }
    // Lần test thứ 14
    public function typeIReturnC():I
    {
        echo __FUNCTION__ ."<br>";
        return new C();
    }
    // Lần test thứ 15
    public function typeNULLReturnC():NULL
    {
        echo __FUNCTION__ ."<br>";
        return new C();
    }
    // Lần test thứ 16
    public function typeAReturnI():A
    {
        echo __FUNCTION__ ."<br>";
        return new I();
    }
    // Lần test thứ 17
    public function typeBReturnI():B
    {
        echo __FUNCTION__ ."<br>";
        return new I();
    }
    // Lần test thứ 18
    public function typeCReturnI():C
    {
        echo __FUNCTION__ ."<br>";
        return new I();
    }
    // Lần test thứ 19
    public function typeIReturnI():I
    {
        echo __FUNCTION__ ."<br>";
        return new I();
    }
    // Lần test thứ 20
    public function typeNULLReturnI():NULL
    {
        echo __FUNCTION__ ."<br>";
        return new I();
    }
    // Lần test thứ 21
    public function typeAReturnNULL():A
    {
        echo __FUNCTION__."<br>";
        return NULL;
    }
    // Lần test thứ 22
    public function typeBReturnNULL():B
    {
        echo __FUNCTION__ ."<br>";
        return NULL;
    }
    // Lần test thứ 23
    public function typCReturnNULL():C
    {
        echo __FUNCTION__."<br>";
        return NULL;
    }
    // Lần test thứ 24
    public function typeIReturnNULL():I
    {
        echo __FUNCTION__."<br>";
        return NULL;
    }
    // Lần test thứ 25
    public function typeNULLReturnNULL():NULL
    {
        echo __FUNCTION__."<br>";
        return NULL;
}
}

$demo = new Demo();
$demo->typeAReturnA();