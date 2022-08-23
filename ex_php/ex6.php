<?php
class car
{
	public $carname;
	public $cartype;
	
	function __construct($carname, $cartype)
	{
		$this->carname = $carname;
		$this->cartype = $cartype;
	}
	function getcarname()
	{
		return $this->carname;
	}
	function getcartype()
	{
		return $this->cartype;
	}
}

$cars = new car("BMW", "SUV");
echo "CarName : ".$cars->getcarname();
echo "<br><br>";
echo "CarType : ".$cars->getcartype();
?>

