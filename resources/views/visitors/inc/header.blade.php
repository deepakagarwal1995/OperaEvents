 <div class="page-wrapper">
    <!-- Preloader -->

 	<!-- Header span -->
    <!-- Header Span -->
    <span class="header-span"></span>
    <!-- Main Header-->
    <header class="main-header header-style-two">
        <div class="main-box">
            <div class="auto-container clearfix">
                <div class="logo-box">
                    <div class="logo"><a href="{{ config('app.url') }}"><img src="{{ config('app.url') }}/assets/images/Opera-Events-Logo.png" alt="" title=""></a></div>
                </div>
                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="navbar-header">
                            <!-- Togg le Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li><a href="{{ route('category') }}">Category</a></li>
                                <li><a href="{{ route('terms') }}">Terms and Conditions</a></li>

                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    <!-- Outer box -->
                    <div class="outer-box">
                        <!--Search Box-->

                        <!-- Button Box -->
                        <div class="btn-box">
                            <a href="{{ route('registration') }}" class="theme-btn btn-style-one"><span class="btn-title">Register Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ config('app.url') }}/assets/index.html"><img src="{{ config('app.url') }}/assets/images/logo-2.png" alt="" title=""></a></div>
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
