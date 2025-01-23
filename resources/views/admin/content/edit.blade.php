@extends('layouts.admin')

@section('content')
    <h1>Edit Content</h1>
    <form action="{{ route('admin.content.update', $content->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="value">Value</label>
            @if ($content->key === 'image')
                <input type="file" name="image" class="form-control">
                <img src="{{ asset($content->value) }}" alt="Current Image" width="100">
            @else
                <textarea name="value" class="form-control">{{ $content->value }}</textarea>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection