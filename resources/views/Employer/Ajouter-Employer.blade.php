@extends('layouts.user_type.auth')

@section('content')

<div>
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
                            {{ __(' CONCEPT STORE') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('FORMULAIRE EMPLOYER') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="/Aded-Employer" method="POST" role="form text-left">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Nom" class="form-control-label">{{ __('NOM') }}</label>
                                <div class="@error('Nom')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Nom" name="Nom">
                                        @error('Nom')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Numero" class="form-control-label">{{ __('NUMERO') }}</label>
                                <div class="@error('Numero')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="number" placeholder="77 000 00 00" name="Numero">
                                        @error('Numero')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Adresse" class="form-control-label">{{ __('ADRESSE') }}</label>
                                <div class="@error('Adresse') border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Adresse"  name="Adresse">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Email" class="form-control-label">{{ __('EMAIL') }}</label>
                                <div class="@error('Email')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="email" placeholder="mail@mandel.com" name="Mail">
                                        @error('Email')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Password" class="form-control-label">{{ __('MOT DE PASSE') }}</label>
                                <div class="@error('Password') border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="Password" placeholder="Mot de passe"  name="Password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Specialite" class="form-control-label">{{ __('SPECIALITE') }}</label>
                                <div class="@error('Specialite')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Tailleur" name="Specialite">
                                        @error('Specialite')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'AJOUTER MODEL' }}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
