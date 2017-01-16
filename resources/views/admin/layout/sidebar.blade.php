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
                    <a href="{{ route('edit-our-campaign') }}">Our Campaign</a>
                </li>
                <li>
                    <a href="{{ route('edit-the-facts') }}">The facts</a>
                </li>
                <li>
                    <a href="{{ route('edit-meet-those-affected') }}">Most affected</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#case-studies"><i class="fa fa-fw fa-file"></i> Case Studies <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="case-studies" class="collapse">
                <li>
                    <a href="{{ route('case-studies-index') }}">All</a>
                </li>
                <li>
                    <a href="{{ route('case-studies-create') }}">Add new</a>
                </li>
            </ul>
        </li>
    </ul>
</div>