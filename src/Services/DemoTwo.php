<?php

namespace ShoutLara\DemoTwo\Services;
use DemoOne;
class DemoTwo
{
    public function RandomNumberConcatToString($str)
    {
        DemoOne::ShuffleString($str);
        $number = rand(10,100);
        $string = $number.$str;
        return $string;
    }
    
}
