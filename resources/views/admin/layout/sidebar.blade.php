<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="active">
            <a href="{{ route('dashboard') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#pages"><i class="fa fa-fw fa-file"></i> Pages <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="pages" class="collapse">
                <li>
                    <a href="{{ route('edit-welcome') }}">Welcome</a>
                </li>
                <li>
                    <a href="{{ route('edit-get-the-facts') }}">Get the facts</a>
                </li>
                <li>
                    <a href="{{ route('edit-meet-those-most-impacted') }}">Most impacted</a>
                </li>
                <li>
                    {{-- <a href="{{ route('edit-articles') }}">News</a> --}}
                </li>
            </ul>
        </li>
        <li>
            <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
        </li>
        <li>
            <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
        </li>
        <li>
            <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
        </li>
    </ul>
</div>