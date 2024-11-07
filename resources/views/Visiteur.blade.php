@extends('layouts.user_type.guest')

@section('content')

<main class="main-content  mt-0">
    <section>
        <div class="container-fluid">
        <div class="card card-body blur shadow-blur mx-4 mt-2">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="../assets/img/bruce-mars.jpg" alt="..." class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ __('MANDEL COUTURE') }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            {{ __(' POUR PASSER UNE COMMANDE CREER UN COMPTE !') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row mt-4">
            @foreach($Model as $M)
            <div class="col-lg-4">
                <div class="card h-100 p-3">
                    <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('/Models/{{$M->Image}}')">
                        <span class="mask bg-gradient-dark opacity-2"></span>
                        <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                            <h5 class="text-white font-weight-bolder mb-4 pt-2">{{$M->Nom}}</h5>
                            <p class="text-white">{{$M->Description}}</p>
                            <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                                {{$M->Prix}}
                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</main>

@endsection
