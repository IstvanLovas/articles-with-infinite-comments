<ul class="nav navbar-nav">
    <li>
        <a  href="#newsletter-sign-up"
            class="hidden-sm hidden-md hidden-lg text-uppercase brand-yellow-bg"
        >Get involved</a>
    </li>
    <li>
        <a  href="{{ Request::is('/') ? '#home' : '/' }}"
            class="primary-link {{ setActiveNavigation('/') }}"
        >Our campaign</a>
    </li>
    <li>
        <a  href="/the-facts"
            class="primary-link {{ setActiveNavigation('the-facts') }}"
        >The facts</a>
    </li>
    @if(Request::is('the-facts'))
        <li class="secondary-nav hidden-sm hidden-md hidden-lg clearfix">
            @include('partials.navigation.secondary-nav')
        </li>
    @endif
    <li>
        <a  href="/meet-those-affected"
            class="primary-link {{ setActiveNavigation('meet-those-affected') }}"
        >Meet those affected</a>
    </li>
    <li>
        <a  href="/articles"
            class="primary-link {{ setActiveNavigation('articles') }}"
        >Get the latest</a>
    </li>
</ul>

{{-- <ul class="nav navbar-nav navbar-right">
    @if(Auth::check())
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                @if(Auth::user()->hasRole('admin'))
                    <li>
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                @endif
                <li>
                    <a href="{{ url('/logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    @endif
</ul> --}}