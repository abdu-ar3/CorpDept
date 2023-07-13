@extends('layouts.admin') 

@section('title') Users @endsection

@section('content')

<div class="card mt-2 ml-2 mr-2">

        <!-- Message -->
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif


    <div class="card mb-2 mt-2 text-center">
        <h5>Data Users</h5>
    </div>

    <div class="card-body">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
            
            @foreach($users as $user)
            <tr>

                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a class="btn btn-info text-white btn-sm" href="{{route('admin.users.show', $user->id)}}">Role</a>
                    <form onsubmit="return confirm('Really ??')" class="d-inline" action="{{route('admin.users.destroy', $user->id)}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-sm btn-danger"><span class="ft-trash-2"></span></button>
                    </form>
                </td>

            </tr>
            @endforeach


            </tbody>
        </table>

    </div>

</div>


<!-- Modal Create -->
<div
    class="modal fade"
    id="exampleModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create</h5>
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form
                    enctype="multipart/form-data"
                    class="bg-white shadow-sm p-3"
                    action="{{route('admin.roles.store')}}"
                    method="POST"
                >
                    @csrf

                    <label for="name"> Name</label>
                    <div class="input-group mb-3">
                       <!--  Name -->
                        <input value="{{old('name')}}" class="form-control {{$errors->first('name')? "is-invalid": ""}}" placeholder="Name" type="text" name="name" id="name" />
                        <div class="invalid-feedback">
                            {{$errors->first('name')}}
                        </div>
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary">
                        Submit
                    </button>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

@endsection