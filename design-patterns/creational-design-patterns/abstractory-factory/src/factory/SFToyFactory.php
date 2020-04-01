<?php

namespace Factory;

class SFToyFactory implements ToyFactory
{
    private $location = "San Francisco";
    
    public function makeMaze()
    {
        return new \Toys\SFMazeToy();
    }
    
    public function makePuzlle()
    {
        return new \Toys\SFPuzzleToy();
    }
    
}
