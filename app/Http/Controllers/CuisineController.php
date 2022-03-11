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

        // select * from dishes where cuisines_id = $request
        // om det existerar, gör nedan. annars skicka error att listan är tom, lägg till ett recept
        // ta ut ett random värde från den arrayen/objektet och skicka tillbaka

        $id = $request->input('cuisineId');




        // vi får bara en tom array->kan inte hämta dish->kanske något med models OneHasMany
        if ($dish = Dish::where('cuisines_id', $id)->inRandomOrder()->limit(1)->first()) {


            // kolla hur vi returnar till både dashboard och index.

            return view('index', [
                'dish' => $dish
            ]);
        }

        return back()->withErrors('Whoops! There are no recipes here yet. Maybe add one?');
    }
}
