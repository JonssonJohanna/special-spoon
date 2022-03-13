<?php

namespace App\Http\Controllers;

use App\Models\Cuisine;
use App\Models\Dish;
use Illuminate\Http\Request;
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


        // kolla hur vi returnar till både dashboard och index.

        return view('index', [
            'dish' => $dish, 'cuisine' => $cuisine
        ]);


        return back()->withErrors('Whoops! There are no recipes here yet. Maybe add one?');
    }
}
