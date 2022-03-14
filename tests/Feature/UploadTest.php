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

    // public function test_view_dish_form()
    // {
    //     $user = new User();
    //     $user->name = 'Johanna';
    //     $user->email = 'j@hotmail.com';
    //     $user->password = Hash::make('123');
    //     $user->save();

    //     $dish = Dish::factory()->create();

    //     $response = $this
    //         ->followingRedirects()->actingAs($user)->post('/upload', [
    //             'dish' => "lijehe",
    //             'cuisines_id' => 148,
    //             'diet' => "Vegan"
    //         ]);

    //     $response->assertStatus(200);
    // }
}
