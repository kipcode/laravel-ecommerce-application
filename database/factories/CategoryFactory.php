<?php

namespace Database\Factories;

/*
use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    protected $model = Category::class;
    public function definition()
    {
        return [
        ];
    }
}
*/

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name'          =>  $faker->name,
        'description'   =>  $faker->realText(100),
        'parent_id'     =>  1,
        'menu'          =>  1,
    ];
});
