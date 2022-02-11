<?php

class Str 
{
    public static function Upper($string)
    {
        return mb_strtoupper($string);
    }
      
    public static function Lower($string)
    {
        return  mb_strtolower($string);
    }
    

    public static function Length($string)
    {
        return mb_strlen($string);
    }

}


echo Str::Upper("J'ai super envi de te faire un calin");