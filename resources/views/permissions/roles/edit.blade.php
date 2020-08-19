@extends('layouts.back')

@section('content')
    <div class="card mb-4">
        <div class="card-header">Edit Role</div>
        <div class="card-body">
            <form action="{{ route('roles.update', $role) }}" method="post">
                @csrf
                @method('PUT')
                @include('permissions.roles.partials.form-control', ['submit' => 'Create'])
            </form>
        </div>
    </div>

@endsection
