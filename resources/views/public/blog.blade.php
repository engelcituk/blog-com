
@extends('layouts.public')

@section('title', 'Blog')

@section('content')
            

    <div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true" style="background-image: url('{{ asset('now-ui-kit/assets/img/bg44.jpg')}}');">
    </div>

    <div class="content-center">
		<div class="row">
			<div class="col-md-8 ml-auto mr-auto text-center">
				<h2 class="title">A Place for Entrepreneurs to Share and Discover New Stories</h2>
                <a href="#button" class="btn btn-primary btn-round  btn-icon" >
               <i class="fab fa-twitter"></i>
            </a>
            <a href="#button" class="btn btn-primary btn-round  btn-icon">
               <i class="fab fa-instagram"></i>
           </a>
			</div>
		</div>
	</div>

</div>


<div class="projects-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 px-0">
                <div class="card card-fashion card-background" style="background-image: url('{{ asset('now-ui-kit/assets/img/project10.jpg')}}')">
                    <div class="card-body">
                        <div class="card-title text-left">
                            <h2>
                                <a href="#pablo">
                                    The world's biggest yacht sets sail. It has lasers.
                                </a>
                            </h2>
                        </div>

                        <div class="card-footer text-left">
                            <div class="stats">
                                <span>
                                    <i class="now-ui-icons users_circle-08"></i>Nicholas Deleon
                                </span>

                                <span>
                                    <i class="now-ui-icons tech_watch-time"></i> June 2, 2017
                                </span>
                            </div>

                            <div class="stats-link pull-right">
                                <a href="#pablo" class="footer-link">Yachts</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 px-0">
                <div class="card card-fashion">
                    <div class="card-title">
                        <a href="#pablo">
                            <h4>
                                <a href="#pablo">
                                    Why Early Sailors Were Stalled for Millennia in the...
                                </a>
                            </h4>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="card-footer">
                            <div class="stats">
                                <span>
                                    <i class="now-ui-icons users_circle-08"></i>Jon Russell
                                </span>

                                <span>
                                    <i class="now-ui-icons tech_watch-time"></i> June 2, 2017
                                </span>
                            </div>

                            <div class="stats-link pull-right">
                                <a href="#pablo">Sea</a>&sbquo;
                                <a href="#pablo">Magazine</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 px-0">
                <div class="card card-fashion card-background" style="background-image: url('{{ asset('now-ui-kit/assets/img/project11.jpg')}}')">

                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-3 px-0">
                <div class="card card-fashion card-background" style="background-image: url('{{ asset('now-ui-kit/assets/img/project12.jpg')}}')">

                </div>
            </div>

            <div class="col-md-3 px-0">
                <div class="card card-fashion arrow-left">
                    <div class="card-title">
                        <h4>
                            <a href="#pablo">
                                My Depressing Summers in Belize
                            </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="card-footer">
                            <div class="stats">
                                <span>
                                    <i class="now-ui-icons users_circle-08"></i>John Bruno
                                </span>

                                <span>
                                    <i class="now-ui-icons tech_watch-time"></i> June 2, 2017
                                </span>
                            </div>

                            <div class="stats-link pull-right">
                                <a href="#pablo">Opinion</a>&sbquo;
                                <a href="#pablo">Outdoor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 px-0">
                <div class="card card-fashion card-background" style="background-image: url('{{ asset('now-ui-kit/assets/img/project13.jpg')}}')">
                    <div class="card-body">
                        <div class="card-title text-left">
                            <h2>
                                <a href="#pablo">China Wants Fish, So Africa Goes Hungry</a>
                            </h2>
                        </div>

                        <div class="card-footer text-left">
                            <div class="stats">
                                <span>
                                    <i class="now-ui-icons users_circle-08"></i>Joanna Klein
                                </span>

                                <span>
                                    <i class="now-ui-icons tech_watch-time"></i> June 2, 2017
                                </span>
                            </div>

                            <div class="stats-link pull-right">
                                <a href="#pablo" class="footer-link">People</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main">

    <div class="container">
        <div class="section">
            <h3 class="title text-center">You may also be interested in</h3>
            <br />
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-plain card-blog">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img rounded img-raised" src="{{ asset('now-ui-kit/assets/img/bg5.jpg')}}" />
                            </a>
                        </div>

                        <div class="card-body">
                            <h6 class="category text-info">Enterprise</h6>
                            <h4 class="card-title">
                                <a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
                            </h4>
                            <p class="card-description">
                                Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>

                                <div class="author">
                                    <img src="{{ asset('now-ui-kit/assets/img/olivia.jpg')}}" alt="..." class="avatar img-raised">
                                    <span>Anna Spark</span>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-plain card-blog">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img rounded img-raised" src="{{ asset('now-ui-kit/assets/img/bg27.jpg')}}" />
                            </a>
                        </div>
                        <div class="card-body">
                            <h6 class="category text-success">
                                Startups
                            </h6>
                            <h4 class="card-title">
                                <a href="#pablo">Lyft launching cross-platform service this week</a>
                            </h4>
                            <p class="card-description">
                                Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
                                <div class="author">
                                    <img src="{{ asset('now-ui-kit/assets/img/michael.jpg')}}" alt="..." class="avatar img-raised">
                                    <span>John Black</span>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-plain card-blog">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img rounded img-raised" src="{{ asset('now-ui-kit/assets/img/bg21.jpg')}}" />
                            </a>
                        </div>

                        <div class="card-body">
                            <h6 class="category text-danger">
                                <i class="now-ui-icons media-2_sound-wave"></i> Enterprise
                            </h6>
                            <h4 class="card-title">
                                <a href="#pablo">6 insights into the French Fashion landscape</a>
                            </h4>
                            <p class="card-description">
                                Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>

                                <div class="author">
                                    <img src="{{ asset('now-ui-kit/assets/img/james.jpg')}}" alt="..." class="avatar img-raised">
                                    <span>James Newman</span>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="section pt-0 pb-0">                            
        <div class="team-3 section-image" data-parallax="true" style="background-image: url('{{ asset('now-ui-kit/assets/img/bg26.jpg')}}');" >

            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">Our little team.</h2>

                    <h4 class="description">
                        This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information.
                    </h4>
                </div>

                    <div class="col-xl-6 col-lg-7 ml-auto mr-auto">
                        <div class="card card-profile">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img" src="{{ asset('now-ui-kit/assets/img/olivia.jpg')}}">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h3 class="card-title">Ariana Hazel</h3>
                                <h6 class="category text-primary"> Fashion Designer</h6>

                                <p class="card-description">
                                    Happiness resides not in possessions, and not in gold, happiness dwells in the soul...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>

                    <div class="col-xl-6 col-lg-7 ml-auto mr-auto">
                        <div class="card card-profile">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img" src="{{ asset('now-ui-kit/assets/img/james.jpg')}}">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h3 class="card-title">Ryan Samuel</h3>
                                <h6 class="category text-primary">Financial Examiner</h6>

                                <p class="card-description">
                                    Today you are you! That is truer than true! There is no one alive who is you-er than you!..
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="subscribe-line subscribe-line-white">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h4 class="title">Get Tips &amp; Tricks every Week!</h4>
					<p class="description">
						Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
					</p>
				</div>
				<div class="col-md-6">
					<div class="card card-plain card-form-horizontal">
						<div class="card-content">
							<form method="" action="#">
								<div class="row">
									<div class="col-sm-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Email Name...">
                    </div>
									</div>
									<div class="col-sm-4">
										<button type="button" class="btn btn-primary btn-round btn-block">Subscribe</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>


                
@endsection

