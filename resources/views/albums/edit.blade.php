<form action="{{ route('album.update', $album->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- Populate with existing album data using the old album content -->
    <input type="text" name="title" value="{{ old('title', $album->title) }}">
    <textarea name="description">{{ old('description', $album->description) }}</textarea>
    <button type="submit" class="btn btn-success">Update Album</button>
</form>
