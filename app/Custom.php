<?php


namespace App;


class Custom
{
    public static $info =  [

        "name" => "Game & Software Zone Myanmar",
        "short_name" => "G & S",
        "type" => "POS",
        "phone" => "",
        "address" =>"",
        "meta-img" => "f/img/meta.jpg",
        "mms-logo" => "dashboard/images/main_logo.png",
        "c-logo" => "dashboard/images/main_logo.png",
        "main_css" => "dashboard/css/bootstrap.min.css",
    ];
    public static function toShort($text,$max=10){
        if(strlen($text) >= $max){
            return substr($text,0,$max)."...";
        }else{
            return $text;
        }
    }

}
