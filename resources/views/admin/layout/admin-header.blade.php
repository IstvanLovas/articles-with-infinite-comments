<nav id="admin-nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/admin">CQC Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        @if(count($notifications) > 0)
        <li class="dropdown">
            <a  href="#"
                class="dropdown-toggle"
                data-toggle="dropdown"
            >
                <span class="bell-wrapper">
                    <span class="tota-number-of-notifications">
                        <span class="number">{{ count($notifications) }}</span>
                    </span>
                    <i class="fa fa-bell" aria-hidden="true"></i>
                </span> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu message-dropdown notifications">
                @foreach($notifications as $notification)
                    <li class="message-preview">
                        <a href="{{ route('comment-show', $notification->comment_id) }}">
                            <div class="media">
                                <span class="pull-left">
                                    <i class="fa fa-comments" aria-hidden="true"></i>
                                </span>
                                <div>
                                    <h5 class="media-heading"><strong>{{ $notification->title }}</strong>
                                    <small>on </small><strong>{{ \App\Article::find($notification->article_id)->title }}</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> {{ $notification->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
                @if(count($notifications) > 1)
                <li>
                    <a href="{{ route('comment-index') }}">View All</a>
                </li>
                @endif
            </ul>
        </li>
        @endif
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="/">
                        <i class="fa fa-home" aria-hidden="true"></i> Homepage
                    </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-user" aria-hidden="true"></i> Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope" aria-hidden="true"></i> Inbox</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ url('/logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        <i class="fa fa-fw fa-power-off" aria-hidden="true"></i> Logout
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    </ul>
    @include('admin.layout.sidebar')
    <!-- /.navbar-collapse -->
</nav>