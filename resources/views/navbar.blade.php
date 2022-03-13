<nav>
    <div>
        <ul>
            <li><a href="/dashboard">Home</a></li>
            @if (Auth::guest())
            <li><a href="register">Register here</a></li>
            @endif
            @if (Auth::user())
            <li><a href="#upload">Upload new dish</a></li>
            @endif
        </ul>
    </div>
</nav>
