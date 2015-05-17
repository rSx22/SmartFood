<?php

namespace Controller\Validator;

class arrayValidator extends integerValidator{

 	 public function __construct(){
	 }
	 public static function isEmptyArray($array){
		if (null!==(array_filter($array))) {
			return FALSE;
		}else{
			return TRUE;
		}
	 }
 	public static function countEntries($array){
		if (is_array($array)) {
			return count($array, COUNT_RECURSIVE);
		}else{
			return FALSE;
		}
 	}

 	public static function equalEntriesCount($array, $var){
		if (is_array($array)) {
			return (parent::equal(self::countEntries($array), $var));
		}else{
			return FALSE;
		}
 	}
  	public static function superiorEntriesCount($array, $var){
		if (is_array($array)) {
			return (parent::superior(self::countEntries($array), $var));
		}else{
			return FALSE;
		}
 	}
  	public static function inferiorEntriesCount($array, $var){
		if (is_array($array)) {
			return (parent::inferior(self::countEntries($array), $var));
		}else{
			return FALSE;
		}
 	}
   	public static function strictSuperiorEntriesCount($array, $var){
		if (is_array($array)) {
			return (parent::strictSuperior(self::countEntries($array), $var));
		}else{
			return FALSE;
		}
 	}
   	public static function strictInferiorEntriesCount($array, $var){
		if (is_array($array)) {
			return (parent::strictInferior(self::countEntries($array), $var));
		}else{
			return FALSE;
		}
 	}
   	public static function betweenEntriesCount($array, $var1, $var2){
		if (is_array($array)) {
			return (parent::between(self::countEntries($array), $var1, $var2));
		}else{
			return FALSE;
		}
 	}
   	public static function keyExist($array, $var){
		if (is_array($array)) {
			return (array_key_exists($var, $array));
		}else{
			return FALSE;
		}
 	}
   	public static function valueExist($array, $var){
		if (is_array($array)) {
			return (in_array($var, $array));
		}else{
			return FALSE;
		}
 	}
    	public static function popLast($array){
		if (is_array($array)) {
			return array_pop($array);
		}else{
			return FALSE;
		}
 	}
    	public static function popFirst($array){
		if (is_array($array)) {
			return array_shift($array);
		}else{
			return FALSE;
		}
 	}
    	public static function putFirst($array, $vars){
		if (is_array($array) and is_array($vars)) {
			array_unshift($array, $vars);

			return $array;
		}else{
			return FALSE;
		}
 	}
     	public static function putLast($array, $vars){
		if (is_array($array) and is_Array($vars)) {
			array_push($array, $vars);
			return $array;
		}else{
			return FALSE;
		}
 	}
 	public function in_array_r($needle, $haystack, $strict = false) {
	    foreach ($haystack as $item) {
	        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && $this->in_array_r($needle, $item, $strict))) {
	            return true;
	        }
	    }
	    return false;
	}




}