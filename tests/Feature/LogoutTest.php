<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    use RefreshDatabase;

    public function test_logout()
    {

        $user = new User();
        $user->name = 'Johanna';
        $user->email = 'j@hotmail.com';
        $user->password = Hash::make('123');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'j@hotmail.com',
                'password' => '123',
            ]);

        $response = Auth::logout();
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
