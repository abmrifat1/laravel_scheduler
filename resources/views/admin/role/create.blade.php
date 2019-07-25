@extends('admin.layout.admin')
@section('content')
    <h3>Create Roles</h3>

    <form action="{{route('role.store')}}" method="POST">
        {{csrf_field()}}

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="name">
        </div>
        <div class="form-group">
            <label>Display Name</label>
            <input type="text" class="form-control" name="display_name" placeholder="Display name">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" placeholder="Description">
        </div>

        <div class="form-group text-left">
            <h3>Permission</h3>
            @foreach($permissions as $permission)
            <input type="checkbox" name="permission[]" value="{{$permission->id}}"> {{ $permission->name}}<br/>
                @endforeach
        </div>

        <button type="submit" class="btn btn-success">Submit</button>

    </form>
@endsection