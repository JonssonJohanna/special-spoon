<?php

namespace Tests\Feature;

use App\Models\Cuisine;
use App\Models\Dish;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RandomTest extends TestCase
{
    use RefreshDatabase;

    public function test_no_random_dish()
    {
        $response = $this
            ->followingRedirects()
            ->post('cuisine', [
                'dish' => '',
            ]);

        $response->assertSeeText('Whoops! There are no recipes here yet. Maybe add one?');
    }
    public function test_dish_exists()
    {
        $user = new User();
        $user->name = 'Johanna';
        $user->email = 'j@hotmail.com';
        $user->password = Hash::make('123');
        $user->save();

        $dish = new Dish();
        $dish->dish = 'lijehe';
        $dish->cuisines_id = 4;
        $dish->diet = 'Vegan';
        $dish->save();

        $this->assertDatabaseHas('dishes', ['cuisines_id' => 4]);

        $response = $this
            ->followingRedirects()
            ->actingAs($user)
            ->post('cuisine', [
                'cuisineId' => 4,
            ]);

        $response->assertSeeText($dish->dish);
    }
}
