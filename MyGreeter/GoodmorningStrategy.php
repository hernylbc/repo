<?php
namespace MyGreeter;

/**
 * Goodmorning策略
 */
class GoodmorningStrategy implements WordsStrategy {
    public function showWords(){
        echo 'Good morning';
    }
}




