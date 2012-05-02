<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
#processes form data before posting to the database



class Form extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
	}
	
	public function form_internalFort_B1(){
		$this->load->model('M_internalfortifiedB1');
		$this->M_internalfortifiedB1->add_record();
		
		if($this->M_internalfortifiedB1->response='ok'){
			//notify user of success
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_B1()
}