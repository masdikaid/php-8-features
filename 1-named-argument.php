<?php

// in php 8 you can custom your order argument with named argument

function printName(string $first, string $last, string $middle = "adi") : void
{
    echo "hello im $first $middle $last\n";
}

printName(last: "setiawan", first: "dika");