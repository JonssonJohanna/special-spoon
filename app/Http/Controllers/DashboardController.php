<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Cuisine;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();
        $cuisines = Cuisine::all();

        return view('dashboard', [
            'user' => $user, 'cuisines' => $cuisines
        ]);
    }
}
