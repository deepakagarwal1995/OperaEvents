@extends('visitors.layouts.visitors', ['title' =>'Registration Form'])

@section('content')
    <style>
        .sec-title ul, .sec-title li {
    list-style: inherit;
     
}
.sec-title ul{    padding-left: 20px;
        }
        .contact-form{
          
    box-shadow: 0px 1px 2px rgb(112 112 112);
    border-radius: 0;
    background: #efefef;
    padding: 10px;
        }
 .contact-form .form-group input {
    background-color: #ffffff !important;
    padding: 6px 15px !important;
    height: auto !important;
    border: 1px solid #ddd !important;
}
.contact-form .form-group {
    margin-bottom: 10px;
}label {
    display: inline-block;
    margin-bottom: 0.21rem;
    color: #000;
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
                            <form method="post" action="">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>First Name</label>
                                        <input type="text" name="username" required="">
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Last  Name</label>
                                        <input type="text" name="username" required="">
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Country</label>
                                        <input type="text" name="username" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>City</label>
                                        <input type="text" name="username" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>DOB</label>
                                        <input type="text" name="username" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Category</label>
                                        <input type="text" name="username" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Mobile</label>
                                        <input type="text" name="username" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Email</label>
                                        <input type="text" name="username" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Any criminal History</label>
                                        <input type="text" name="username" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Profile Id on Facebook</label>
                                        <input type="text" name="username" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Profile Id on TikTok</label>
                                        <input type="text" name="username" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Profile Id on insta</label>
                                        <input type="text" name="username" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Profile Id on YouTube </label>
                                        <input type="text" name="username" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Profile Id on snapchat</label>
                                        <input type="text" name="username" required="">
                                    </div>
                                    <div class="col-lg-12 col-sm-12 form-group">
                                        <label>Profile Id on LinkedIn</label>
                                        <input type="text" name="username" required="">
                                    </div>
                                    <div class="col-lg-12 col-sm-12 form-group">
                                        <label><input type="checkbox" name="username" required=""> BY SUBMITTING THIS FORM, YOU AGREE TO OUR TREMS AND CONDITIONS & THIS YOUR ORIGINAL CONTENT.</label>
                                         <label><input type="checkbox" name="username" required=""> I accept to pay contest fee payment of AUD $100 on submission of this form using payment link mentioned here. <a href="https://buy.stripe.com/00g5oedLs0Yzc2QdQT" target="">Stripe</a> </label>
                                        <h5 class="text-danger">(Contestant participation only valid after successful submission of contest fee).</h5>



                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Submit Now</span></button>
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
