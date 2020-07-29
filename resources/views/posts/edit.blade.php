@extends('layouts.layout')

@section('content')    
<form action="{{ route('post.update', ['id' => $post_id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h3>Редактировать пост</h3>
        <div class="form-qroup">
        <input name='title' type="text" class="form-control" required value="{{ $post->title }}">
        </div>
        <div class="form-qroup">
            <textarea name="description"  rows="10" class="form-control" required>{{ $post->description }}</textarea>
        </div>
        <div class="form-qroup">
            <input type="file" name="img">
        </div>

        <input type="submit" value="Создать пост" class="btn btn-outline-success">
    </form>
@endsection