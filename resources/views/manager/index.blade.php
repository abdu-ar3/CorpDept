@extends('layouts.admin') 

@section('title') Manager @endsection

@section('content')

<div class="card mt-2 ml-2 mr-2">

        <!-- Message -->
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif


    <div class="card mb-2 mt-2 text-center">
        <h5>Role Manager</h5>
    </div>

    <div class="card-body">

    </div>

</div>

@endsection