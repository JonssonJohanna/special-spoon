## Random recipe

<img src="https://media.giphy.com/media/3ohhwFAPgHdkuwE85G/giphy-downsized.gif">

This is a Laravel project where you log in to contribute to a database of recipes. From there, you can generate random recipes sorted by cuisines aka countries.

This Laravel application includes:

Controllers
Migrations
HTTP Tests (on all routes)
Laravel Mix
Middleware
Models (with relationships)
Routes (with route model binding)
Eloquent
Relationships
Validation
Views (Blade)

https://github.com/JonssonJohanna/special-spoon

Made by [Johanna Jönsson](https://github.com/JonssonJohanna) and [Sofia Rönnkvist](https://github.com/sofiaronnkvist)

## Code review

To come.

Made by Nema Vinkeloe Uuskyla and Linnéa Eriksson

1. It would be nice if you had a seeder so that we could access your database. :)
2. Model favourite is empty.
3. header.blade.php:Row 9, You have no title to the project.
4. dashboard.blade.php: Row 38, You use the same variable name, cuisine->cuisine it's a bit confusing.
5. dashboard.blade.php: Row 43-46, You have code that is commented, do you use this? otherwise you could remove it.
6. header.blade.php: Row 15, You are closing the body in the header.
7. header.blade.php: Row 17, you are closing the html in the header.
8. Where does session('dish') come from?
9. header.blade.php, You're including the header (and subsequently all other code) outside of the body and the html tag.
10. You have a short alt-text (one word) on the index page.
11. You could have used only one if-statement in the navbar.blade and used an else instead of having two.
12. In newdish.blade.php, it is unclear if you're asking the user to submit a name or a number in the cuisines_id input field. The input type is text, but the name of the field is id and it seems like you are asking for an integer.
13. Same thing applies to the input field 'diet' where you ask the user to define whether the dish is vegetarian or vegan. You could have used radio buttons or a list where the user chooses an option instead of having to type it out.
14. In your upload controller, none of the fields are required, which makes it difficult to ensure that the user types in data that is applicable for your program.
15. In your css file, you could have created a variable for the blue colour that you use several times.
16. You don't have a footer - this could be useful for closing your html and body tags, and for including a script if you should want to add one.
17. You have a good and consistent use of labels for your form inputs!
18. In your Controllers, you have some code (for example 'use Illuminate\Support\Facades\Log;') that is unused. You could remove this for cleaner code!
19. You're not using your 'Favorite' model or migration - you could remove this from your code to make it shorter.
20. It's a really fun idea to create a random dish generator based on different quisines, well done! Too bad we couldn't test your application on our devices since we did not have access to your database.
