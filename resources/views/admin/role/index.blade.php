@extends('admin.layout.admin')
@section('content')
    <h3>Roles</h3>
    @role('admin')
    <a class="btn btn-success" style="float: right;margin: 10px" href="{{route('role.create')}}">Create rule</a>
    @endrole
    <table class="table table-bordered table-hover">
        <tr class="">
            <th style="text-align: center">Name</th>
            <th style="text-align: center">Display_name</th>
            <th style="text-align: center">Description</th>
            @role('admin')
            <th style="text-align: center">Action</th>
            @endrole
        </tr>
        @forelse($roles as $role)
        <tr>
            <td>{{$role->name}}</td>
            <td>{{$role->display_name}}</td>
            <td>{{$role->description}}</td>
            @role('admin')
            <td>
                <a class="btn btn-primary" href="{{route('role.edit',$role->id)}}">Edit</a>
                <form action="{{route('role.destroy',$role->id)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input type="submit" class="btn btn-danger" value="delete">
                </form>
            </td>
            @endrole
        </tr>
            @empty
            <tr>
                <td>No Role</td>
            </tr>

        @endforelse
    </table>
@endsection