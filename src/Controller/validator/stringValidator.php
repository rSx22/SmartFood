<?php

namespace Controller\validator;

class stringValidator {

 	 public function __construct(){
	 }
	 public static function strEqual($str1, $var1){
	 	return (strlen($str1) === $var1);
	 }
	 public static function strSuperior($str1, $var1){
	 	return (strlen($str1) >= $var1);
	 }
	 public static function strInferior($str1, $var1){
	 	return (strlen($str1) <= $var1);
	 }
	 public static function strictStrSuperior($str1, $var1){
	 	return (strlen($str1) > $var1);
	 }
	 public static function strictStrInferior($str1, $var1){
	 	return (strlen($str1) < $var1);
	 }
	 public static function strBetween($str1, $var1, $var2){
    	$l = mb_strlen($str1);
    return ($l >= $var1 && $l <= $var2);
}

	 public static function noWhiteSpaceAtStartAndEnd($str1){
	 	return (trim($str1) == $str1);
	 }
	 public static function clearSpaceStartEnd($str1){
	 	return (trim($str1));
	 }
	 public static function noWhiteSpace($str1){
	 	return (str_replace(" ", "", $str1) == $str1);
	 }
	 public static function isPrice($price){ // Might be worth doing first
	if($price =~ '^\d+(,\d{1,2})?$^') {
   			return true;
		}else{
		   return false;// Unkewl, fail
		}
}
}
