<?php
namespace MyGreeter;

/**
 * Goodevening策略
 */
class GoodeveningStrategy implements WordsStrategy {
    public function showWords(){
        echo 'Good evening';
    }
}


