@extends('visitors.layouts.visitors', ['title' =>'Terms and Conditions'])

@section('content')
    <style>
        .sec-title ul, .sec-title li {
    list-style: inherit;
     
}
.sec-title ul{    padding-left: 20px;
        }
    </style>
<!-- Banner Meetup -->
   <section class="page-title" style="background-image:url({{ config('app.url') }}/assets/images/background/5.jpg);">

        <div class="auto-container">

            <h1>Terms and Conditions</h1>

            <ul class="bread-crumb clearfix">

                <li><a href="{{ route('index') }}">Home</a></li>

                <li>Terms and Conditions</li>

            </ul>

        </div>

    </section>
    <!--End Banner Meetup -->
    <!-- About Section -->
    <section class="about-section-two">
        
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                             <h4>SUBMITTING AN ENTRY</h4>
                           
                            <div class="text"><b>Eligibility.</b><br>
                            Entries will only be accepted from candidates for the content shared on social media between 01 July 2023 to 30 June 2024.<br>
You are welcome to apply for more than one category provided you submit separate form for each entry to meet the requirements.</div>
                        </div>

                        <div class="sec-title">
                             <h4>What is required to enter in competition?</h4>
                           
                            <div class="text">Select the category or categories you wish to enter</div>
                            <ul>
                                <li>Complete the entry form and submit your film</li>
                                    <li>Arrange online payment of entry fee</li>
                                        <li>Submit completed entry form and entry fee of 100 AUDs.</li>
                            </ul>
                        </div>

                          <div class="sec-title">
                             <h4>Opera’s Terms and Conditions</h4>
                           
                             
                            <ul>
                                <li>Entries must be submitted by individual. Group entries are not eligible.</li>
                                    <li>For any entry submitted without proper documentation, Opera reserves the right to reject the application.</li>
                                        <li>All entry fees are non-refundable and non-transferable. By submitting entries into the competition, entrants are committing to pay for all entry fees in full.</li>
                                        <li>The organisers do not accept any responsibility for the loss or damage of any entry.</li>
                                        <li>Opera reserves the right to change or amend it Terms and Conditions to suit the need of the organisation.</li>
                            </ul>
                        </div>
                        
                        <div class="btn-box"><a href="{{ route('registration') }}" class="theme-btn btn-style-three"><span class="btn-title">Register Now</span></a></div>
                    </div>
                </div>
                <!-- Image Column -->
               
            </div>
        </div>
    </section>
    <!--End About Section -->
    
@endsection
