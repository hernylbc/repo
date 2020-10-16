<?php
namespace MyGreeter;

class Client{
    protected $strategy;

    /**
     * 显示页面
     */
    function show(){
        $this->strategy->showWords();
    }

    /**
     * 注册策略
     * @param wordsStrategy $strategy
     */
    function setStrategy(wordsStrategy $strategy){
        $this->strategy = $strategy;
    }
}




