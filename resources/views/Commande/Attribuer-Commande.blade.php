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
                <h5>INFORMATIONS COMMANDE</h5>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="/Attribute-Commande" method="POST" role="form text-left">
                    @csrf
                    <div class="row">
                        <input class="form-control bg-transparent border-0" type="text" value="{{$Commande->id}}" name="Id" hidden>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">{{ __('PRENOM - NOM') }}</label>
                                <div>
                                    <input class="form-control bg-transparent border-0" type="text" value="{{$Commande->Clients->Utilisateurs->name}}" name="Tissue" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">{{ __('TISSUE') }}</label>
                                <div>
                                    <input class="form-control bg-transparent border-0" type="text" value="{{$Commande->Tissue}}" name="Tissue" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">{{ __('DATE COMMANDE') }}</label>
                                <div>
                                    <input class="form-control bg-transparent border-0" type="text" value="{{$Commande->DateCommande}}" name="Tissue" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">{{ __('DATE LIVRAISON') }}</label>
                                <div>
                                    <input class="form-control bg-transparent border-0" type="text" value="{{$Commande->DateLivraison}}" name="Tissue" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">{{ __('MONTANT') }}</label>
                                <div>
                                    <input class="form-control bg-transparent border-0" type="text" value="{{$Commande->Montant.' FR CFA'}}" name="Tissue" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">{{ __('ETAT') }}</label>
                                <div>
                                    <input class="form-control bg-transparent border-0" type="text" value="{{$Commande->Etat}}" name="Tissue" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">{{ __('QUANTITE') }}</label>
                                <div>
                                    <input class="form-control bg-transparent border-0" type="text" value="{{$Commande->Quantite}}" name="Quantite" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Tailleur" class="form-control-label">{{ __('TAILLEUR') }}</label>
                                <div>
                                    <select name="Tailleur" class="form-control">
                                        <option selected disabled>CHOISIR UN TAILLEUR</option>
                                        @foreach($Employer as $E)
                                        <option class="text-uppercase" value="{{$E->id}}">{{$E->Utilisateurs->name.' - '.$E->Specialite}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'ATTRIBUER COMMANDE' }}</button>
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
