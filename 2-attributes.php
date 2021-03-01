<?php

// this feature allows you to 
#[Attribute]
class NotBlank
{

}

Class GuestForm
{
    #[NotBlank]
    public string $name;

    #[NotBlank]
    public string $message;

    public string $phone;

}

function validate(object $object) : void
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach ($properties as $property) {
        BlankValidation($property, $object);
    }
}

function BlankValidation(ReflectionProperty $property, object $object) : void
{
    $attributes = $property->getAttributes(NotBlank::class);
    if (count($attributes) > 0) {
        if (!$property->isInitialized($object)) {
            throw new Exception("Property $property->name is uninitialized");
        }
        if ($property->getValue($object) == null) {
            throw new Exception("Property $property->name is null");
        }
    }
}

$form = new GuestForm();
$form->name = "madias";

validate($form);