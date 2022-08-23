<?php
class car
 {
	 public $carname;
	 public $cartype;

	function set_carname($name)
	 {
		$this->name=$name; 
	
	 }
	 function get_carname()
	 {
		return $this->name;
			
	 }
	 function set_cartype($type)
	 {
		$this->type=$type;
	
	}
	function get_cartype()
	 {
		 return $this->type;
	 }
		
 }
 $carob= new car();
 $carob->set_carname('AUDI');
 $carob->set_cartype('SEDAN');
 echo "CarNAme : ".$carob->get_carname();
 echo "<br><br>";
 echo "CarType : ".$carob->get_cartype();
 ?>