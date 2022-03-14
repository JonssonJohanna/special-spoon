<?php

namespace Tests\Feature;

use App\Models\Dish;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UploadTest extends TestCase
{
    use RefreshDatabase;

    public function test_view_dish_form()
    {
        // $user = new User();
        // $user->name = 'Johanna';
        // $user->email = 'j@hotmail.com';
        // $user->password = Hash::make('123');
        // $user->save();

        // $dish = new Dish();
        // $dish->dish = 'lijehe';
        // $dish->cuisines_id = 148;
        // $dish->diet = 'Vegan';
        // $dish->save();

        // $response = $this
        //     ->followingRedirects()->actingAs($user)->post('/upload', [
        //         'dish' => $dish
        //     ]);

        // $response->assertStatus(200);
    }
}
