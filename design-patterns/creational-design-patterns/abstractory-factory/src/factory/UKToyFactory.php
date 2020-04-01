<?php

namespace Factory;

class UKToyFactory implements ToyFactory
{
    private $location = "United Kingdom";
    
    public function makeMaze()
    {
        return new \Toys\UKMazeToy();
    }
    
    public function makePuzlle()
    {
        return new \Toys\UKPuzzleToy();
    }
}
