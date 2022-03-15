<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_view_dashboard()
    {
        $user = new User();
        $user->name = 'Test';
        $user->email = 'test@hotmail.com';
        $user->password = Hash::make('123');
        $user->save();

        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_view_dashboard_guest()
    {

        $response = $this->assertGuest()
            ->get('dashboard');
        $response->assertStatus(302);
    }
}
