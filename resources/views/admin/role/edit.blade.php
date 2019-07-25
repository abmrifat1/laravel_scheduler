@extends('admin.layout.admin')
@section('content')
    <h3>Edit Roles</h3>

    <form action="{{route('role.update',$role->id)}}" method="POST">
        {{method_field('PATCH')}}
        {{csrf_field()}}

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" value="{{$role->name}}" name="name" placeholder="name">
        </div>
        <div class="form-group">
            <label>Display Name</label>
            <input type="text" class="form-control" value="{{$role->display_name}}" name="display_name" placeholder="Display name">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" value="{{$role->description}}" name="description" placeholder="Description">
        </div>

        <div class="form-group text-left">
            <h3>Permission</h3>
            @foreach($permissions as $permission)
                <input type="checkbox"{{in_array($permission->id,$role_permissions)?"checked":""}} name="permission[]" value="{{$permission->id}}"> {{ $permission->name}}<br/>
            @endforeach
        </div>

        <button type="submit" class="btn btn-success">Submit</button>

    </form>
@endsection