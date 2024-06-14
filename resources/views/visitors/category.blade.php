@extends('visitors.layouts.visitors', ['title' => 'Categories'])

@section('content')
    <!-- Banner Meetup -->
    <style>
        .cate ul, .cate li {
    list-style: inherit;
    padding: 0px;
    margin: 0px;    color: #000;
    font-weight: 600;
}
        }
    </style>
    <section class="page-title" style="background-image:url({{ config('app.url') }}/assets/images/background/5.jpg);">

        <div class="auto-container">

            <h1>Categories</h1>

            <ul class="bread-crumb clearfix">

                <li><a href="{{ route('index') }}">Home</a></li>

                <li>Categories</li>

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

                            <h2>Categories</h2>

                        </div>
                        <div class="cate">
                            <ol>
                                <li>BEST USE OF FACEBOOK</li>
                                <li>BEST USE OF INSTAGRAM
                                </li>
                                <li>BEST USE OF YOUTUBE
                                </li>
                                <li>BEST USE OF TIKTOK
                                </li>
                                <li>BEST USE OF SNAPCHAT
                                </li>
                                <li>BEST USE OF LINKEDIN
                                </li>
                                <li>BEST SOCIAL INFLUENCER CAMPAIGN
                                </li>
                                <li>MOST IMPACTFUL SOCIAL MEDIA CAMPAIGN
                                </li>
                                <li>RISING STAR AWARD
                                </li>
                                <li>PODCASTER OF THE YEAR
                                </li>
                                <li>CONTENT CREATOR OF THE YEAR
                                </li>
                                <li>Best reel in TikTok
                                </li>
                                <li>Best reel in Facebook
                                </li>
                                <li>Best Reel in Instagram
                                </li>
                                <li>most popular video in YouTube
                                </li>
                                <li>Best Actor Male (TikTok)
                                </li>
                                <li>Best Actor Female (TikTok)
                                </li>
                                <li>Most Popular Male (Facebook)
                                </li>
                                <li>Most Popular Female (Facebook)
                                </li>
                                <li>Most Popular Male (Tiktok)
                                </li>
                                <li>Most Popular Female (Tiktok)
                                </li>
                                <li>Most Popular Male (Insta)
                                </li>
                                <li>Most Popular Female (Insta)
                                </li>
                                <li>Best Male Dancer on TikTok
                                </li>
                                <li>Best Female Dancer on TikTok
                                </li>
                                <li>Best Male Dancer on Facebook
                                </li>
                                <li>Best Female Dancer on Facebook
                                </li>
                                <li>Best Male dancer on Insta
                                </li>
                                <li>Best Female Dancer on Insta
                                </li>
                                <li>Best Male Dancer on Youtube
                                </li>
                                <li>Best Female Dancer on YouTube
                                </li>
                                <li>EMERGING HAIR INFLUENCER OF THE YEAR
                                </li>
                                <li>EMERGING MAKEUP INFLUENCER OF THE YEAR
                                </li>
                                <li>CREATIVE MAKEUP INFLUENCER OF THE YEAR
                                </li>
                                <li>INFLUENCER BEAUTY BRAND OF THE YEAR
                                </li>
                                <li>HAIR INFLUENCER OF THE YEAR
                                </li>
                                <li>MAKEUP INFLUENCER OF THE YEAR
                                </li>
                                <li>TUTORIALIST INFLUENCER OF THE YEAR
                                </li>
                                <li>EMERGING FASHION INFLUENCER OF THE YEAR
                                </li>
                                <li>CREATIVE FASHION INFLUENCER OF THE YEAR
                                </li>
                                <li>FASHION TREND INFLUENCER OF THE YEAR
                                </li>
                                <li>FASHION DESIGN INFLUENCER OF THE YEAR
                                </li>
                                <li>FASHION INFLUENCER OF THE YEAR
                                </li>
                                <li>EMERGING FITNESS INFLUENCER OF THE YEAR
                                </li>
                                <li>FITNESS INFLUENCER OF THE YEAR
                                </li>
                                <li>WELLNESS INFLUENCER OF THE YEAR
                                </li>
                                <li>FEMALE FITNESS INFLUENCER OF THE YEAR
                                </li>
                                <li>MALE FITNESS INFLUENCER OF THE YEAR
                                </li>
                                <li>EMERGING LIFESTYLE INFLUENCER OF THE YEAR
                                </li>
                                <li>FOODIE INFLUENCER OF THE YEAR
                                </li>
                                <li>TRAVEL INFLUENCER OF THE YEAR
                                </li>
                                <li>LIFESTYLE INFLUENCER OF THE YEAR
                                </li>
                                <li>Most Popular Photographer on Social Media
                                </li>
                                <li>Most Popular Motivational Speaker on Social Media
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                <!-- Image Column -->

            </div>
        </div>
    </section>
    <!--End About Section -->
@endsection
