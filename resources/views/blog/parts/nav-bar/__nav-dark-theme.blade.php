<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name.blog', 'Блог') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
        @include('blog.parts.nav-bar.__left-navbar-menu')

        <!-- Right Side Of Navbar -->
            @include('blog.parts.nav-bar.__search-nav')
            @include('blog.parts.nav-bar.__guest')



        </div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('resume') }}">{{ __('Resume') }}</a>
            </li>
        </ul>
    </div>

</nav>

