<header id="main-header">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="cta-buttons">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                Menu <i class="fa fa-angle-down" aria-hidden="true"></i>
                </button>
    
                <a href="/login" class="hidden-sm hidden-md hidden-lg stay-updated">Stay updated</a>
            </div>
    
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
    
                <ul class="nav navbar-nav">
                    <li><a href="/">Our campaign</a></li>
                    <li><a href="/get-the-facts">Get the facts</a></li>
                    <li><a href="/meet-those-most-impacted">Meet those most impacted</a></li>
                    <li><a href="/articles">Get the latest</a></li>
                    <li><a href="/login" class="hidden-xs stay-updated">Stay updated</a></li>
                </ul>
    
               <ul class="nav navbar-nav navbar-right">
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
                    @else
                        <li><a href="/login">Login</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>