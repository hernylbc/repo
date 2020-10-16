<?php
/**
 * 自动加载类
 */

namespace MyGreeter;

class Loader
{
    static function autoload($class)
    {
        require BASEDIR.'/'.str_replace('\\', '/', $class).'.php';
    }
}