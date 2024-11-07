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
                <h6 class="mb-0">{{ __('FORMULAIRE COMMANDE') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="/Aded-Commande" method="POST" role="form text-left">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Tissue" class="form-control-label">{{ __('TISSUE') }}</label>
                                <div class="@error('Tissue')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Getzner Blanc" name="Tissue">
                                    @error('Tissue')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Model" class="form-control-label">{{ __('MODEL') }}</label>
                                <div>
                                    <select name="Model" class="form-control">
                                        <option selected disabled>CHOISIR UN MODEL</option>
                                        @foreach($Model as $M)
                                        <option class="text-uppercase" value="{{$M->id}}">{{$M->Nom.' - PRIX : '.$M->Prix.' FR CFA'}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Quantite" class="form-control-label">{{ __('QUANTITE') }}</label>
                                <div class="@error('Quantite')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="number" placeholder="1" name="Quantite">
                                    @error('Quantite')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
            @if(auth()->user()->idrole == 1)
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div>
                            <h6 class="form-control-label">NOUVEAU CLIENT
                                <input type="checkbox" id="checkbox1" class="form-checkbox" name="Nouveau" onclick="checkboxClicked(1)">
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div>
                            <h6 class="form-control-label">CLIENT EXISTENT
                                <input type="checkbox" id="checkbox2" class="form-checkbox" name="Existent" onclick="checkboxClicked(2)">
                            </h6>
                        </div>
                    </div>
                </div>
                @endif
                <!-- Nouveau Client -->
                <div id="NouveauClient" style="display:none">
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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Prenom" class="form-control-label">{{ __('PRENOM') }}</label>
                                <div class="@error('Prenom')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Prenom" name="Prenom">
                                    @error('Prenom')
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
                                    <input class="form-control" type="email" placeholder="mail@mandel.com" name="Email">
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
                </div>
                <!-- -->
                <!-- Client Existent -->
                <div id="ClientExistent" style="display:none">
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <select name="Client" class="form-control">
                                <option selected disabled>CHOISIR UN CLIENT</option>
                                @foreach($Client as $C)
                                <option class="text-uppercase" value="{{$C->id}}">{{$C->Utilisateurs->name.' - '.$C->Utilisateurs->adresse.' - '.$C->Utilisateurs->telephone}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!-- -->
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'AJOUTER COMMANDE' }}</button>
            </div>
            </div>

            </form>

        </div>
    </div>
</div>
</div>

@endsection

<script>
    function Affiche(I) {
        var Element;
        Element = document.getElementById(I);
        if (Element.style.display == "none") {
            Element.style.display = "";
        } else {
            Element.style.display = "none";
        }
    }

    function Masquer(I) {
        var Element;
        Element = document.getElementById(I);
        if (Element.style.display == "") {
            Element.style.display = "none";
        }
    }

    function checkboxClicked(checkboxNumber) {
        if (checkboxNumber === 1) {
            Affiche('NouveauClient')
            Masquer('ClientExistent')
            document.getElementById("checkbox2").checked = false;
        } else if (checkboxNumber === 2) {
            Affiche('ClientExistent')
            Masquer('NouveauClient')
            document.getElementById("checkbox1").checked = false;
        }
    }

</script>
