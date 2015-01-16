<?php
	
	class Code{

		function __construct(){

		}

		//generate new code
		private function generate_code($size_code){
			$c_uppercase='ABCDEFGHIJKLMNPQRSTUVWXYZ';
			$c_numbers='23456789';

			$characters='';
			$code='';

			//concatenate the possible characters
			$characters = $c_uppercase.$c_numbers;

			//Calculate the total number of possible characters
			$length_string = strlen($characters);

			//generate a character from string and concatenate
			for($i=1; $i<=$size_code; $i++){
				$rand=mt_rand(1, $length_string);
				$code .= $characters[$rand-1];
			}

			return $code;
		}

		//check if code exist on database
		private function check_code($code){
			$db = new mysqli('localhost', 'root', '', 'codes');
			$sql=$db->prepare('SELECT * FROM code Where code="'.$code.'"');
			$sql->execute();
			
			if($sql==true){
				return true;
			} else {
				return false;
			}
		}

		//insert code on database 
		public function insert_code($size_code, $number_codes){

			for($i=1; $i <= $number_codes; $i++ ){
				$code = $this->generate_code($size_code);
				$check = $this->check_code($code);
				
				if($check==true){
					$db = new mysqli('localhost', 'root', '', 'codes');
					$sql=$db->prepare('INSERT INTO code (code) VALUES ("'.$code.'")');
					$sql->execute();	
				}
			}
			return true;
		}
	}
?>