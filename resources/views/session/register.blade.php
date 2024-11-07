@extends('layouts.user_type.guest')

@section('content')

<section class="min-vh-100 mb-8">

    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 mx-3 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-1">BIENVENUE !</h1>
                    <p class="text-lead text-white">REJOINDRE L'UNIVERS DE MANDEL COUTURE</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
                <div class="card-body">
                    <form role="form text-left" method="POST" action="/Aded-NewClient">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Nom" class="form-control-label">{{ __('NOM') }}</label>
                                    <div class="@error('Nom')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="text" placeholder="Nom Model" name="Nom">
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
                                        <input class="form-control" type="text" placeholder="Adresse" name="Adresse">
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
                                        <input class="form-control" type="Password" placeholder="Mot de passe" name="Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="mb-2">{{ __('MESURE CLIENT') }}</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Cou" class="form-control-label">{{ __('COU') }}</label>
                                    <div class="@error('Cou')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="number" placeholder="Cou 30" name="Cou">
                                        @error('Cou')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Epaule" class="form-control-label">{{ __('EPAULE') }}</label>
                                    <div class="@error('Epaule')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="number" placeholder="Epaule 45" name="Epaule">
                                        @error('Epaule')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Poitrine" class="form-control-label">{{ __('POITRINE') }}</label>
                                    <div class="@error('Poitrine')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="number" placeholder="Poitrine 40" name="Poitrine">
                                        @error('Poitrine')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Bras" class="form-control-label">{{ __('BRAS') }}</label>
                                    <div class="@error('Bras')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="number" placeholder="Bras 45" name="Bras">
                                        @error('Bras')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Poignet" class="form-control-label">{{ __('POIGNET') }}</label>
                                    <div class="@error('Poignet')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="number" placeholder="Poignet 40" name="Poignet">
                                        @error('Poignet')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Cuisse" class="form-control-label">{{ __('CUISSE') }}</label>
                                    <div class="@error('Cuisse')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="number" placeholder="Cuisse 45" name="Cuisse">
                                        @error('Cuisse')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Hanches" class="form-control-label">{{ __('HANCHES') }}</label>
                                    <div class="@error('Hanches')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="number" placeholder="Hanches 40" name="Hanches">
                                        @error('Hanches')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Pantalon" class="form-control-label">{{ __('PANTALON') }}</label>
                                    <div class="@error('Pantalon')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="number" placeholder="Pantalon 105" name="Pantalon">
                                        @error('Pantalon')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">REJOINDRE</button>
                        </div>
                        <p class="text-sm mt-3 mb-0">Already have an account? <a href="/Connexion" class="text-dark font-weight-bolder">Connexion</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
