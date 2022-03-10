@include('errors')

<form action="login" method="post">
    @csrf
    <div>
        <label for="email">Email</label>
        <input name="email" id="email" type="email" />
    </div>
    <div>
        <label for="password">Password</label>
        <input name="password" id="password" type="password" />
    </div>
    <button type="submit">Login</button>
</form>

<?php

use Illuminate\Support\Facades\DB;

$cuisines = DB::select('select * from cuisines');

?>

<h1>Randomize a recipe</h1>

<form action="/cuisine" method="post">
    @csrf
    <label for="cuisine">Cuisines</label>
    <select id="cuisine" name="cuisineId">
        @foreach ($cuisines as $cuisine)
        <option value="{{ $cuisine->id }}">{{ $cuisine->cuisine }}</option>
        @endforeach
    </select>
    <button type="submit">Randomize</button>
</form>


<img src="./images/plate.webp" alt="Plate">
