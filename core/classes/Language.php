<?php
	/**
	 * This package can Helpful selecting language
	 *
	 * @author   Malik Umer Farooq <lablnet01@gmail.com>
	 * @author-profile https://www.facebook.com/malikumerfarooq01/
	 * @license MIT 
	 *
	 * @link https://github.com/Lablnet/PHP-Language-Selector-class
	 */
class Language
{

		/**
		 * Initialize the objects.
		 *
		 * @return void
		 */		
	public function InitObjects(){

		$this->Strings = new Strings;

	}


	public function SetLanguage($value){

		setcookie("lang", $value, time() + ( 3600 * 12 * 30), '/', $_SERVER['SERVER_NAME'], false, false);

	}
		
		/**
		 * include lang string file
		 * 
		 * @return string
		 */			
	public function LanguageString(){

		self::InitObjects();

		if(!isset($_COOKIE['lang'])){

	  		$language = 'en';

	  	}else{


	  		$language = $_COOKIE['lang'];

	  	}

		  if(file_exists("core/local/{$language}.php")){

			 require_once "core/local/{$language}.php";

			if(is_array($GLOBALS['lang'])){

				return $GLOBALS['lang'];

			}else{

				return [];

			
			}}else{

				return false;

			}

		}	
		/**
		 * for getting language key and return its value
		 * @param $key language key
		 * @return string
		 */
	public function LangPrint($key){

		self::InitObjects();

		if(!empty($key)){

			if(array_key_exists($this->Strings->StringConversion(['type'=>'lowercase','text'=>$key]),$this->LanguageString())){

				return $this->LanguageString()[$this->Strings->StringConversion(['type'=>'lowercase','text'=>$key])];

			}else{

				return $this->Strings->StringConversion(['type'=>'lowercase','text'=>$key]);

			}

		}else{

			return false;

		}

	}
		/**
		 * Only for debug purpose
		 * 
		 * @param =>$params (array)
		 * 'allkeys'=>'on' ==> return all keys in array
		 * 'search' => 'value' ==> return boolean true on find false not find Note: it only keys string in language file
		 * @return string
		 */		
	public function Debug($params){

		self::InitObjects();

		if(is_array($params)){

			if(isset($params['allkeys']) and $this->Strings->StringConversion(['type'=>'lowercase','text'=> $params['allkeys']]) === 'on'){

				return array_keys($this->LanguageString());

			}

			if(isset($params['search'])){

			   if( array_key_exists($params['search'], $this->LanguageString())){

			        return true;        

			    }else{

			        return false;

			    }

			}

		}else{

			return false;

		}

	}

}
