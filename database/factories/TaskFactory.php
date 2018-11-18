<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'project_id' => 2,
        'body' => 'This will be completed to',
        'completed' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
