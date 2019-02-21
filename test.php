<?php
class C {
    public static function get() {
        return static::new();
    }
    public static function new() {
        return new static();
    }
    public function te() {
        echo 'c';
    }
    public static function nn() {
        return new self();
    }
}

class B extends C {
    public function te() {
        echo 'b';
    }
}

class A extends B {

}

C::get(); // works
C::nn()->te();
C::get()->te(); // Does not work
A::get()->te();