@extends('layouts.admin') 

@section('title') Role @endsection

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
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('admin.roles.update', $role)}}" method="POST">
        @csrf
        <input type="hidden" value="PUT" name="_method">
        <label for="name">Roles Name</label>
        <div class="input-group mb-1">
            <input value="{{$role->name}}" class="form-control" type="text" name="name" id="name" />
            <div class="invalid-feedback">
                    {{$errors->first('name')}}
            </div>
        </div>

        <input class="btn btn-primary" type="submit" value="Save" />
    </form>

    <div class="mt-4">
        <h3>ROLE PERMISSION</h3>
        <div class="">
            @if ($role->permissions)
                @foreach($role->permissions as $role_permission)
                    <form onsubmit="return confirm('Really ??')" class="d-inline" action="{{route('admin.roles.permissions.revoke', [$role->id, $role_permission->id])}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-sm btn-danger"> <span>{{ $role_permission->name}}</span></button>
                    </form>
                
                @endforeach
            @endif
        </div>
        <div class="mt-2">
            <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('admin.roles.permissions', $role)}}" method="POST">
            @csrf
                <label for="name">Permission</label>
                <div class="input-group mb-1">
                    <select id="permission" name="permission" class="form-control mb-2">
                        @foreach($permissions as $permission)
                        <option value="{{$permission->name}}">{{$permission->name}}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                            {{$errors->first('name')}}
                    </div>
                </div>

                <input class="btn btn-primary" type="submit" value="Assign Role" />
            </form>
        </div>
    </div>

    </div>

</div>


@endsection