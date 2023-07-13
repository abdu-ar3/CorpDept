@extends('layouts.admin') 

@section('title') Permission @endsection

@section('content')

<div class="card mt-2 ml-2 mr-2">

    <div class="card mb-2 mt-2 text-center">
        <h5>Edit Data Permission</h5>
    </div>

    <div class="card-body">

    <!-- Message -->
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif

    <!-- FORM -->
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('admin.permissions.update', $permission)}}" method="POST">
        @csrf
        <input type="hidden" value="PUT" name="_method">
        <label for="name">Permission Name</label>
        <div class="input-group mb-1">
            <input value="{{$permission->name}}" class="form-control" type="text" name="name" id="name" />
        </div>

        <input class="btn btn-primary" type="submit" value="Save" />
    </form>

    <div class="mt-4">
        <h3>ROLES</h3>
        <div class="">
            @if ($permission->roles)
                @foreach($permission->roles as $permission_role)
                    <form onsubmit="return confirm('Really ??')" class="d-inline" action="{{route('admin.permissions.roles.remove', [$permission->id, $permission_role->id])}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-sm btn-danger"> <span>{{ $permission_role->name}}</span></button>
                    </form>
                
                @endforeach
            @endif
        </div>
        <div class="mt-2">
            <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('admin.permissions.roles', $permission->id)}}" method="POST">
            @csrf
                <label for="role">Roles</label>
                <div class="input-group mb-1">
                    <select id="role" name="role" class="form-control mb-2">
                        @foreach($roles as $role)
                        <option value="{{$role->name}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                            {{$errors->first('role')}}
                    </div>
                </div>

                <input class="btn btn-primary" type="submit" value="Assign Role" />
            </form>
        </div>
    </div>


    </div>

</div>


@endsection