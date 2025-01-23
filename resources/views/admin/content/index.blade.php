@extends('layouts.admin')

@section('content')
    <h1>Manage Content</h1>
    <form action="{{ route('admin.content.index') }}" method="GET">
    <input type="text" name="search" placeholder="Search content..." value="{{ request('search') }}">
    <button type="submit">Search</button>
</form>
    <table class="table">
        <thead>
            <tr>
                <th>Section</th>
                <th>Key</th>
                <th>Value</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contents as $content)
                <tr>
                    <td>{{ $content->section }}</td>
                    <td>{{ $content->key }}</td>
                    <td>{{ Str::limit($content->value, 50) }}</td>
                    <td>
                        <a href="{{ route('admin.content.edit', $content->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection