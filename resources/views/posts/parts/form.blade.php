<div class="form-qroup">
    <input name='title' type="text" class="form-control" required value="{{ $post->title ?? ''}}">
    </div>
    <div class="form-qroup">
        <textarea name="description"  rows="10" class="form-control" required>{{ $post->description ?? ''}}</textarea>
    </div>
    <div class="form-qroup">
        <input type="file" name="img">
    </div>
