<?php

namespace Controller\validator;

class integerValidator {

     public function __construct(){
     }
     public static function equal($var1, $var2){
        return ($var1 == $var2);
     }
     public static function superior($var1, $var2){
        return (($var1 > $var2) or (self::equal($var1, $var2)));
     }
     public static function inferior($var1, $var2){
        return (($var1 < $var2) or (self::equal($var1, $var2)));
     }
     public static function strictSuperior($var1, $var2){
        return ($var1 > $var2);
     }
     public static function strictInferior($var1, $var2){
        return ($var1 < $var2);
     }
     public static function between($integer, $var1, $var2){
        return (($integer >= $var1 and $integer <= $var2) or ($var2 < $var1 and  $integer >= $var2 and $integer <= $var1));
     }
     public static function lessZero($var1){
        return ($var1 <= 0);
     }
     public static function moreZero($var1){
        return ($var1 >= 0);
     }
}