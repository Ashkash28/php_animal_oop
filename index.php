<?php

class Animal 
{
	public $name;
	public $hp;

	public function __construct($name_p)
	{
		$this->name = $name_p;
		$this->hp = 100;
	}

	function walk()
	{
		$this->hp--;

	}

	function run()
	{
		$this->hp -= 5;

	}

	public function display_hp()
	{
		echo '----------------------';
		echo '<br>';
		echo $this->name;
		echo '<br>';
		echo $this->hp;
		echo '<br>';

	}
}
//---------END OF ANIMAL CLASS CODE---------//

$animal1 = new Animal('animal');
$animal1->walk();
$animal1->walk();
$animal1->walk();
$animal1->run();
$animal1->run();
$animal1->display_hp();

//---------------DOG CLASS------------------//

class Dog extends Animal
{
	public function __construct($name)
	{
		$this->name = $name;
		$this->hp = 150;
	}

	public function pet()
	{
		$this->hp += 5;
	}
}

//---------END OF DOG CLASS CODE-------------//

$dog1 = new Dog('bill');
$dog1->walk();
$dog1->walk();
$dog1->walk();
$dog1->run();
$dog1->run();
$dog1->pet();
$dog1->display_hp();

//-----DRAGON CLASS------------------------//
class Dragon extends Animal
{
	public function __construct($name)
	{
		$this->name = $name;
		$this->hp = 170;
	}

	public function fly()
	{
		$this->hp -= 10;
	}

	public function display_hp() 
	{

		parent::display_hp(); 
			echo "This is a dragon!";
	}
}
//-------END OF DRAGON CLASS CODE--------------//

$dragon1 = new Dragon('Eragon');
$dragon1->walk();
$dragon1->walk();
$dragon1->walk();
$dragon1->run();
$dragon1->run();
$dragon1->fly();
$dragon1->fly();
$dragon1->display_hp();


//--------TEST CODE--------------------//
$animal2 = new Animal('bob');
$animal2->fly();
//------END OF TEST-----------------//



?>