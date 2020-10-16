<?php
namespace MyGreeter;

/**
 * Goodafternoon策略
 */
class GoodafternoonStrategy implements WordsStrategy {
    public function showWords(){
        echo 'Good afternoon';
    }
}




