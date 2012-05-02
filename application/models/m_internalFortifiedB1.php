<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*model to IntFortifiedB1 entity
*/
use application\models\entities\E_intFortifiedB1;
class M_internalFortifiedB1 extends MY_Model{
		
	function __construct() {
		parent::__construct();
	}
	
	function add_record(){
			
	  $this->theForm=new \models\Entities\E_intFortifiedB1(); //set the the model specific to the form
	  
	   //check if a post was made
		if($this->input->post()){
			$elements = array();
			foreach($_POST as $key=>$val){ //For every posted values
			$frags = explode("_",$key); //we separate the attribute name from the number
			$id = $frags[1]; //That is the id
			$attr = $frags[0]; //And that is the attribute name
			if(!empty($val)){
			//We then store the value of this attribute for this element.
			$elements[$id][$attr] = htmlentities($val);
			}
			    
			    $this->theForm->setManufacturerCompName($elements[$id]['saltFactory']);
			    $this->theForm->setDates($elements[$id]['fortifiedDate']);
			    $this->theForm->setFillerWeight($elements[$id]['fortifiedWeight']);
				$this->theForm->setIodineWeight($elements[$id]['compoundWeight']);
				$this->theForm->setFinalPremixWeight1($elements[$id]['finalWeight']);
				
				$this->theForm->setStartTime($elements[$id]['startTime']);
				$this->theForm->setEndTime($elements[$id]['endTime']);
				$this->theForm->setFinalPremixWeight($elements[$id]['iodineWeight']);
				$this->theForm->setTransactedBy($elements[$id]['qcReview']);
				$this->em->persist($this->theForm);
				$this->em->flush();
				
			} //close foreach($_POST)
		}//close the this->input->post
		
		return $this->response='ok';
	}
	
}//end of class InternalFortifiedB1
