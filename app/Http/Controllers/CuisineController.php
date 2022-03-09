<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        // select * from dishes where cuisines_id = $request
        // om det existerar, gör nedan. annars skicka error att listan är tom, lägg till ett recept
        // ta ut ett random värde från den arrayen/objektet och skicka tillbaka
        $id = $request->cuisineId;

        if ($dish = DB::table('dishes')->where('cuisines_id', $id)->random()) {
            return $dish->dish;
            die(var_dump($dish->dish));
        }

        return back()->withErrors('Whoops! There are no recipes here yet. Maybe add one?');
    }
}
