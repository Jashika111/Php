<?php
//simple abstract in php(inheritance)
abstract class Animal{      //no object for abstract class
    abstract public function makeSound();  //abstract method (no body)

    function eat(){
        echo"Eating Food<br>";
    }
}   
class Dog extends Animal{
    function makeSound(){
        echo"woof woof<br>";

    }
}
class Cat extends Animal{
    function makeSound(){
        echo"Meow";
    }
}
$dog = new Dog();
$dog->makeSound();
$dog->eat();

$cat = new Cat();
$cat -> makesound();
$cat -> eat();
?>