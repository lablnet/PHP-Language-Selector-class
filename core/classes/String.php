<?php
	/**
	 * This package can Clean inputs,string conversion,string replacement.
	 *
	 * @author   Malik Umer Farooq <lablnet01@gmail.com>
	 * @author-profile https://www.facebook.com/malikumerfarooq01/
	 * @license MIT 
	 */
class Strings
{ 
     /**
     * Remove abusive/anytype of word in the string or user input
     * @param  $params (array)
     * 'replacing_word' =>  rword need to search either come form database or you 
     * written in array
     * 'replacing_with' => Word need to replace with these words
     * 'text' => User input or anyString
     * ISSUE: text uppercase and lowercase issues
     * @return string
    */	
	public function ReplaceWords( $params ){
		
		if(is_array($params)){
			
			if(!empty($params['replacing_word']) 
				and !empty($params['replacing_with']))
				{
				$replacing_word = $params['replacing_word'];
				
				$replacing_with = $params['replacing_with'];
				
				return str_replace( $replacing_word, $replacing_with, $params['text'] );
				
			}
			
			else{
				
				return false;
			}
			
		}else{
			
			return false;
			
		}
	}
	
     /**
     * Convert uppercase to lower & lowercase to upper
     * @param $params (array)
     * 'type' => 
     * 		'secured' =  remove whitespace html tag convert to entities and secured
     * 		'root' = extra feature then secured Convert all applicable characters to HTML entities
     * 'input' => User input or anyString
     * @return string
    */	
	public function CleanInput( $params ){
		
		if(is_array($params)){
			
			if(!empty($params['input'])){
				
				if(!empty($params['type'])){
					
					if($params['type'] === 'secured'){
						
				        return  stripslashes(trim(htmlspecialchars($params['input'])));
						
					}elseif($params['type'] === 'root'){
						
						return  stripslashes(trim(htmlspecialchars(strip_tags($params['input']))));
						
					}
				}else{
					
					return false;
					
				}
				
			}else{
				return false;
			}
		}else{
			return false; 
		}
	}

	 /**
     * Convert uppercase to lower & lowercase to upper
     * @param   $params (array)
     * 'type' => possible uppercase and lowercase
     * 'text' => string to conversion
     * @return string
    */	
	public function StringConversion( $params ){
		
		if(is_array($params)){
			
			if(!empty($params['text'])){
				
				if($params['type'] === 'lowercase'){
					
						return strtolower($params['text']);
						
				}elseif($params['type'] === 'uppercase'){
						return strtoupper($params['text']);
				}
				
				if($params['type'] === 'camelcase'){
					
					return ucwords($params['text']);
					
				}
				else{
					return false;
				}
		}else{
			return false;
		}
	}else{
			return false;
		}
	}
}

