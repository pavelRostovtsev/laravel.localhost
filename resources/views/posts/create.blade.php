@extends('layouts.layout')

@section('content')    
<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h3>Создать пост</h3>
        <div class="form-qroup">
            <input name='title' type="text" class="form-control" required>
        </div>
        <div class="form-qroup">
            <textarea name="description"  rows="10" class="form-control" required></textarea>
        </div>
        <div class="form-qroup">
            <input type="file" name="img">
        </div>

        <input type="submit" value="Создать пост" class="btn btn-outline-success">
    </form>
@endsection