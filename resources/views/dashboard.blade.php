<p>Hello, {{ $user->name }}! Do you want to <a href="logout">logout</a>?</p>

@include('errors')

<?php

use Illuminate\Support\Facades\DB;

$cuisines = DB::select('select * from cuisines');
?>

<h1>Randomize a recipe</h1>

<form action="cuisine" method="post">
    <label for="cuisine">Cuisines</label>
    <select id="cuisine" name="cuisine">
        @foreach ($cuisines as $cuisine)
        <option value="{{ $cuisine->cuisine }}">{{ $cuisine->cuisine }}</option>
        @endforeach
    </select>
    <button type="submit">Randomize</button>
</form>

<img src="./images/plate.webp" alt="Plate">
