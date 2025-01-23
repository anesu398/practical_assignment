@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mb-4">Manage Content</h1>

        <!-- Search Form -->
        <form action="{{ route('admin.content.index') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search content..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>

        <!-- Content Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Section</th>
                        <th>Key</th>
                        <th>Value</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contents as $content)
                        <tr>
                            <td>{{ $content->section }}</td>
                            <td>{{ $content->key }}</td>
                            <td>
                                @if (Str::startsWith($content->value, 'assets/img/'))
                                    <img src="{{ asset($content->value) }}" alt="Content Image" width="50">
                                @else
                                    {{ Str::limit($content->value, 50) }}
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.content.edit', $content->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No content found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        <div class="d-flex justify-content-center mt-3">
            {{ $contents->links() }}
        </div>
    </div>
@endsection
