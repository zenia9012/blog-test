<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="{{ route('posts.index') }}">{{ env('APP_NAME') }}</a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('posts.index') }}">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
