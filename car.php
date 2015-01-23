<?php


class auto
{
	public $doors = 4;
	public $color;

	public function honk()
	{
		return 'Beep beep!';
	}
	public function revEngine()
	{
		return 'Vroom vroom!';
	}

	public function lockDoors()
	{
		for (i=0, $i < $this->doors; i++)
		{
			echo "click!\n";
		}
	}
}

class sedan extends auto
{
	public function __construct($color)
	{
		this->doors = 4;
		this-> color = $color;

	}
	public function closeTrunk()
	{
		return "Ker=clunk";
	}

}
class coupe extends auto
{
	public function __construct$color)
	{
		this->doors = 2;
		this->color = $color;	
	}
}

$camry = new sedan('Gold');

echo $camry ->honk() . PHP_EOL;
echo $camry->closeTrunk() . PHP_EOL;
$camry->lockDoors();