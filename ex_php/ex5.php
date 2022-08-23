<?php
class fruit
{
	public $fruitname;
	public $fruittype;
	
	function __construct($fruitname, $fruittype)
	{
		$this->fruitname = $fruitname; 
		$this->fruittype = $fruittype; 
	}
	function getfruitname()
	{
		return $this->fruitname;
	}
	function getfruittype()
	{
		return $this->fruittype;
	}
}
$fruits = new fruit("Banana", "Yellow");
echo "FruitName : ".$fruits->getfruitname();
echo "<br><br>";
echo "FruitType : ".$fruits->getfruittype();
?>