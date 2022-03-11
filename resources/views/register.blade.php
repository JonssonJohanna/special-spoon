@include('header');


<h2>Register here</h2>
<form action="register" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" required><br>
    <label for="email">Email</label>
    <input type="text" name="email" required><br>
    <label for="password">Password</label>
    <input type="password" name="password" required><br><br>
    <input type="submit" name="submit" value="Register" class="registerButton">

</form>
