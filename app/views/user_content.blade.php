<?php
// require the Faker autoloader
require_once '../vendor/fzaninotto/faker/src/autoload.php';


// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

// generate data by accessing properties
for ($i=0; $i<5; $i++) {
	echo "Name: " . $faker->name . "<html><br></html>";
	echo "Birthdate: " . $faker->dateTime()->format('m-d-Y') . "<html><br></html>";
	echo "Profile: " . $faker->text . "<html><br><br></html>";
}
?>