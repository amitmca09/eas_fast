<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

global $i;
$i = 0;

$factory->define(\App\Models\Field::class, function (Faker $faker) use ($i) {
    $names = ['Men','Women','Kids','Store','Bags','Shoes'];
    return [
        'name'=>$names[$i++],
        'description'=>$faker->sentences(5,true),
    ];
});
