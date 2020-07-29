@extends('layouts.layout')

@section('content')
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-header"><h2>{{ $post->title }}</h2></div>
              <div class="card-body">
                <div class="card-img card-img_max" style="background-image: url({{ $post->img ?? asset('img/default.jpg') }})"></div>
                <div class="card-author"><p>Автор:  {{ $post->name }}</p></div>
                <div class="card-date"><p>Пост создан:  {{ $post->created_at->diffForHumans()}}</p></div>
                <div class="card-btn">
                  <a href="{{ route('post.index') }}" class="btn btn-outline-primary">На главную</a>
                  <a href="{{ route('post.edit', ['id' => $post->post_id]) }}" class="btn btn-outline-success">Редактировать</a>
                  <a href="{{ route('post.destroy', ['id' => $post->post_id]) }}" class="btn btn-outline-danger">Удалить</a>
                </div>                
              </div>
            </div>
          </div>           
        </div>
@endsection        
        