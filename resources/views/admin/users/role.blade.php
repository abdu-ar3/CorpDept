@extends('layouts.admin') 

@section('title') Role @endsection

@section('content')

<div class="card mt-2 ml-2 mr-2">

    
        <!-- Message -->
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif


    <div class="card mb-2 mt-2 text-center">
        <h5>USER ROLE & PERMISSION</h5>
    </div>

    <div class="card-body">
        Name :  {{$user->name}} <br>
        Email : {{$user->email}}

    <div class="mt-4">
        <div class="">
        
        </div>
        <div class="mt-2">
        <h3>ROLES</h3>
        <div class="">
            @if ($user->roles)
                @foreach($user->roles as $user_role)
                    <form onsubmit="return confirm('Really ??')" class="d-inline" action="{{route('admin.users.roles.remove', [$user->id, $user_role->id])}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-sm btn-danger"> <span>{{ $user_role->name}}</span></button>
                    </form>
                
                @endforeach
            @endif
        </div>
    </div>
    <div class="mt-2">
            <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('admin.users.roles', $user->id)}}" method="POST">
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
    <div class="mt-2">
        <h3>PERMISSION</h3>
        <div class="">
            @if ($user->permissions)
                @foreach($user->permissions as $user_permission)
                    <form onsubmit="return confirm('Really ??')" class="d-inline" action="{{route('admin.users.permissions.revoke', [$user->id, $user_permission->id])}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-sm btn-danger"> <span>{{ $user_permission->name}}</span></button>
                    </form>
                
                @endforeach
            @endif
        </div>
    </div>
    <div class="mt-2">
            <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{ route('admin.users.permissions', $user->id) }}" method="POST">
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

                <input class="btn btn-primary" type="submit" value="Assign" />
            </form>
        </div>

</div>


@endsection