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
    public function test_get_random_dish()
    {
        // $response = $this->get('/');

        // $response->assertStatus(200);

        // $user = new User();
        // $user->name = 'Johanna';
        // $user->email = 'j@hotmail.com';
        // $user->password = Hash::make('123');
        // $user->save();

        $dish = new Dish();

        // $this
        //     ->actingAs($user)
        //     ->post('cuisineId', [
        //         'cuisines_id' => '4'
        //     ]);

        // $this->assertDatabaseHas('cuisineId', ['cuisines_id' => '4']);


        $response = $this->post('dashboard', ['cuisineId' => 4]);

        $response->assertRedirect('dashboard')->with('dish', $dish);

        // $response->assertSeeText(session('dish')->dish);
    }
}
