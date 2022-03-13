<!-- uploading new dishes -->
<h2>Upload new dish</h2>
<form action="upload" method="post">
    @csrf
    <div>
        <label for="dish">Dish:</label>
        <input type="text" id="dish" name="dish">
    </div>

    <div>
        <label for="cuisines_id">Cuisine:</label>
        <input type="text" id="cuisines_id" name="cuisines_id">
    </div>

    <div>
        <label for="diet">Vegeterian or vegan:</label>
        <input type="text" id="diet" name="diet">
    </div>


    <div>
        <button type="submit">Submit</button>
    </div>

</form>
