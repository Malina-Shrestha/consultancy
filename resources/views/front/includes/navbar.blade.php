<header>
        <nav id="navigation4" class="container navigation">
            <div class="nav-header">
                <a class="nav-brand" href="index.html"> <img src="{{asset('public/img/logos/logo.png') }}" class="main-logo" alt="logo" id="main_logo"> </a>
                <div class="nav-toggle"></div>
            </div>
            <div class="nav-menus-wrapper">
                <ul class="nav-menu align-to-right">
                    <li><a href="{{ asset('/') }}">Home</a>
                    </li>
                    <li><a href="{{ route('front.about') }}">About</a>
                    </li>
                    <li><a href="#">Services</a>
                        <ul class="nav-dropdown">
                            <li><a href="#">Student Screening</a></li>
                            <li><a href="#">University Application</a></li>
                            <li><a href="#">Document Guidance</a></li>
                            <li><a href="#">Interview Assistance</a></li>
                            <li><a href="#">Scholarship Assistance</a></li>
                            <li><a href="#">Counseling</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Study Abroad</a>
                        <ul class="nav-dropdown">
                            <li><a href="#">Australia</a></li>
                            <li><a href="#">USA</a></li>
                            <li><a href="#">Canada</a></li>
                            <li><a href="#">New Zealand</a></li>
                            <li><a href="#">Germany</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Test Preparation</a>
                        <ul class="nav-dropdown">
                            <li><a href="#">IELTS</a></li>
                            <li><a href="#">TOEFL</a></li>
                            <li><a href="#">GRE</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('front.blog') }}">Blog</a></li>

                <li><a href="{{ route('front.contact') }}">Contact</a></li>

                    <li><a href="faq.html" class="login d-block d-lg-none">FAQ's</a></li>

                    <li><a href="{{route('login') }}" class="login d-block d-lg-none">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>
