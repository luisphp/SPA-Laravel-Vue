<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
	$title = $faker->sentence;
    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'excerpt' => $faker->text(100),
        'body' => $faker->text(190)
     ];
});
