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

C::get(); // C::get() works
C::get()->te(); // C::get() works C->te does not work | outputs c
A::get()->te(); // neither C::get nor B->te works     | outputs b
A::nn()->te(); // neither C:nn nor C->te works        | outputs c