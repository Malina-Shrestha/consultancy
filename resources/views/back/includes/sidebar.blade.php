<div class="sidebar" data-color="purple" data-image="{{ asset('public/img/sidebar-5.jpg') }}">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ asset('/') }}" class="simple-text">
                    Consultancy
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{ route('admin.home')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.profile.edit')}}">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('blogs.index') }}">
                        <i class="pe-7s-display1"></i>
                        <p>Blogs</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('contactqueries.index') }}">
                        <i class="pe-7s-comment"></i>
                        <p>Contact</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admins.index') }}">
                        <i class="pe-7s-add-user"></i>
                        <p>User</p>
                    </a>
                </li>
                <li>
                    <a href="subscribe.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Subscribers</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.logout') }}">
                        <i class="pe-7s-angle-left"></i>
                        <p>Logout</p>
                    </a> 
                </li>
            </ul>
        </div>
    </div>