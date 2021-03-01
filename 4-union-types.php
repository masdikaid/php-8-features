<?php
// you can use multiple type with "|"
function newFunc (int | string $nama, bool | int $nomor) : int | array
{
    echo "run";
    return false;
}
