<?php


class Address
{
    public function __construct (protected string $street, protected string $city)
    {

    }
}

// old way to check null
function checkNullOlder (?Address $address)
{
    if ($address != null) {
        return $address->street;
    }
    return null;
}


// php 8 way
function checkNullNewer (?Address $address)
{
    return $address?->street;
}