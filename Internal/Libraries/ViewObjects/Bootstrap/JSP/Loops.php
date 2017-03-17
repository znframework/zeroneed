<?php namespace ZN\ViewObjects\Bootstrap\JSP;

class Loops extends JSPExtends implements LoopsInterface
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    public function while(String $condition, Callable $callback)
    {
        $this->_statements($condition, $callback, 'while');
    }

    public function doWhile(String $condition, Callable $callback)
    {
        echo 'do{ ' . EOL;
        echo $callback();
        echo '}while(' . $condition . ');' . EOL;
    }

    public function for(String $condition, Callable $callback)
    {
        $this->_statements($condition, $callback, 'for');
    }
}