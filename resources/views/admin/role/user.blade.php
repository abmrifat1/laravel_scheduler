
@extends('admin.layout.admin')
@section('content')
    <h3>Roles</h3>
    <table class="table table-bordered table-hover">
        <tr class="text-center">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @forelse($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
        @empty
            <tr>
                <td>No Role</td>
            </tr>

        @endforelse
    </table>
@endsection