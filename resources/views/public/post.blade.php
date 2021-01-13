
@extends('layouts.public')

@section('title', 'Blog')

@section('content')
<div class="wrapper">
        <div class="page-header page-header-small">
                
        <div class="page-header-image" data-parallax="true" style="background-image: url('{{( $post->images->count() > 0) ? asset($post->images->first()->url) : asset('now-ui-kit/assets/img/bg24.jpg')}}');">
        </div>
    
    
        <div class="content-center">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">{{$post->title}}</h2>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="button-container">
                        
                        <a href="#pablo" class="btn btn-icon btn-lg btn-twitter btn-round">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#pablo" class="btn btn-icon btn-lg btn-facebook btn-round">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a href="#pablo" class="btn btn-icon btn-lg btn-google btn-round">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h3 class="title">{{$post->title}}</h3>
                        {!!$post->body!!}
                    </div>

                    @if ($post->images->count() > 1)
                        <div class="col-md-8 ml-auto mr-auto">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                
                                <div class="carousel-inner">
                                    @foreach ($post->images as $img)
                                        <div class="carousel-item {{$loop->first ? 'active': '' }}">
                                        <img class="d-block w-100" src="{{asset($img->url)}}" alt="Slide {{$loop->index}}">
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    @endif

                    @if ($post->iframe)
                        <div class="col-md-8 ml-auto mr-auto">
                            <br>
                            {!!$post->iframe!!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    
        <div class="section section-blog-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="blog-tags">
                                    Tags:
                                    @forelse ($post->tags as $tag)
                                        <span class="label label-primary">
                                            <a class="badge badge-info badge-pill" href="{{route('post.tags.show', $tag)}}">{{$tag->name}}</a>
                                        </span>
                                    @empty
                                        NO tags
                                    @endforelse
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a href="#pablo" class="btn btn-google btn-round pull-right">
                                    <i class="fab fa-google"></i> 232
                                </a>
                                <a href="#pablo" class="btn btn-twitter btn-round pull-right">
                                    <i class="fab fa-twitter"></i> 910
                                </a>
                                <a href="#pablo" class="btn btn-facebook btn-round pull-right">
                                    <i class="fab fa-facebook-square"></i> 872
                                </a>
    
                            </div>
                        </div>
    
                        <hr />
    
                        <div class="card card-profile card-plain">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="card-avatar">
                                        <a href="#pablo">
                                            <img class="img img-raised" src="{{ asset('now-ui-kit/assets/img/mike.jpg')}}">
                                        </a>
                                    <div class="ripple-container"></div></div>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="card-title">Alec Thompson</h4>
                                    <p class="description">I've been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...I like good music from Youtube.</p>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-default pull-right btn-round">Follow</button>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </div>                     
@endsection


