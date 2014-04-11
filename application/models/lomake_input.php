<?php

	class lomake_input extends CI_Model {
		
		private $label;
		private $attributes = array();
		
		public function initialise($data){
			if(isset($data['label'])){
				$this -> label = $data['label'];
				unset($data['label']);
			}
			unset($data['element']); 								// poistaa turhat tiedot, tässä element
			$this -> attributes = $data;
		}
		
		public function getLabel(){
			return $this -> label;
		}
		
		public function getAttributes(){
			return $this -> attributes;
		}
	}
	
	class lomake_select extends CI_Model {
		
		private $label;
		private $name;
		private $options;
		
		public function initialise($array){
        $this -> name = $array['name'];
			if(isset($array['range'])){		
				if(isset($array['range'])){							// Jos halutaan pistää selectiin jotain
					$this -> options = $array['options'];
				}
				$a = explode(",", $array['range']);					// suurta range lukua, niin se leikkaa
					if($a[0] < $a[1]){								// range tiedon kahteen osaan pilkusta,
						for($i = $a[0]; $i <= $a[1]; $i++){ 		// ja lisää lukuja silmukalla, kunnes
							$this -> options[$i] = $i;				// rangen toisen luvun arvo on saavutettu
						}
					}
						else{										// tarkistetaan onko range
							for($i = $a[0]; $i >= $a[1]; $i--){		// suuremmasta pienempään,
								$this -> options[$i] = $i;			// ja lisätään luvut taulukkoon nurinpäin
							}
						}
					
			}											
				else{												// jos selecti ei koostu rangesta,
				$this -> options = $array['options'];				// sinne lisätään valintoja
				}													// perinteisesti yksittäin
			
			$this -> label = $array['label'];
		}
		
		public function getLabel(){
			return $this -> label;
		}
		
		public function getName(){
			return $this -> name;
		}
		
		public function getOptions(){
			return $this -> options;
		}
		
	}
	
	class lomake_textarea extends CI_Model {
		
		private $label;
		private $name;
		
		public function initialise($array){
			$this -> label = $array['label'];
			$this -> name = $array['name'];
		}
		
		public function getLabel(){
			return $this -> label;
		}
		
		public function getName(){
			return $this -> name;
		}
		
	}
	
	class lomake_element extends CI_Model {
		
		private $attributes = array();
		private $element;
		private $html;
		
		public function initialise($data){
			$this -> element = $data['element'];
			unset($data['element']);
			$this -> html = $data['html'];
			unset($data['html']); 									// poistaa turhat tiedot, tässä html
			$this -> attributes = $data;
		}
		
		public function getElement(){
			return $this -> element;
		}
		
		public function getHtml(){
			return $this -> html;
		}
		
		public function getAttributes(){
			return $this -> attributes;
		}
		
	}
	
?>