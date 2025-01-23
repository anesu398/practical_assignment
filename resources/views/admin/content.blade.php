@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Hero Section</h2>
    <form action="{{ route('admin.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $content->where('key', 'title')->first()->value ?? '' }}">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $content->where('key', 'description')->first()->value ?? '' }}</textarea>
        </div>

        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
            <img src="{{ asset($content->where('key', 'image')->first()->value ?? 'assets/img/illustration-1.webp') }}" width="200">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
