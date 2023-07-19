@extends('layouts.admin') 

@section('title') BIODATA @endsection

@section('content')

<div class="content-wrapper">
            <div class="content-wrapper-before" style="background: rgb(226, 43, 43);"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Right Sidebar</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Layouts</a>
                                </li>
                                <li class="breadcrumb-item active">Content right sidebar
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-detached content-left">
                <div class="content-body">
                    <section class="row">
                        <div class="col-sm-12">

                            <!-- What is-->
                            <div id="what-is" class="card">
                                <div class="card-header">
                                    <h4 class="card-title">BIODATA</h4>
                                     <div class="media d-flex m-1 ">
                                        <div class="align-left p-1">
                                            <a href="#" class="profile-image">
                                                <img src="{{asset('app-assets/images/user/alexander.jpg')}}" class="rounded-circle img-border height-100" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="media-body text-left  mt-1">
                                            <h3 class="font-large-1 black">{{ $biodata->first_name }} {{ $biodata->last_name }}
                                            </h3>
                                             <span class="font-medium-1 black">(Project manager)</span>
                                            <p class="black">
                                                <i class="ft-map-pin black"> </i> New York, USA </p>
                                            <p class="black text-bold-300 d-none d-sm-block">22003</p>
                                            <p class="black text-bold-300 d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed odio risus. Integer sit amet dolor elit. Suspendisse
                                                ac neque in lacus venenatis convallis. Sed eu lacus odio</p>
                                            <ul class="list-inline">
                                                <li class="pr-1 line-height-1">
                                                    <a href="#" class="font-medium-4 black ">
                                                        <span class="ft-facebook"></span>
                                                    </a>
                                                </li>
                                                <li class="pr-1 line-height-1">
                                                    <a href="#" class="font-medium-4 black ">
                                                        <span class="ft-twitter black"></span>
                                                    </a>
                                                </li>
                                                <li class="line-height-1">
                                                    <a href="#" class="font-medium-4 black ">
                                                        <span class="ft-instagram"></span>
                                                    </a>
                                                </li>
                                            </ul>


                                        </div>
                                    </div>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/ What is-->

                            <!-- Kick start -->
                            <div id="kick-start" class="card">
                                <div class="card-header">
                                    <h4 class="card-title">DETAIL PROFILE</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                        <table class="table table-padded table-xl mb-0" id="recent-project-table">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0">Full Name </th>
                                                    <td class="border-top-0" width="65%"><span>{{ $biodata->first_name }} {{ $biodata->last_name }}</span></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="border-top-0">Tempat Lahir </th>
                                                    <td class="border-top-0" width="65%"><span>{{ $biodata->place_of_birth }}</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="border-top-0">Tanggal Lahir </th>
                                                    <td class="border-top-0" width="65%"><span>{{ $biodata->date_of_birth }}</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="border-top-0">Alamat </th>
                                                    <td class="border-top-0" width="65%"><span>{{ $biodata->address }}</span></td>
                                                </tr>
                                            
                                                <tr>    
                                                    <th class="border-top-0">Department </th>
                                                    <td class="border-top-0" width="65%"><span>{{ $biodata->department1 }}</span></td>
                                                </tr>
                    

                                                <tr>
                                                    <th class="border-top-0">Type Jobs </th>
                                                    <td class="border-top-0" width="65%"><span></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!--/ Kick start -->


                            
                        </div>
                    </section>
                </div>
            </div>
            <div class="sidebar-detached sidebar-right">
                <div class="sidebar">
                    <div class="sidebar-content card d-none d-lg-block">
                        <div class="card-body">
                               <div class="card">
                                <div class="card-header pb-0">
                                    <div class="card-title-wrap bar-primary">
                                        <div class="card-title">Work History</div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body p-0 pt-0 pb-1">
                                        <ul>
                                            <li>
                                                <strong>99%</strong>
                                                Job Success
                                            </li>
                                            <li>
                                                <strong>4.9 stars </strong>
                                                <i class="la la-star yellow darken-2"></i>
                                                <i class="la la-star yellow darken-2"></i>
                                                <i class="la la-star yellow darken-2"></i>
                                                <i class="la la-star yellow darken-2"></i>
                                                <i class="la la-star yellow darken-2"></i>
                                            <li>
                                                <strong>1022</strong> Hours Worked</li>
                                            <li>
                                                <strong>26</strong> Jobs</li>

                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="sidebar-detached sidebar-right">
                <div class="sidebar">
                    <div class="sidebar-content card d-none d-lg-block">
                        <div class="card-body">
                               <div class="card">
                                <div class="card-header pb-0">
                                    <div class="card-title-wrap bar-primary">
                                        <div class="card-title">SCORE KPI INDIVIDU</div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body p-0 pt-0 pb-1">
                                        <h1 class="display-4 text-center">99</h1>
                                        <h1 class="display-4 text-center badge-primary badge-pill">BS</h1>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        
        </div>
@endsection