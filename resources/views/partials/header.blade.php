<header id="main-header">
    <nav class="primary-nav">
       <div class="container primary-toggle">
            <div class="logo">
                @include('partials.logo')
            </div>
           
            <menu-button></menu-button>
       </div>

       <div class="container">
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <div class="logo hidden-xs">
                    @include('partials.logo')
                </div>

                @include('partials.navigation.primary-nav')

            </div>
       </div>
    </nav>
    @if(Request::is('the-facts'))
        <nav class="secondary-nav hidden-xs">
            <div class="container">
                @include('partials.navigation.secondary-nav')
            </div>
        </nav>
    @endif
</header>