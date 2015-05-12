<?php

namespace Controller\Validator;

class booleanValidator {

 	 public function __construct(){
	 }
	 public static function isTrue($bool){
	 	return (is_bool($bool) and $bool == TRUE);
	 }
	 public static function isFalse($bool){
		return (is_bool($bool) and $bool == FALSE);
	 }
}