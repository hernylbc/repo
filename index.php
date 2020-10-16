<?php
//版本对比
if (version_compare(PHP_VERSION, '5.1.0', '<')) {
    echo 'php版本需要在5.1.0以上才能运行';
    exit;
}

//定义根目录
define('BASEDIR', __DIR__);
include BASEDIR.'/MyGreeter/Loader.php';

spl_autoload_register('\\MyGreeter\\Loader::autoload'); //自动加载类

$my_greeter_client = new MyGreeter\Client();

$hour = date('G');

//判断时间
if ($hour<13) {
    //早上
    $strategy = new MyGreeter\GoodmorningStrategy(); //加载Goodmorning策略
} elseif($hour<17) {
    //下午
    $strategy = new MyGreeter\GoodafternoonStrategy(); //加载Goodafternoon策略
} else {
    //晚上
    $strategy = new MyGreeter\GoodeveningStrategy(); //加载Goodevening策略
}

$my_greeter_client->setStrategy($strategy); //注册
$my_greeter_client->show(); //展示

