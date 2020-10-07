<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            @include('blog.parts.nav-bar.__left-navbar-menu')
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('resume') }}">{{ __('Resume') }}</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            @include('blog.parts.nav-bar.__guest')
            @include('blog.parts.nav-bar.__search-nav')
        </div>
    </div>
</nav>
