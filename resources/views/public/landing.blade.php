
@extends('layouts.public')

@section('title', 'Home')

@section('content')
    @include('public.shared.nav')
            
    <div class="page-header page-header-small">
        <div class="page-header-image" data-parallax="true" style="background-image: url('{{ asset('now-ui-kit/assets/img/bg26.jpg')}}');">
        </div>
        <div class="content-center">
        <div class="container">
            <h1 class="title">This is our great company.</h1>
            <div class="text-center">
                <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                    <i class="fab fa-google-plus"></i>
                </a>
            </div>
        </div>
        </div>
    </div>

    <div class="section section-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">Who we are?</h2>
                    <h5 class="description">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record low maximum sea ice extent tihs year down to low ice extent in the Pacific and a late drop in ice extent in the Barents Sea.</h5>
                </div>
            </div>
            <div class="separator separator-primary"></div>
            <div class="section-story-overview">
                <div class="row">
                    <div class="col-md-6">
                        <!-- First image on the left side --> 
                        <div class="image-container image-left" style="background-image: url('{{ asset('now-ui-kit/assets/img/bg38.jpg')}}')">
                            <p class="blockquote blockquote-primary">"Over the span of the satellite record, Arctic sea ice has been declining significantly, while sea ice in the Antarctichas increased very slightly"
                                <br>
                                <br>
                                <small>-NOAA</small>
                            </p>
                        </div>
                        <!-- Second image on the left side of the article -->
                        <div class="image-container image-left-bottom" style="background-image: url('{{ asset('now-ui-kit/assets/img/bg24.jpg')}}')"></div>
                    </div>
                    <div class="col-md-5">
                        <!-- First image on the right side, above the article -->
                        <div class="image-container image-right" style="background-image: url('{{ asset('now-ui-kit/assets/img/bg39.jpg')}}')"></div>
                        <h3>So what does the new record for the lowest level of winter ice actually mean</h3>
                        <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world, it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
                        </p>
                        <p>
                            For a start, it does not automatically follow that a record amount of ice will melt this summer. More important for determining the size of the annual thaw is the state of the weather as the midnight sun approaches and temperatures rise. But over the more than 30 years of satellite records, scientists have observed a clear pattern of decline, decade-by-decade.
                        </p>
                        <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world, it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="testimonials-1 section-image" style="background-image: url('{{ asset('now-ui-kit/assets/img/bg19.jpg')}}')">

        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto text-center">
                    <h2 class="title">What is ALPHA?</h2>
                    <h4 class="description text-white">If you’re selected for ALPHA you’ll also get 3 tickets, opportunity to access Investor Office Hours and Mentor Hours and much more all for €850.</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card card-testimonial">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img img-raised" src="{{ asset('now-ui-kit/assets/img/michael.jpg')}}">
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="card-description">
                                The networking at Web Summit is like no other European tech conference.
                            </p>
                        </div>
                        <div class="icon icon-primary">
                            <i class="fa fa-quote-right"></i>
                        </div>
                        <div class="card-footer">
                            <h4 class="card-title">Michael Elijah</h4>
                            <p class="category">@michaelelijah</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-testimonial">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img img-raised" src="{{ asset('now-ui-kit/assets/img/olivia.jpg')}}">
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="card-description">
                                The connections you make at Web Summit are unparalleled, we met users all over the world.
                            </p>
                        </div>
                        <div class="icon icon-primary">
                            <i class="fa fa-quote-right"></i>
                        </div>
                        <div class="card-footer">
                            <h4 class="card-title">Olivia Harper</h4>
                            <p class="category">@oliviaharper</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-testimonial">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img img-raised" src="{{ asset('now-ui-kit/assets/img/james.jpg')}}">
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="card-description">
                                Web Summit will increase your appetite, your inspiration, and your network.
                            </p>
                        </div>
                        <div class="icon icon-primary">
                            <i class="fa fa-quote-right"></i>
                        </div>
                        <div class="card-footer">
                            <h4 class="card-title">James Logan</h4>
                            <p class="category">@jameslogan</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    @include('public.shared.footer')

@endsection


