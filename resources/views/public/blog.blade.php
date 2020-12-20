
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




<div class="main">

    <div class="container">
        
        <div class="section">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a class="social-icon text-xs-center" href="{{route('blog')}}">
                        <span class="badge badge-info"><i class="fas fa-toolbox"></i> Todos</span>
                    </a>
                </li>
                @forelse ($categories as $category)
                    <li class="list-inline-item">
                        <a class="social-icon text-xs-center" href="{{route('categories.show', $category)}}">
                            <span class="badge badge-info"><i class="{{$category->icon}}"></i> {{$category->name}}</span>
                        </a>
                    </li>            
                @empty
                    sin categorías aun
                @endforelse
            </ul>

            <h3 class="title text-center">Publicaciones</h3>
            <br />
            <div class="row">

                @forelse ($posts as $post)
                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-image">
                                <a href="{{route('blog.post.show',$post)}}">
                                    <img class="img rounded img-raised" src="{{( $post->images->count() > 0) ? $post->images->first()->url : 'now-ui-kit/assets/img/bg5.jpg'}}" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="category text-info">{{$post->category->name}}</h6>
                                <h4 class="card-title">
                                    <a href="{{route('blog.post.show',$post)}}">{{$post->title}}</a>
                                </h4>
                                <p class="card-description">
                                    {{$post->excerpt}}...
                                    <a href="{{route('blog.post.show',$post)}}"> Leer más</a>
                                    <div class="author">

                                        <img src="{{ asset('now-ui-kit/assets/img/olivia.jpg')}}" alt="..." class="avatar img-raised">
                                        <span>{{$post->user->name}}</span>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div> 
                @empty
                    sin posts aun
                @endforelse
                
            </div>
            {!! $posts->links('public.shared.paginator') !!}

        </div>
    </div>
                
@endsection


