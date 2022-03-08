<p>Hello, {{ $user->name }}! Do you want to <a href="logout">logout</a>?</p>

@include('errors')

<form action="tasks" method="post">
    @csrf
    <label for="description">Task</label>
    <input name="description" id="description" type="text" />
    <button type="submit">Create Task</button>
</form>
