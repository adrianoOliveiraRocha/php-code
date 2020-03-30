<?php

interface InterfaceAnimal {
	public function eat(string $food) : bool;
	public function talk(bool $shout) : string;
}