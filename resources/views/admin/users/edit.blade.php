@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Edit User</div>
        <div class="card-body">
            <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                </div>
                <div class="form-group">
                    <label for="password">Password (Leave blank to keep current password)</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="is_admin">Admin</label>
                    <select name="is_admin" class="form-control">
                        <option value="0" {{ $user->is_admin ? '' : 'selected' }}>No</option>
                        <option value="1" {{ $user->is_admin ? 'selected' : '' }}>Yes</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection