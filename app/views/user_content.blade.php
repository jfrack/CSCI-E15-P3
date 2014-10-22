<?php
// require the Faker autoloader
require_once '../vendor/fzaninotto/faker/src/autoload.php';


// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

// generate data by accessing properties
for ($i=0; $i<$usrCnt; $i++) {
	echo "<html><h4>" . $faker->name . "</h4></html>";

	if (isset($_POST['usrid_cb'])) {
		echo "<html><strong>User ID:</strong> " . $faker->userName . "<br></html>";
	}

	if (isset($_POST['pswd_cb'])) {
		echo "<html><strong>Password:</strong> " . $faker->password . "<br></html>";
	}

	if (isset($_POST['email_cb'])) {
		echo "<html><strong>Email:</strong> " . $faker->email . "<br></html>";
	}

	if (isset($_POST['birth_cb'])) {
		echo "<html><strong>Birthdate:</strong> " . $faker->dateTime()->format('m-d-Y') . "<br></html>";
	}

	if (isset($_POST['profile_cb'])) {
		echo "<html><strong>Profile:</strong> <i>" . $faker->text . "</i><br></html>";
	}

	if (isset($_POST['secimg_cb'])) {
		// images provided by http://lorempixel.com
		$imgUrl = $faker->imageUrl($width = 160, $height = 120);
		echo "<img src='$imgUrl' alt='Security Image' />" . "<html><br></html>";
	}

	echo "<html><br></html>";
}