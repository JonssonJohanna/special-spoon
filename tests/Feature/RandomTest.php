<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RandomTest extends TestCase
{
    // public function test_get_random_dish()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);



    //     $user = new User();
    //     $user->name = 'Johanna';
    //     $user->email = 'j@hotmail.com';
    //     $user->password = Hash::make('123');
    //     $user->save();

    //     $this
    //         ->actingAs($user)
    //         ->post('cuisine', [
    //             'cuisines_id' => 'Tacos'
    //         ]);

    //     $this->assertDatabaseHas('cuisine', ['cuisines_id' => 'Tacos']);
    // }
}
