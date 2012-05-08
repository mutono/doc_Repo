<?php
namespace models;

/**
 * @Entity
 * @Table(name="internalfortifiedb2")
 */
 
 class E_IntFortifiedB2 { 
 
	/**
	* @Id
	* @Column(name="checkNumber", type="integer", length=11, nullable=false)
	* */
	private $checkNumber;
	
	/**
	* @Column(name="dates", type="date", nullable=false)
	* */
	private $dates;
	
	/*
	* @Column(name="condition", type="integer", length=1, nullable=false)
	* */
	private $condition;
	
	/*
	* @Column(name="observations", type="string", length=45, nullable=true)
	* */
	private $observations;
	
	/*
	* @Column(name="checkedBy", type="string", length=45, nullable=true)
	* */
	private $checkedBy;
	
   /**
	* @ManyToOne(targetEntity="manucdevices", mappedby="deviceCompNumber")
	* @Column(name="deviceCompNumber", type="string", length=45, nullable=false)
	* */
	private $deviceCompNumber;
	
   /**
    * @ManyToOne(targetEntity="manucdevices", mappedby="manufacturerCompName")
	* @Column(name="manufacturerCompName", type="string", length=45, nullable=true)
	* */
	private $manufacturerCompName;
	
	public function getCheckNumber() {
			return $this -> checkNumber;
	}
	
	public function setCheckNumber($checkNumber) { $this -> checkNumber = $checkNumber;
	}
	public function getDates() {
			return $this -> dates;
	}
	
	public function setDates($dates) { $this -> dates = $dates;
	}
	public function getCondition() {
	       return $this -> condition;
	}
	
	public function setCondition($condition) { $this -> condition = $condition;
	}
	public function getObservations() {
			return $this -> observations;
	}
	
	public function setObservations($observations) { $this -> observations = $observations;
	}
	public function getCheckedBy() {
			return $this -> checkedBy;
	}
	
	public function setCheckedBy($checkedBy) { $this -> checkedBy = $checkedBy;
	}
	public function getDeviceCompNumber() {
			return $this -> deviceCompNumber;
	}
	
	public function setDeviceCompNumber($deviceCompNumber) { $this -> deviceCompNumber = $deviceCompNumber;
	}
	public function getManufacturerCompName() {
			return $this -> manufacturerCompName;
	}
	
	public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
	}

 }
?>