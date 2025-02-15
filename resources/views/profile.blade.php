@extends('layouts.user_type.auth')

@section('content')
<div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <div class="container-fluid">
        <div class="card card-body blur shadow-blur mx-4 mt-4 overflow-hidden">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{$Information->name}}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            {{$Information->Roles->nom}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 mt-2">
                <div class="card mb-4">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-1">Projects</h6>
                        <p class="text-sm">Architects design houses</p>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card card-blog card-plain">
                                    <div class="position-relative">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img src="../assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                        </a>
                                    </div>
                                    <div class="card-body px-1 pb-0">
                                        <p class="text-gradient text-dark mb-2 text-sm">Project #2</p>
                                        <a href="javascript:;">
                                            <h5>
                                                Modern
                                            </h5>
                                        </a>
                                        <p class="mb-4 text-sm">
                                            As Uber works through a huge amount of internal management turmoil.
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                                            <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                                                    <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                                                    <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                                                    <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                                                    <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card card-blog card-plain">
                                    <div class="position-relative">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img src="../assets/img/home-decor-2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                        </a>
                                    </div>
                                    <div class="card-body px-1 pb-0">
                                        <p class="text-gradient text-dark mb-2 text-sm">Project #1</p>
                                        <a href="javascript:;">
                                            <h5>
                                                Scandinavian
                                            </h5>
                                        </a>
                                        <p class="mb-4 text-sm">
                                            Music is something that every person has his or her own specific opinion about.
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                                            <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                                                    <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                                                    <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                                                    <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                                                    <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card card-blog card-plain">
                                    <div class="position-relative">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img src="../assets/img/home-decor-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                        </a>
                                    </div>
                                    <div class="card-body px-1 pb-0">
                                        <p class="text-gradient text-dark mb-2 text-sm">Project #3</p>
                                        <a href="javascript:;">
                                            <h5>
                                                Minimalist
                                            </h5>
                                        </a>
                                        <p class="mb-4 text-sm">
                                            Different people have different taste, and various types of music.
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                                            <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                                                    <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                                                    <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                                                    <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                                                    <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card h-100 card-plain border">
                                    <div class="card-body d-flex flex-column justify-content-center text-center">
                                        <a href="javascript:;">
                                            <i class="fa fa-plus text-secondary mb-3"></i>
                                            <h5 class=" text-secondary"> New project </h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
</div>

@endsection
