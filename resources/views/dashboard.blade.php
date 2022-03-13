@include('header')

<p>Hello, {{ $user->name }}! Do you want to <a href="logout">logout</a>?</p>

@include('errors')

<h2>Randomize a recipe</h2>
@if($cuisines)
<form action="{{ route('cuisine')}}" method="post">
    @csrf
    <label for="cuisine">Cuisines</label>
    <select id="cuisine" name="cuisineId">
        @foreach ($cuisines as $cuisine)
        <option value="{{ $cuisine->id }}">{{ $cuisine->cuisine }}</option>
        @endforeach
    </select>
    <button type="submit">Randomize</button>
</form>
@endif
<div>
    <img class="container" src="/images/plate.webp" alt="Plate">
    @if(isset($dish))
    <p class="text">{{ $dish->dish }}</p>
    @endif
</div>
<h2>Upload new dish</h2>
<form action="upload" method="post" id="upload">
    @csrf
    <div>
        <label for="dish">Dish:</label>
        <input type="text" id="dish" name="dish">
    </div>

    <div>
        <label for="cuisines_id">Cuisines</label>
        <select id="cuisines_id" name="cuisines_id">
            @foreach ($cuisines as $cuisine)
            <option value="{{ $cuisine->id }}">{{ $cuisine->cuisine }}</option>
            @endforeach
        </select>
    </div>

    <!-- <div>
        <label for="cuisines_id">Cuisine:</label>
        <input type="text" id="cuisines_id" name="cuisines_id">
    </div> -->

    <div>
        <label for="diet">Vegeterian or vegan:</label>
        <input type="text" id="diet" name="diet">
    </div>


    <div>
        <button type="submit">Submit</button>
    </div>

</form>
