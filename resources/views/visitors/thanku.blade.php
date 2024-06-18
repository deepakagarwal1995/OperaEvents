@extends('visitors.layouts.visitors', ['title' => 'Thank You !!'])

@section('content')
    <!-- Banner Meetup -->
    <section class="page-title" style="background-image:url({{ config('app.url') }}/assets/images/main-slider/2.jpg);">

        <div class="auto-container">

            <h1>Thank You {{ $name->first_name }} {{ $name->last_name }} !!</h1>

            <ul class="bread-crumb clearfix">

                <li><a href="{{ route('index') }}">Home</a></li>

                <li>Thank You !!</li>

            </ul>

        </div>

    </section>
    <section class="container mt-4">
        <div class="jumbotron text-center">
            <h1 class="display-3">Thank You {{ $name->first_name }} {{ $name->last_name }} !</h1>
            <p class="lead">Now for approval please procceed to payment link</p>
            <hr>
            <p>
                <strong>Here's a payment link : </strong> <a href="https://buy.stripe.com/00g5oedLs0Yzc2QdQT"
                    target="_blank">Stripe</a>
            </p>
            <p class="lead">
                After successfully payment please share the screenshot with our whatsapp number : <a
                    href="https://api.whatsapp.com/send?phone=1234567891" target="_blank">Send screenshot</a>
            </p>
        </div>
    </section>
    <!--End Banner Meetup -->
@endsection
