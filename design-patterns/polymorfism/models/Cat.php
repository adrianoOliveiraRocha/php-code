<?php

class Cat extends AbstractAnimal {
	
	public function eat(string $food) : bool 
	{
		if($food === "tuna") {
			return true;
		} else {
			return false;
		}
	}

	public function talk(bool $shout) : string 
	{
		if ($shout === true) {
			return "MEOW ";
		} else {
			return "Meow ";
		}
	}

}
