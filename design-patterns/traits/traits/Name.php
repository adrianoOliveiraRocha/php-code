<?php

trait Name {

    function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }

}