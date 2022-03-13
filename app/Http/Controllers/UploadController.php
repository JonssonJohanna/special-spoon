<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dish;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $this->validate($request, []);

        $dish = new dish();
        $dish->dish = $request->input('dish');
        $dish->cuisines_id = $request->input('cuisines_id');
        $dish->diet = $request->input('diet');
        $dish->save();


        return back();
    }
}
