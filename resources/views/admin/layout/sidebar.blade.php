<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="{{ setActiveNavigation('admin') }}">
            <a href="{{ route('dashboard') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#pages">
            <i class="fa fa-file" aria-hidden="true"></i> Pages <i class="fa fa-fw fa-caret-down" aria-hidden="true"></i></a>
            <ul id="pages" class="collapse">
                <li class="{{ setActiveNavigation('admin/our-campaign/edit') }}">
                    <a href="{{ route('edit-our-campaign') }}">Our Campaign</a>
                </li>
                <li class="{{ setActiveNavigation('admin/the-facts/edit') }}">
                    <a href="{{ route('edit-the-facts') }}">The facts</a>
                </li>
                <li class="{{ setActiveNavigation('admin/meet-those-affected/edit') }}">
                    <a href="{{ route('edit-meet-those-affected') }}">Most affected</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#case-studies">
                <i class="fa fa-file" aria-hidden="true"></i> Case Studies <i class="fa fa-fw fa-caret-down" aria-hidden="true"></i></a>
            <ul id="case-studies" class="collapse">
                <li class="{{ setActiveNavigation('admin/case-study') }}">
                    <a href="{{ route('case-study-index') }}">All</a>
                </li>
                <li class="{{ setActiveNavigation('admin/case-study/create') }}">
                    <a href="{{ route('case-study-create') }}">Add new</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#articles">
                <i class="fa fa-file" aria-hidden="true"></i> Articles <i class="fa fa-fw fa-caret-down" aria-hidden="true"></i></a>
            <ul id="articles" class="collapse">
                <li class="{{ setActiveNavigation('admin/articles') }}">
                    <a href="{{ route('article-index') }}">All</a>
                </li>
                <li class="{{ setActiveNavigation('admin/articles/create') }}">
                    <a href="{{ route('article-create') }}">Add new</a>
                </li>
            </ul>
        </li>
    </ul>
</div>