<?php 

// when installed via composer
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('pt_BR');

echo $faker->name();