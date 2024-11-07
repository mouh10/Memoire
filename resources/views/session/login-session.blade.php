@extends('layouts.user_type.guest')

@section('content')
<div class="row">
    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
        <div class="card card-plain mt-2">
            <div class="card-header pb-0 text-left bg-transparent">
                <h2 class="font-weight-bolder text-info text-gradient">BIENEVNUE</h2>
            </div>
            <div class="card-body">
                <form role="form" method="POST" action="/session">
                    @csrf
                    <label>Email</label>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="mail@mandel.com" aria-label="Email" aria-describedby="email-addon">
                        @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <label>Mot de Passe</label>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="secret" aria-label="Password" aria-describedby="password-addon">
                        @error('password')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                        <label class="form-check-label" for="rememberMe">Se Souvenir de Moi !</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Se Connecter</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <small class="text-muted">Mot de Passe Oublier ?
                    <a href="/login/forgot-password" class="text-info text-gradient font-weight-bold">Reinitialiser</a>
                </small>
            </div>
        </div>
    </div>
</div>
@endsection
