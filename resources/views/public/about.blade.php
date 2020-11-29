
@extends('layouts.public')

@section('title', 'About')

@section('content')
            

    <div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true" style="background-image: url('{{ asset('now-ui-kit/assets/img/bg32.jpg')}}');">
    </div>
    <div class="content-center">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <h1 class="title">About Us</h1>
                <h4>Meet the amazing team behind this project and find out more about how we work.</h4>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="about-description text-center">
        <div class="features-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mr-auto ml-auto">
                        <h2 class="title">Simpler. Smarter. Faster.</h2>
                        <h4 class="description">The CloudCheckr Cloud Management Platform (CMP) provides full visibility and control to reduce costs, improve cybersecurity posture, and automate critical tasks.</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="info info-hover">
                            <div class="icon icon-success icon-circle">
                                <i class="now-ui-icons objects_globe"></i>
                            </div>
                            <h4 class="info-title">Asset Management</h4>
                            <p class="description">Cross-account dashboards provide sophisticated reporting for enterprise.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info info-hover">
                            <div class="icon icon-info icon-circle">
                                <i class="now-ui-icons education_atom"></i>
                            </div>
                            <h4 class="info-title">Resource Utilization</h4>
                            <p class="description">CloudCheckr provides summary and detailed usage statistics for resources.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info info-hover">
                            <div class="icon icon-primary icon-circle">
                                <i class="now-ui-icons tech_watch-time"></i>
                            </div>
                            <h4 class="info-title">Self-Healing</h4>
                            <p class="description">CloudCheckr enables users to save money, time, and effort.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="separator-line separator-primary"></div>

    <div class="projects-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">We have many advantages</h2>
                    <h4 class="description">This is the paragraph where you can write more details about your projects. Keep you user engaged by providing meaningful information.</h4>
                    <div class="section-space"></div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-5 ml-auto">
                    <div class="card card-background card-background-product card-raised" style="background-image: url('{{ asset('now-ui-kit/assets/img/project8.jpg')}}')">
                        <div class="card-body">
                            <h2 class="card-title">Social Analytics</h2>
                            <p class="card-description">
                                Insight to help you create, connect, and convert. Understand Your Audience's Interests, Influence, Interactions, and Intent. Discover emerging topics and influencers to reach new audiences.
                            </p>
                            <label class="badge badge-neutral">Analytics</label>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 mr-auto">
                    <div class="info info-horizontal">
                        <div class="icon icon-danger">
                            <i class="now-ui-icons ui-2_chat-round"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Listen to Social Conversations</h4>
                            <p class="description">
                                Gain access to the demographics, psychographics, and location of unique people who talk about your brand.
                            </p>
                        </div>
                    </div>

                    <div class="info info-horizontal">
                        <div class="icon icon-danger">
                            <i class="now-ui-icons business_chart-pie-36"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Performance Analyze</h4>
                            <p class="description">
                                Unify data from Facebook, Instagram, Twitter, LinkedIn, and Youtube to gain rich insights from easy-to-use reports.
                            </p>
                        </div>
                    </div>

                    <div class="info info-horizontal">
                        <div class="icon icon-danger">
                            <i class="now-ui-icons design-2_ruler-pencil"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Social Conversions</h4>
                            <p class="description">
                                Track actions taken on your website that originated from social, and understand the impact on your bottom line.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <hr />

            <div class="row">

                <div class="col-md-5 ml-auto mt-5">
                    <div class="info info-horizontal">
                        <div class="icon icon-warning">
                            <i class="now-ui-icons users_single-02"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Work With Any Team</h4>
                            <p class="description">
                                Whether it’s for work or even the next family vacation, Trello helps your team.
                            </p>
                        </div>
                    </div>

                    <div class="info info-horizontal">
                        <div class="icon icon-warning">
                            <i class="now-ui-icons business_chart-bar-32"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">A Productivity Platform</h4>
                            <p class="description">
                                Integrate the apps your team already uses directly into your workflow.
                            </p>
                        </div>
                    </div>

                    <div class="info info-horizontal">
                        <div class="icon icon-warning">
                            <i class="now-ui-icons arrows-1_refresh-69"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Always In Sync</h4>
                            <p class="description">
                                No matter where you are, Trello stays in sync across all of your devices.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 mr-auto">
                    <div class="card card-background card-background-product card-raised" style="background-image: url('{{ asset('now-ui-kit/assets/img/project9.jpg')}}')">
                        <div class="card-body">
                            <h2 class="card-title">Trello lets you work.</h2>
                            <p class="card-description text-white">
                                Trello’s boards, lists, and cards enable you to organize and prioritize your projects in a fun, flexible and rewarding way.
                            </p>
                            <label class="badge badge-neutral">Trello</label>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <div class="about-team team-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">We are nerd rockstars</h2>
                    <h4 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h4>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-6 col-lg-7 ml-auto mr-auto">
                    <div class="card card-profile card-plain">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img img-raised rounded" src="{{ asset('now-ui-kit/assets/img/olivia.jpg')}}" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h4 class="card-title">Ella Evelyn</h4>
                                    <h6 class="category">Air Crew Member</h6>

                                    <p class="card-description">
                                        Think in the morning. Act in the noon. Eat in the evening. Sleep in the night......
                                    </p>

                                    <div class="card-footer">
                                        <a href="#pablo" class="btn btn-icon btn-neutral btn-twitter"><i class="fab fa-twitter"></i></a>
                                        <a href="#pablo" class="btn btn-icon btn-neutral btn-facebook"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#pablo" class="btn btn-icon btn-neutral btn-google"><i class="fab fa-google"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-7 ml-auto mr-auto">
                    <div class="card card-profile card-plain">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img img-raised rounded" src="{{ asset('now-ui-kit/assets/img/emily.jpg')}}" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h4 class="card-title">Mila Skylar</h4>
                                    <h6 class="category">Architect</h6>

                                    <p class="card-description">
                                        Love cures people - both the ones who give it and the ones who receive it...
                                    </p>

                                    <div class="card-footer">
                                        <a href="#pablo" class="btn btn-icon btn-neutral btn-linkedin"><i class="fab fa-linkedin"></i></a>
                                        <a href="#pablo" class="btn btn-icon btn-neutral btn-facebook"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#pablo" class="btn btn-icon btn-neutral btn-dribbble"><i class="fab fa-dribbble"></i></a>
                                        <a href="#pablo" class="btn btn-icon btn-neutral btn-google"><i class="fab fa-google"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-7 ml-auto mr-auto">
                    <div class="card card-profile card-plain">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img img-raised rounded" src="{{ asset('now-ui-kit/assets/img/james.jpg')}}" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h4 class="card-title">Daniel Carter</h4>
                                    <h6 class="category">Aviation Inspector</h6>

                                    <p class="card-description">
                                        Keep your face always toward the sunshine - and shadows will fall behind you...
                                    </p>

                                    <div class="card-footer">
                                        <a href="#pablo" class="btn btn-icon btn-neutral btn-youtube"><i class="fa fab-youtube"></i></a>
                                        <a href="#pablo" class="btn btn-icon btn-neutral btn-twitter"><i class="fab fa-twitter"></i></a>
                                        <a href="#pablo" class="btn btn-icon btn-neutral btn-instagram"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-7 ml-auto mr-auto">
                    <div class="card card-profile card-plain">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img img-raised rounded" src="../assets/img/michael.jpg" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h4 class="card-title">Dylan Wyatt</h4>
                                    <h6 class="category">Conservation Scientist</h6>

                                    <p class="card-description">
                                        There is only one corner of the universe you can be certain of improving, and that's your own self...
                                    </p>

                                    <div class="card-footer">
                                        <a href="#pablo" class="btn btn-icon btn-neutral btn-linkedin"><i class="fab fa-linkedin"></i></a>
                                        <a href="#pablo" class="btn btn-icon btn-neutral btn-facebook"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#pablo" class="btn btn-icon btn-neutral btn-google"><i class="fab fa-google"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="about-office">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="title">Our office is our second home</h2>
                    <h4 class="description">Here are some pictures from our office. You can see the place looks like a palace and is fully equiped with everything you need to get the job done.</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img class="rounded img-raised" alt="Raised Image" src="{{ asset('now-ui-kit/assets/img/bg27.jpg')}}">
                </div>
                <div class="col-md-4">
                    <img class="rounded img-raised" alt="Raised Image" src="{{ asset('now-ui-kit/assets/img/bg24.jpg')}}">
                </div>
                <div class="col-md-4">
                    <img class="rounded img-raised" alt="Raised Image" src="{{ asset('now-ui-kit/assets/img/bg28.jpg')}}">
                </div>
                <div class="col-md-6">
                    <img class="rounded img-raised" alt="Raised Image" src="{{ asset('now-ui-kit/assets/img/project6.jpg')}}">
                </div>
                <div class="col-md-6">
                    <img class="rounded img-raised" alt="Raised Image" src="{{ asset('now-ui-kit/assets/img/project14.jpg')}}">
                </div>

            </div>
        </div>
    </div>
    <div class="about-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mr-auto ml-auto">
                    <h2 class="text-center title">Want to work with us?</h2>
                    <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will get back to you in a couple of hours.</h4>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-4">
                                <label>First name</label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>
                                  </div>
                                  <input type="text" class="form-control" placeholder="First Name..." autocomplete="firstname">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Your email</label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span>
                                  </div>
                                  <input type="text" class="form-control" placeholder="Email Name..." autocomplete="email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Speciality</label>
                                    <select class="selectpicker" data-size="7" data-style="btn btn-default btn-round mt-0" title="Speciality">
                                        <option value="1">I'm a Designer</option>
                                        <option value="2">I'm a Developer</option>
                                        <option value="3">I'm a Hero</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto text-center">
                                <button class="btn btn-primary btn-round mt-4 btn-lg">
                                    Let's talk
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


                

            
@endsection


