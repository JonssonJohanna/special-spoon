<?php

namespace Database\Seeders;

use App\Models\Cuisine;
use App\Models\Dish;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $cuisines = [
            new Cuisine(['cuisine' => 'Sweden']),
            new Cuisine(['cuisine' => 'Italy']),
            new Cuisine(['cuisine' => 'France']),
            new Cuisine(['cuisine' => 'India']),
            new Cuisine(['cuisine' => 'Mexico']),
            new Cuisine(['cuisine' => 'Spain']),
        ];

        foreach ($cuisines as $cuisine) {
            $cuisine->save();
        }

        $dishes = [
            new Dish([
                'dish' => 'Vegan meatballs with mashed potatoes and lingonberries',
                'cuisines_id' => 1,
                'diet' => 'Vegan'
            ]),
            new Dish([
                'dish' => 'potato hotchpotch',
                'cuisines_id' => 1,
                'diet' => 'Vegan'
            ]),
            new Dish([
                'dish' => 'Margarita pizza',
                'cuisines_id' => 2,
                'diet' => 'Vegeterian'
            ]),
            new Dish([
                'dish' => 'Cacio e pepe',
                'cuisines_id' => 2,
                'diet' => 'Vegeterian'
            ]),
            new Dish([
                'dish' => 'Vegan coq au vin',
                'cuisines_id' => 3,
                'diet' => 'Vegan'
            ]),
            new Dish([
                'dish' => 'Soupe à l’oignon (leek soup)',
                'cuisines_id' => 3,
                'diet' => 'Vegan'
            ]),
            new Dish([
                'dish' => 'Chana masala',
                'cuisines_id' => 4,
                'diet' => 'Vegan'
            ]),
            new Dish([
                'dish' => 'Palak Paneer',
                'cuisines_id' => 4,
                'diet' => 'Vegeterian'
            ]),
            new Dish([
                'dish' => 'Tacos',
                'cuisines_id' => 5,
                'diet' => 'Vegeterian'
            ]),
            new Dish([
                'dish' => 'Burrito',
                'cuisines_id' => 5,
                'diet' => 'Vegeterian'
            ]),
            new Dish([
                'dish' => 'Paella',
                'cuisines_id' => 6,
                'diet' => 'Vegan'
            ]),
            new Dish([
                'dish' => 'Tapas',
                'cuisines_id' => 6,
                'diet' => 'Vegeterian'
            ]),


        ];
        foreach ($dishes as $dish) {
            $dish->save();
        }
    }
}
$user = new User(['name' => 'Henrik', 'email' => 'henrik@yrgo.se', 'password' => Hash::make('123')]);
$user->save();
