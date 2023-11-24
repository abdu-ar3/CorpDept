@extends('layouts.admin') 

@section('title') Users Dept @endsection

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

                                    <div class="row mb-2 ml-2">
                                        <div class="col-md-12 text-right">
                                            <a
                                                href=""
                                                class="btn btn-sm btn-info"
                                                data-toggle="modal"
                                                data-target="#exampleModal"
                                                ><span class="ft-plus-square font-medium-2"></span
                                            ></a>
                                        </div>
                                    </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Noreg</th>
                    <th scope="col">User</th>
                    <th scope="col">Dept Role</th>
                </tr>
            </thead>
            <tbody>
            
            @foreach($users as $user)
            <tr>
                <td>{{$user->noreg}}</td>
                <td>{{$user->email}}</td>
                <td>
                    @foreach($user->departments()->get() as $dept)
                    <a class="btn btn-warning text-white btn-sm" href="{{route('admin.users.show', $user->id)}}">{{ $dept->name }}</a>
                    @endforeach
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
                    action="{{route('admin.users.save')}}"
                    method="POST"
                >
                    @csrf


                    <div class="form-group">
                        <label for="user_id">Select User:</label>
                        <select name="user_id" id="user_id" class="form-control">
                            <option value="">Select User</option>
                            @foreach($users as $us)
                                <option option value="{{$us->id}}">{{$us->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="department_id">Select Dept:</label>
                        <select name="department_id" id="department_id" class="form-control">
                            <option value="">Select Dept</option>
                            @foreach($depts as $dept)
                                <option option value="{{$dept->id}}">{{$dept->name}}</option>
                            @endforeach
                        </select>
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