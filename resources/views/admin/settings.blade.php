@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Settings</div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="siteName">Site Name</label>
                    <input type="text" class="form-control" id="siteName" placeholder="Enter site name">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection