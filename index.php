<?php 

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('pt_BR');

echo "<p>{$faker->name()}</p>";
echo "<p>{$faker->word()}</p>";