<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $cuisine = $request->only(['cuisine']);

        return view('index', [
            $cuisine => 'cuisine',
        ]);
    }
}
