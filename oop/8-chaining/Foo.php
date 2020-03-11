<?php

class Foo{
    public function bar(){
        echo 'foo';
        return $this;
    }

    public function baz(){
        echo 'bar';
    }
}