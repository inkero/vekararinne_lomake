<?php

	class FormFunctions extends CI_Controller{
		
		public function rakenna_lomake(){
			$this -> load -> model("lomake_input");
			$this -> load -> model("lomake_rakenne");
			$data = $this -> lomake_rakenne -> getRakenne();
			$data = array("data" => $data);
			$this -> load -> helper('form');
			$this -> load -> view('lomake2', $data);
		}
		
		public function validoi_lomake(){
			$this -> load -> model("validointi");
			$data = $this -> input -> post();
			$data = $this -> validointi -> tulosta($data);
			
			$configs = array(
				'protocol'  =>  'smtp',
				'smtp_host' =>  'ssl://smtp.gmail.com',
				'smtp_user' =>  'inkeroinenjussi@gmail.com',
				'smtp_pass' =>  'banzai11',
				'smtp_port' =>  '465'
			);
			
			$this -> load -> library('email', $configs);
			$this -> load -> helper('email');
			
			$this -> load -> view('valmis_lomake', $data);
		}
	
	}

?>
	