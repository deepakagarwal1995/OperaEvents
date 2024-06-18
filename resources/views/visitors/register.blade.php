@extends('visitors.layouts.visitors', ['title' => 'Registration Form'])

@section('content')
    <style>
        .sec-title ul,
        .sec-title li {
            list-style: inherit;

        }

        .sec-title ul {
            padding-left: 20px;
        }

        .contact-form {

            box-shadow: 0px 1px 2px rgb(112 112 112);
            border-radius: 0;
            background: #efefef;
            padding: 20px;
        }

        .contact-form .form-group input {
            background-color: #ffffff !important;
            padding: 6px 15px !important;
            height: auto !important;
            border: 1px solid #ddd !important;
        }

        .contact-form .form-group {
            margin-bottom: 10px;
        }

        label {
            display: inline-block;
            margin-bottom: 0.21rem;
            color: #000;
        }

        select {
            position: relative;
            display: block;
            font-size: 15px;
            color: #222222;
            line-height: 18px;
            padding: 10px 25px;
            background-color: #ffffff;
            font-weight: 400;
            height: 50px;
            border: 1px solid #dddddd;
            margin-top: 25px;
        }

        textarea {
            background-color: #fff !important;
        }
    </style>
    <!-- Banner Meetup -->
    <section class="page-title" style="background-image:url({{ config('app.url') }}/assets/images/background/5.jpg);">

        <div class="auto-container">

            <h1>Registration</h1>

            <ul class="bread-crumb clearfix">

                <li><a href="{{ route('index') }}">Home</a></li>

                <li>Registration</li>

            </ul>

        </div>

    </section>
    <!--End Banner Meetup -->
    <!-- About Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="contact-column col-lg-4 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Contact Info</h2>
                        </div>
                        <ul class="contact-info">
                            <li>
                                <span class="icon fa fa-map-marker-alt"></span>
                                <p><strong>32, Breaking Street,</strong></p>
                                <p>2nd cros, Newyork ,USA 10002</p>
                            </li>

                            <li>
                                <span class="icon fa fa-phone-volume"></span>
                                <p><strong>Call Us</strong></p>
                                <p>+321 4567 89 012 & 79 023</p>
                            </li>

                            <li>
                                <span class="icon fa fa-envelope"></span>
                                <p><strong>Mail Us</strong></p>
                                <p><a href="mailto:support@example.com">Support@example.com</a></p>
                            </li>

                            <li>
                                <span class="icon fa fa-clock"></span>
                                <p><strong>Opening Time</strong></p>
                                <p>Mon - Sat: 09.00am to 18.00pm</p>
                            </li>
                        </ul>

                        <ul class="social-icon-two social-icon-colored">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="contact-form">
                            <div class="sec-title">
                                <h2>Register Here</h2>
                            </div>
                            <form action="{{ route('enquiry') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Country</label>
                                        <input type="text" name="country" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>City</label>
                                        <input type="text" name="city" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>DOB</label>
                                        <input type="text" name="dob" required="">
                                    </div>
                                    <select name="category" id="" class="col-lg-6 col-md-6 col-sm-12 form-group">

                                        <option selected disabled>Select Category</option>
                                        <option>BEST USE OF FACEBOOK</option>
                                        <option>BEST USE OF INSTAGRAM
                                        </option>
                                        <option>BEST USE OF YOUTUBE
                                        </option>
                                        <option>BEST USE OF TIKTOK
                                        </option>
                                        <option>BEST USE OF SNAPCHAT
                                        </option>
                                        <option>BEST USE OF LINKEDIN
                                        </option>
                                        <option>BEST SOCIAL INFLUENCER CAMPAIGN
                                        </option>
                                        <option>MOST IMPACTFUL SOCIAL MEDIA CAMPAIGN
                                        </option>
                                        <option>RISING STAR AWARD
                                        </option>
                                        <option>PODCASTER OF THE YEAR
                                        </option>
                                        <option>CONTENT CREATOR OF THE YEAR
                                        </option>
                                        <option>Best reel in TikTok
                                        </option>
                                        <option>Best reel in Facebook
                                        </option>
                                        <option>Best Reel in Instagram
                                        </option>
                                        <option>most popular video in YouTube
                                        </option>
                                        <option>Best Actor Male (TikTok)
                                        </option>
                                        <option>Best Actor Female (TikTok)
                                        </option>
                                        <option>Most Popular Male (Facebook)
                                        </option>
                                        <option>Most Popular Female (Facebook)
                                        </option>
                                        <option>Most Popular Male (Tiktok)
                                        </option>
                                        <option>Most Popular Female (Tiktok)
                                        </option>
                                        <option>Most Popular Male (Insta)
                                        </option>
                                        <option>Most Popular Female (Insta)
                                        </option>
                                        <option>Best Male Dancer on TikTok
                                        </option>
                                        <option>Best Female Dancer on TikTok
                                        </option>
                                        <option>Best Male Dancer on Facebook
                                        </option>
                                        <option>Best Female Dancer on Facebook
                                        </option>
                                        <option>Best Male dancer on Insta
                                        </option>
                                        <option>Best Female Dancer on Insta
                                        </option>
                                        <option>Best Male Dancer on Youtube
                                        </option>
                                        <option>Best Female Dancer on YouTube
                                        </option>
                                        <option>EMERGING HAIR INFLUENCER OF THE YEAR
                                        </option>
                                        <option>EMERGING MAKEUP INFLUENCER OF THE YEAR
                                        </option>
                                        <option>CREATIVE MAKEUP INFLUENCER OF THE YEAR
                                        </option>
                                        <option>INFLUENCER BEAUTY BRAND OF THE YEAR
                                        </option>
                                        <option>HAIR INFLUENCER OF THE YEAR
                                        </option>
                                        <option>MAKEUP INFLUENCER OF THE YEAR
                                        </option>
                                        <option>TUTORIALIST INFLUENCER OF THE YEAR
                                        </option>
                                        <option>EMERGING FASHION INFLUENCER OF THE YEAR
                                        </option>
                                        <option>CREATIVE FASHION INFLUENCER OF THE YEAR
                                        </option>
                                        <option>FASHION TREND INFLUENCER OF THE YEAR
                                        </option>
                                        <option>FASHION DESIGN INFLUENCER OF THE YEAR
                                        </option>
                                        <option>FASHION INFLUENCER OF THE YEAR
                                        </option>
                                        <option>EMERGING FITNESS INFLUENCER OF THE YEAR
                                        </option>
                                        <option>FITNESS INFLUENCER OF THE YEAR
                                        </option>
                                        <option>WELLNESS INFLUENCER OF THE YEAR
                                        </option>
                                        <option>FEMALE FITNESS INFLUENCER OF THE YEAR
                                        </option>
                                        <option>MALE FITNESS INFLUENCER OF THE YEAR
                                        </option>
                                        <option>EMERGING LIFESTYLE INFLUENCER OF THE YEAR
                                        </option>
                                        <option>FOODIE INFLUENCER OF THE YEAR
                                        </option>
                                        <option>TRAVEL INFLUENCER OF THE YEAR
                                        </option>
                                        <option>LIFESTYLE INFLUENCER OF THE YEAR
                                        </option>
                                        <option>Most Popular Photographer on Social Media
                                        </option>
                                        <option>Most Popular Motivational Speaker on Social Media
                                        </option>
                                    </select>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Mobile</label>
                                        <input type="text" name="mobile" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Any criminal History ?</label>
                                        <input type="text" name="criminal" required="">
                                    </div>
                                    <select name="profile" id="" class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <option selected disabled>Select Profile Platform</option>
                                        <option>Profile Id on Facebook</option>
                                        <option>Profile Id on TikTok
                                        </option>
                                        <option>Profile Id on Insta
                                        </option>
                                        <option>Profile Id on YouTube
                                        </option>
                                        <option>Profile Id on Snapchat
                                        </option>
                                        <option>Profile Id on LinkedIn
                                        </option>
                                    </select>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Mention total followers/like of choosed platform</label>
                                        <input type="text" name="total" required="">
                                    </div>
                                    <hr>
                                    <div class="col-lg-12 col-sm-12" style="font-size: 1rem;">
                                        Enter 5 most viewed videos Links
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Link 1</label>
                                        <input type="text" name="link1" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Link 2</label>
                                        <input type="text" name="link2" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Link 3</label>
                                        <input type="text" name="link3" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Link 4</label>
                                        <input type="text" name="link4" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Link 5</label>
                                        <input type="text" name="link5" required="">
                                    </div>
                                    <hr>
                                    <div class="col-lg-12 col-sm-12 form-group">
                                        <label>Please describe yourself</label>
                                        <textarea name="describe" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 form-group">
                                        <label>Why you think you deserve to get social media award</label>
                                        <textarea name="deserve" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 form-group">
                                        <label>What’s your best achievement in your life</label>
                                        <textarea name="achievement" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <hr>
                                    <div class="col-lg-12 col-sm-12 form-group my-3">
                                        <label>Please upload your choosed social media ids screenshot : </label>
                                        <input type="file" name="image" accept="image/png, image/gif, image/jpeg">
                                    </div>
                                    <div class="col-lg-12 col-sm-12 form-group">
                                        <label><input type="checkbox" name="username" required=""> BY SUBMITTING THIS
                                            FORM, YOU AGREE TO OUR TREMS AND CONDITIONS & THIS YOUR ORIGINAL
                                            CONTENT.</label>
                                        <label><input type="checkbox" name="username" required=""> I accept to pay
                                            contest fee payment of AUD $100 on submission of this form using payment link
                                            mentioned here. <a href="https://buy.stripe.com/00g5oedLs0Yzc2QdQT"
                                                target="">Stripe</a> </label>
                                        <h5 class="text-danger">(Contestant participation only valid after successful
                                            submission of contest fee).</h5>



                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                                class="btn-title">Submit Now</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
