<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_view_register_form()
    {
        $response = $this->get('register');
        $response->assertSeeText('Email');
        $response->assertStatus(200);
    }
    public function test_register_user()
    {
        $user = new User();

        $user->name = 'Johanna';
        $user->email = 'j@hotmail.com';
        $user->passowrd = '123';

        $register = $this
            ->followingRedirects()
            ->post('register', [
                'name' => "$user->name",
                'email' => "$user->email",
                'password' => "$user->password",
            ]);
        $register->assertSuccessful();
    }
}
