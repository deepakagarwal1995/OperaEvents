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
                <h2> Opera Social  <br>Media Awards</h2>
            </div>
            <!-- Countdown -->
            <div class="countdown clearfix">
                <div class="time-counter"><div class="time-countdown clearfix" data-countdown="2024/08/10"></div></div>
            </div>
            <div class="btn-box">
                <a href="{{ route('registration') }}" class="theme-btn btn-style-one"><span class="btn-title">Registration Open</span></a>
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
                            <h2>HONORING THE BEST OF  <br>SOCIAL MEDIA AND DIGITAL</h2>
                            <div class="text">The Opera Social Media Awards recognises and honours the great work performed by individuals on diverse social media platforms. 
                                
<br>

This event provides the opportunity to celebrate your achievements along with your friends and colleagues in the social media industry.
<br>
Any Australian resident with Indian subcontinent heritage is welcome to apply.
                            </div>
                        </div>
                        
                        <div class="btn-box"><a href="{{ route('registration') }}" class="theme-btn btn-style-three"><span class="btn-title">Register Now</span></a></div>
                    </div>
                </div>
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure class="image wow fadeIn"><img src="{{ config('app.url') }}/assets/images/istockphoto-1389027560-612x612.jpg" alt=""></figure>
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
                    <a href="{{ route('registration') }}" class="theme-btn btn-style-one"><span class="btn-title">Register Now</span></a>
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
                <span class="title">FAQ'S</span>
                <h2>General Questions</h2>
            </div>
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!--Accordian Box-->
                        <ul class="accordion-box">
                            <!--Block-->
                            <li class="accordion block wow fadeInUp">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>What is Cohousing?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block active-block wow fadeInUp">
                                <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>Can we change the design?</div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block wow fadeInUp">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>How is the privacy issues?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
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
                                <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>What is Cancelation Period?</div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block wow fadeInUp">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>What is Cohousing?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block wow fadeInUp">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-angle-down"></span> </div>How is the privacy issues?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
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
   
    <!--End Pricing Section -->
    <!-- Gallery Section -->
    <section class="gallery-section style-two">
        <div class="gallery-carousel owl-carousel owl-theme">
            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="{{ config('app.url') }}/assets/images/gallery/1.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="{{ config('app.url') }}/assets/images/gallery/1.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                </div>
            </div>
            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="{{ config('app.url') }}/assets/images/gallery/2.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="{{ config('app.url') }}/assets/images/gallery/2.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                </div>
            </div>
            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="{{ config('app.url') }}/assets/images/gallery/3.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="{{ config('app.url') }}/assets/images/gallery/3.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                </div>
            </div>
            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="{{ config('app.url') }}/assets/images/gallery/4.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="{{ config('app.url') }}/assets/images/gallery/4.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                </div>
            </div>
            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="{{ config('app.url') }}/assets/images/gallery/5.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="{{ config('app.url') }}/assets/images/gallery/5.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                </div>
            </div>
            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="{{ config('app.url') }}/assets/images/gallery/6.jpg" alt=""></figure>
                    <div class="overlay-box"><a href="{{ config('app.url') }}/assets/images/gallery/6.jpg" class="lightbox-image" data-fancybox="gallery"><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                </div>
            </div>
        </div>
    </section>
    <!--End Gallery Section -->
     <section class="event-info-section">
        <div class="auto-container">
            <div class="row">
                <!-- Info Column -->
                <div class="info-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title style-two">
                            <span class="title">Reach us</span>
                            <h2>Direction for the <br>Event hall</h2>
                        </div>
                        <div class="event-info-tabs tabs-box">
                            <!--Tabs Box-->
                            <ul class="tab-buttons clearfix">
                                <li class="tab-btn active-btn" data-tab="#tab1">Time</li>
                                <li class="tab-btn" data-tab="#tab2">Venue</li>
                                <li class="tab-btn" data-tab="#tab3">How to</li>
                            </ul>
                            <div class="tabs-content">
                                <!--Tab-->
                                <div class="tab active-tab" id="tab1">
                                    <h4><span class="icon far fa-calendar"></span> January 20, 2023</h4>
                                    <div class="text">9.00 AM - 04.00 PM</div>
                                    <ul class="info-list">
                                        <li><span class="icon icon_profile"></span> Dianne Ameter</li>
                                        <li><span class="icon icon_phone"></span> <a href="tel:+690-147-265-345">+123 456 7890</a></li>
                                        <li><span class="icon icon_mail"></span> <a href="mailto:sopport@Eventrox.com">sopport@Eventrox.com</a></li>
                                    </ul>
                                </div>
                                <!--Tab-->
                                <div class="tab" id="tab2">
                                    <h4><span class="icon fa fa-map-marker-alt"></span>Pearl hotel, New york, USA</h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                                </div>
                                <!--Tab-->
                                <div class="tab" id="tab3">
                                    <h4><span class="icon fa fa-directions"></span> How to get there</h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Image Column -->
                <div class="map-column col-lg-6 col-md-12 col-sm-12">
                    <!--Map Outer-->
                    <div class="map-outer">
                        <!--Map Canvas-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25216.765666144616!2d144.9456413371385!3d-37.8112271492458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b8c21cb29b%3A0x1c045678462e3510!2sMelbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1599237324751!5m2!1sen!2s" height="435"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Section -->
 
    <!--End Newsletter Section -->
        <!--Clients Section-->
    <section class="clients-section-three" style="background-image: url({{ config('app.url') }}/assets/images/background/9.jpg);">
        <div class="auto-container">
            <div class="sponsors-outer">
                <div class="sponsors-carousel owl-carousel owl-theme">
                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{ config('app.url') }}/assets/images/clients/2-1.png" alt=""></a></figure>
                    </div>
                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{ config('app.url') }}/assets/images/clients/2-2.png" alt=""></a></figure>
                    </div>
                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{ config('app.url') }}/assets/images/clients/2-3.png" alt=""></a></figure>
                    </div>
                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{ config('app.url') }}/assets/images/clients/2-4.png" alt=""></a></figure>
                    </div>
                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{ config('app.url') }}/assets/images/clients/2-5.png" alt=""></a></figure>
                    </div>
                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{ config('app.url') }}/assets/images/clients/2-6.png" alt=""></a></figure>
                    </div>
                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{ config('app.url') }}/assets/images/clients/2-7.png" alt=""></a></figure>
                    </div>
                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{ config('app.url') }}/assets/images/clients/2-8.png" alt=""></a></figure>
                    </div>
                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{ config('app.url') }}/assets/images/clients/2-9.png" alt=""></a></figure>
                    </div>
                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{ config('app.url') }}/assets/images/clients/2-10.png" alt=""></a></figure>
                    </div>
                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{ config('app.url') }}/assets/images/clients/2-11.png" alt=""></a></figure>
                    </div>
                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{ config('app.url') }}/assets/images/clients/2-12.png" alt=""></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Clients Section-->
@endsection
