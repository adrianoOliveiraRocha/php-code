<?php

namespace Toys;

abstract class Toy
{
    abstract public function getSize();
    abstract public function getPictureName(): string;
}
