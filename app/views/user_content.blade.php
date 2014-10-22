<?php
// require the Faker autoloader
require_once '../vendor/fzaninotto/faker/src/autoload.php';


// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

// generate data by accessing properties
for ($i=0; $i<$usrCnt; $i++) {
	echo "Name: " . $faker->name . "<html><br></html>";

	if ($usrid_cb) {
		echo "User ID: " . $faker->userName . "<html><br></html>";
	}

	if ($pswd_cb) {
		echo "Password: " . $faker->password . "<html><br></html>";
	}

	if ($email_cb) {
		echo "Email: " . $faker->email . "<html><br></html>";
	}

	if ($birth_cb) {
		echo "Birthdate: " . $faker->dateTime()->format('m-d-Y') . "<html><br></html>";
	}

	if ($profile_cb) {
		echo "Profile: " . $faker->text . "<html><br></html>";
	}

	if ($secimg_cb) {
		// images provided by http://lorempixel.com
		$imgUrl = $faker->imageUrl($width = 160, $height = 120);
		echo "<img src='$imgUrl' alt='Security Image' />" . "<html><br></html>";
	}

	echo "<html><br></html>";
}