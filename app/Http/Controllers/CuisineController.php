<?php

namespace App\Http\Controllers;

use App\Models\Cuisine;
use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class CuisineController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $cuisine = Cuisine::all();

        $id = $request->input('cuisineId');

        $dish = Dish::where('cuisines_id', $id)->inRandomOrder()->limit(1)->first();

        $user = Auth::user();

        // kolla hur vi returnar till både dashboard och index.

        return view('dashboard', [
            'dish' => $dish, 'cuisine' => $cuisine, 'user' => $user
        ]);

        return back()->withErrors('Whoops! There are no recipes here yet. Maybe add one?');
    }
}
