<?php
class fruit
 {
	 public $fruitname;
	 public $fruittype;

	function set_fruitname($name)
	 {
		$this->name=$name; 
	
	 }
	 function get_fruitname()
	 {
		return $this->name;
			
	 }
	 function set_fruittype($type)
	 {
		$this->type=$type;
	
	}
	function get_fruittype()
	 {
		 return $this->type;
	 }
		
 }
 
 $fruit= new fruit();
 $fruit->set_fruitname('Banana');
 $fruit->set_fruittype('Yellow');
 echo "FruitName: ".$fruit->get_fruitname();
 echo "<br>";
 echo "FruitType : ".$fruit->get_fruittype();
 ?>