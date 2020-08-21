@extends('layouts.back')

@section('content')
    <div class="card">
        <div class="card-header">Create new Navigation</div>
        <div class="card-body">
            <form action="{{ route('navigation.edit', $navigation) }}" method="post">
                @csrf
                @method('PUT')
                @include('navigation.partials.form-control')
            </form>
            @include('navigation.delete')
        </div>
    </div>
@endsection
