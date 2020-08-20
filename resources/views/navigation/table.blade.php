@extends('layouts.back')

@section('content')
    <div class="card">
        <div class="card-header">Data Table Navigation</div>
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <th>Parent</th>
                    <th>Name</th>
                    <th>Url</th>
                    <th>Permission Name</th>
                </tr>
                <tr>
                    @foreach ($navigations as $item)
                        <tr>
                            <td><strong>{{ $item->parent->name }}</strong></td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->url  ?? 'its a parent'}}</td>
                            <td>{{ $item->permission_name }}</td>
                        </tr>
                    @endforeach
                </tr>
            </table>
        </div>
    </div>
@endsection
