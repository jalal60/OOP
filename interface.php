<?php
	interface Animal{
	  public function makeSound();
	}
	class Dog implements Animal{
	  public function makeSound()
	  {
	    echo "Dog Barking\n";
	  }
	}
	class Cat implements Animal{
	  public function makeSound(){
	    echo "Cat Mew mew";
	  }
	}
	
	$dog=new Dog();
	$cat=new Cat();
	$dog->makeSound();
	$cat->makeSound();
