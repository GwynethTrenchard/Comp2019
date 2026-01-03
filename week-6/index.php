<?php

echo "/////////////////// Functions /////////////////// <br>";

function sayHello(){//without params
    echo "Hello World!";
}

function sayHelloName($name){//with params
    echo "Hello {$name}";
}

function addTwoNums($a, $b){// with number params

    return $a + $b;
}

sayHello();
echo "<br>";
sayHelloName("Joe");
echo "<br>";
echo "<br>";
echo addTwoNums(2,5);
echo "<br>";
echo "<br>";




echo "/////////////////// Scopes /////////////////// <br>";

$num1 = 5;//innitialized the variable
$array1 = [1,2,55,66];

function myTest(){

    global $num1;//need to delcare global so it can be used in this function
    global $array1;
    $num1 = "sixteen";//take care as you can re-assign global varaibles anywhere in the code
    $num2 = 10;
    echo "Varaible num1 {$num1} and variable num2 {$num2}";
    echo "<br>";
    echo "Array 1 index 0 is {$array1[0]}";
}

myTest();

echo "<br>";
echo "This is num 1 outside the reassigned scope: {$num1} <br>";
echo "<br>";

function forLoopExample(){

    for($ii = 0; $ii < 5; $ii++){
        echo "Variable ii is now {$ii} <br>";
    }
    echo "Outside the for loop {$ii} <br>";
}

forLoopExample();
// global $ii;
// echo "outside the function {$ii} <br>";// won't work outside the function
echo "<br>";

function accumulator(){
    static $accu = 0;
    // static makes it so the variables value exist outside of scope, 
    // so the next time you call the function it will keep the old value
    // bassicly the value will not reset when function is called
    echo "{$accu} <br>";
    $accu++;
}

accumulator();
accumulator();
accumulator();
accumulator();
accumulator();
accumulator();


echo "<br>";

echo "/////////////////// Classes /////////////////// <br>";

class Car{
    //proporties
    protected $color;
    protected $model; 

    //constructor
    public function __construct($color, $model){

        $this->color = $color;
        $this->model = $model;

    }
    public function getColor(){
        return $this->color;
    }
    public function getModle(){
        return $this->model;
    }

    public function setColor($color){
       $this->color = $color;;
    }
    public function setModle($model){
        $this->model = $model;
    }

    public function message(){
        return "congrats on getting the car, its colour is {$this->color} and its model is {$this->model}. <br>";

    }
}

$myCar = new Car("red", "volvo");
print_r($myCar);
$carColor = $myCar->getColor();

echo "<br>";
//echo "The colour of my car is {$myCar->color} <br>";//works but you shouldn't
echo "The colour of my car is {$carColor} <br>";
$myCar->setColor("Black");
$carColor = $myCar->getColor();
echo "the color of the car is now {$carColor} <br>";
echo "the color is {$myCar->getColor()} <br>";
echo $myCar->message();
echo "<br>";



echo "/////////////////// inharitance /////////////////// <br>";

class SportsCar extends Car{
    private $numDoors;

    //constructor
    private function _construct($color, $model, $numDoors){
        parent::_construct($color, $model);

        $this->numDoors = $numDoors;
    }

    //getter
    public function getNumDoors(){
        return $this->numDoors;
    }
    //setter
    public function setNumDoors($numDoors){
        $this->numDoors = $numDoors;
    }


    // public function message(){
    //     return "this is a brand new {$this->getModel()} new sports car that is in {$this->getColor()}, and it has {$this->NumDoors} doors. <br>";

    // }
}

$mySportsCar = new SportsCar("Pink", "Ferrari", 2);
print_r($mySportsCar);
echo "<br>";
echo $mySportsCar->getColor();
echo $mySportsCar->message();
echo "<br>";
echo "<br>";


echo "/////////////////// polymorphisem /////////////////// <br>";

Class Animal{
    public function makeSound(){
        return "some sound";
    }
}

Class Dog extends Animal{

    public function makeSound(){

        return "Woof!";

    }

}

Class Cat extends Animal{
    public function makeSound(){
        return "meow!";
    }
}

$someAnimal = new Animal();
$newCat = new Cat();
$newDog = new Dog();

print_r($someAnimal);
echo "<br>";
echo $someAnimal->makeSound();
echo "<br>";
echo "The Dog says {$newDog->makeSound()} and the cat says {$newCat->makeSound()}";

echo "<br>";
echo "<br>";
echo "/////////////////// interface /////////////////// <br>";

//same as a class but for the parent you just write interface

interface Vegatable{
    public function color(); //interface functions canno have a body
    public function size();

}

class TomatoInterface implements Vegatable{
    public function color(){
        return "red";
    }
    public function size(){
        return "medium";
    }
}

echo "<br>";
$tomato = new TomatoInterface();
echo "A tomato is the colour {$tomato->color()} and has a size of {$tomato->size()}.";
echo "<br>";
echo "<br>";

echo "/////////////////// traits /////////////////// <br>";

//traits are public functions that can be used insdie of classes

trait message1{
    public function msg1(){
        return "OOP is fun!";
    }
}

trait message2{
    public function msg2(){
        return "OOP reduses code duplication";
    }
}

class Welcome1{
    use message1;
}

class Welcome2{
    use message1, message2;
}

$welcome1 = new Welcome1();
echo "<br>";

echo $welcome1->msg1();


$welcome2 = new Welcome2();
echo "<br>";

echo "{$welcome2->msg1()} and {$welcome2->msg2()}";

echo "<br>";
echo "<br>";

echo "/////////////////// abstract classes /////////////////// <br>";

abstract class Fruit{
    private $color;
    abstract public function eat();
    public function getColor(){
        return $this->color;
    }
     public function setColor($color){
       $this->color = $color;
    }

}

class Banana extends Fruit{
    public function eat(){
        return "Banana's are yummy!";
    }
}


$bannana = new Banana();
$bannana->setColor("yellow");
echo "The banna's colour is {$bannana->getColor()} and when you eat it you say {$bannana->eat()}";



// $fruit = new Fruit();
// $fruit->setColor("yellow");
// echo "<br>";
// echo "Bannana's are {$fruit->getColor()}";



?>