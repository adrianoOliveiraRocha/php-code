<?php

class Cat extends Animal 
{
    use Name;

    public function walk()
    {
        return "walking with tail wagging...";
    }
    
}