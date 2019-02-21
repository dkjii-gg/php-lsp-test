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
}

class B extends C {
    public function te() {
        echo 'b';
    }
}

class A extends B {

}

C::get(); // works
C::get()->te(); // te does not work
A::get()->te(); // Neither get nor te works