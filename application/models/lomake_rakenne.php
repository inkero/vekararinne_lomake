<?php

	class lomake_rakenne extends CI_Model {
		
		public function getRakenne(){
			//parametrit = element, label, name, type, value
			$data = array();
			$form = array();
			$data = json_decode(file_get_contents('lomake_rakenne.json', true), true);
			print_r($data);
			
			// silmukka, joka suorittaa annetun koodin annettujen kenttien määrän mukaan
			for($i = 0; $i < count($data); $i ++){
				
				// jos silmukan element indeksi on yhtäkuin "select", niin luodaan
				// lomake_select objekti, johon lisätään annetut tiedot inputs-taulukon mukaan.
				// lopuksi lisätään form-nimiseen taulukkoon, jotta tiedot voidaan lähettää view-näkymään
				if($data[$i]['element'] == 'select'){
				$form[$i] = new lomake_select();
				$form[$i] -> initialise($data[$i]);
				}
					elseif($data[$i]['element'] == 'input'){
					$form[$i] = new lomake_input();
					$form[$i] -> initialise($data[$i]);
					}
					
					elseif($data[$i]['element'] == 'textarea'){
					$form[$i] = new lomake_textarea();
					$form[$i] -> initialise($data[$i]);
					}
					
					// jos element on muu, niin se tekee automaattisesti perinteisen inputin
					else{
					$form[$i] = new lomake_element();
					$form[$i] -> initialise($data[$i]);
					}
			}
			
			return $form;
		}
		
	}
	
?>