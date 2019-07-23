<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Permission;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Permission::class, function (Faker $faker) {
    return [
//        'name'=>$faker->name,
//        'display_name'=>$faker->sentence(),
//        'description'=>$faker->paragraph(rand(2,10),true),
    ];
});
