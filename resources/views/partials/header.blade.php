<header id="appHeader">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="cta-buttons">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                Menu <i class="fa fa-angle-down" aria-hidden="true"></i>
                </button>

                <a href="{{ url('/login') }}" class="hidden-sm hidden-md hidden-lg stay-updated">Stay updated</a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/about') }}">Our campaign</a></li>
                    <li><a href="{{ url('/facts') }}">Get the facts</a></li>
                    <li><a href="{{ url('/facts') }}">Meet those most impacted</a></li>
                    <li><a href="{{ url('/articles') }}">Get the latest</a></li>
                    <li><a href="{{ url('/login') }}" class="hidden-xs stay-updated">Stay updated</a></li>
                </ul>

                {{-- <ul class="nav navbar-nav navbar-right">
                    
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
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
            </div>
        </div>
    </nav>
</header>