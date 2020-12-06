@extends('layouts.admin')

@section('title', 'Editar post')


@section('content')
<div class="content">
    <div class="container-fluid">
        <a href="{{route('admin.posts.index')}}" class="btn btn-warning mb-3"> <i class="fal fa-arrow-left"></i>  Regresar</a>

        <form action="{{route('admin.posts.update', $post)}}" method="POST">
            @csrf  {{ method_field('PUT') }}
              <div class="row">
                  <div class="col-md-8">
                      <div class="card">
                        <div class="card-body">
                          
                            <div class="form-group">
                              <label for="exampleTitulo" class="bmd-label-floating">Título de la publicación</label>
                              <input type="text" class="form-control" name="title" value="{{old('title', $post->title)}}">
                            </div>
                            <div class="form-group"> 
                              <textarea id="ckeditor" class="form-control" name="body" rows="10" placeholder="Ingrese el contenido completo de la publicación"> {{old('body', $post->body)}}</textarea>
                            </div> 
                            <div class="form-group"> 
                                <label for=""><strong>Contenido embebido de audio o video</strong></label>
                              <textarea  class="form-control" name="iframe" rows="2" placeholder="Ingrese el contenido embebido del iframe"> {{old('iframe', $post->iframe)}}</textarea>
                            </div> 
                        </div>
                        
                        <!-- end content-->
                      </div>
                      <!--  end card  -->
                    </div>
                        <!-- end col-md-8 -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleTitulo" class="bmd-label-floating">Título de la publicación</label>
                                        <div class="input-group">
                                                <input type="text" class="form-control" id="fechaPublicacion" placeholder="Fecha de publicación" name="published_at" value="{{old('published_at', $post->published_at ? $post->published_at ->format('d/m/Y') : null )}}" placeholder="Select date"  readonly/>
                                                <div class="input-group-append">
                                                    <span class="input-group-text fs-xl">
                                                        <i class="fal fa-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>  
                                    </div>
                                {{-- {{date('d/m/Y', strtotime($post->published_at))}} --}}
                                <div class="form-group">
                                  <label for=""></label>
                                    <select class="form-control select2" name="category_id">
                                      <option value="">Selecciona una categoria</option>
                                      @foreach ($categories as $category)
                                        <option value="{{$category->id}}"
                                          {{ old('category_id',$post->category_id ) == $category->id ? 'selected': '' }}> {{$category->name}} </option>
                                      @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                  <label for="">Etiquetas</label>
                                    <select 
                                      class="form-control select2"
                                      multiple="multiple"
                                      data-placeholder="Selecciona una o mas etiquetas"
                                      name="tags[]"
                                      >
                                        @foreach ($tags as $tag)
                                        <option {{collect(old('tags',$post->tags->pluck('id')))->contains($tag->id) ? 'selected': '' }} value="{{$tag->id}}"> {{$tag->name}} </option>
                                        @endforeach
                                      </select>
                                </div>
                              <div class="form-group"> 
                                <textarea class="form-control" name="excerpt" rows="3" placeholder="Extracto de la publicación"> {{old('excerpt',$post->excerpt)}}</textarea>
                              </div>
                              <div class="form-group"> 
                                <div class="dropzone"></div>
                              </div>
                              <div class="form-group"> 
                                  <button type="submit" class="btn btn-primary btn-block">Guardar publicación</button>
                                </div>
                            </div>
                            <!-- end content-->
                        </div>
                    </div>
                </div>
          </form>
    </div>
  </div>

<style>
        .ck-editor__editable {
              min-height: 250px;
          }
</style> 
@endsection

@push('stylesCss')
    <link rel="stylesheet" media="screen, print" href="{{ asset('smartadmin/css/formplugins/bootstrap-datepicker/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ asset('smartadmin/css/formplugins/select2/select2.bundle.css') }}">
@endpush
@push('scriptsJs') 
    <script src="{{ asset('smartadmin/js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js') }}" ></script>  
    <script src="{{ asset('smartadmin/js/formplugins/ckeditor/ckeditor.js') }}" ></script>  
    <script src="{{ asset('smartadmin/js/formplugins/select2/select2.bundle.js') }}" ></script>   
    @include('admin.posts.js.edit') 
@endpush




        
        
    