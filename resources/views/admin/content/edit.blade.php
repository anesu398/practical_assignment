@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mb-4">Edit Content</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.content.update', $content->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="value" class="form-label">Value</label>

                @if (Str::startsWith($content->value, 'assets/img/'))
                    <div class="mb-2">
                        <img src="{{ asset($content->value) }}" alt="Current Image" class="img-thumbnail" width="150">
                    </div>
                    <input type="file" name="image" class="form-control">
                @else
                    <textarea name="value" class="form-control" rows="5">{{ old('value', $content->value) }}</textarea>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.content.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
