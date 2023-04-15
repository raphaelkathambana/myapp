<nav class="navbarr">
    <div class="navbarr-header">
        <button class="toggle-icon">
            <div class="icon"></div>
        </button>
        <a href="/">{{ config('app.name', "myApp") }}</a>
    </div>
    <div class="navbarr-items">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/posts">Blog</a></li>
        </ul>
        <ul>
            <li><a href="/posts/create">Username</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            <li><a href="/posts/create">New Post</a></li>
        </ul>
    </div>
</nav>
