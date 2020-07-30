<div class="form-qroup">
    <input name='title' type="text" class="form-control" required value="{{ old ('title') ?? $post->title ?? ''}}">
    </div>
    <div class="form-qroup">
        <textarea name="description"  rows="10" class="form-control" required>{{ old ('description') ?? $post->description ?? ''}}</textarea>
    </div>
    <div class="form-qroup">
        <input type="file" name="img">
    </div>
