@extends('visitors.layouts.visitors')

@section('content')
    <!-- Banner Meetup -->
    <section class="banner-meetup">
        <div class="bg-pattern" style="background-image: url({{ config('app.url') }}/assets/images/main-slider/9.jpg);"></div>
        <div class="layer-outer">
            <div class="gradient-layer"></div>
        </div>
        <div class="auto-container">
            <div class="content-box">
                {{-- <div class="address"><span class="icon fa fa-map-marker-alt"></span>Pearl Hotel, New York, USA</div> --}}
                <h2> Opera Social <br>Media Awards</h2>
            </div>
            <!-- Countdown -->
            {{-- <div class="countdown clearfix">
                <div class="time-counter"><div class="time-countdown clearfix" data-countdown="2024/08/10"></div></div>
            </div> --}}
            <div class="btn-box">
                <a href="{{ route('registration') }}" class="theme-btn btn-style-one"><span class="btn-title">Registration
                        Open</span></a>
            </div>
        </div>
    </section>
    <!--End Banner Meetup -->
    <!-- About Section -->
    <section class="about-section-two">
        <div class="anim-icons full-width">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon icon-dots wow fadeInleft"></span>
            <span class="icon icon-circle-1 wow zoomIn"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">ABOUT EVENT</span>
                            <h2>HONORING THE BEST OF <br>SOCIAL MEDIA AND DIGITAL</h2>
                            <div class="text">The Opera Social Media Awards recognises and honours the great work
                                performed by individuals on diverse social media platforms.

                                <br>

                                This event provides the opportunity to celebrate your achievements along with your friends
                                and colleagues in the social media industry.
                                <br>
                                Any Australian resident with Indian subcontinent heritage is welcome to apply.
                            </div>
                        </div>

                        <div class="btn-box"><a href="{{ route('registration') }}" class="theme-btn btn-style-three"><span
                                    class="btn-title">Register Now</span></a></div>
                    </div>
                </div>
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure class="image wow fadeIn"><img
                                src="{{ config('app.url') }}/assets/images/istockphoto-1389027560-612x612.jpg"
                                alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->
    <section class="call-to-action" style="background-image: url({{ config('app.url') }}/assets/images/background/11.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="text">Opera Social
                    Media Awards</div>
                <h2>We Are Always at The Forefront <br> of The Business Conference !</h2>
                <div class="btn-box">
                    <a href="{{ route('registration') }}" class="theme-btn btn-style-one"><span class="btn-title">Register
                            Now</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section Three -->

    <!--End Features Section -->
    <!-- Fluid Section One -->

    <!--End schedule Section -->
    <!-- FAQ's Section -->
    <section class="newsletter-section">
        <div class="anim-icons full-width">
            <span class="icon icon-shape-3 wow fadeIn"></span>
            <span class="icon icon-line-1 wow fadeIn"></span>
        </div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <h2>Process & Key Dates</h2>
            </div>
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!--Accordian Box-->
                        <ul class="accordion-box">
                            <!--Block-->
                            <li class="accordion block active-block wow fadeInUp">

                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">Process & KEY DATES <br>
                                            Open Entries- 20th June 2024 <br>
                                            Closing Entries- 1st August
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!--Accordian Box-->
                        <ul class="accordion-box">
                            <!--Block-->
                            <li class="accordion block active-block wow fadeInUp">

                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">Online Voting <br>
                                            Starts- 7th August 2024<br>
                                            Ends- 20th September<br>
                                            Winners will be based on voting to be done via Opera website</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ's Section -->
    <!-- App Section -->

    <!--End App Section -->
    <!-- Event Info Section -->

    <!--End Event Info Section -->
    <!-- Call to action -->

    <!--End Call to action -->
    <!-- Pricing Section -->
    <!--End Newsletter Section -->
@endsection
