@extends('layouts.admin') 

@section('title') Permission @endsection

@section('content')

<div class="card mt-2 ml-2 mr-2">

    <div class="card mb-2 mt-2 text-center">
        <h5>Master Data Permission</h5>
    </div>

    <div class="card-body">

        <div class="row mb-2">
            <div class="col-md-12 text-right">
                <a href=""
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
                    <th scope="col">Name</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
            
            @foreach($permissions as $pm)
            <tr>

                <td>{{$pm->name}}</td>
                <td>
                
                </td>

            </tr>
            @endforeach


            </tbody>
        </table>

    </div>

</div>


<!-- Modal Areaa -->
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
                    action="{{route('admin.permissions.store')}}"
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