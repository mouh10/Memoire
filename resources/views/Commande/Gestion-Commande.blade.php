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

    <div class="row mt-2">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">GESTION DES COMMANDES</h5>
                        </div>
                        <div class="col-2">
                            <select name="Dropdown" class="form-select" onchange="window.location.href=this.value;">
                                <option value="">TRIER</option>
                                <option value="/Gestion-Commande">TOUT</option>
                                <option value="/Gestion-Commande/?Valeur=Attente">ATTENTE</option>
                                <option value="/Gestion-Commande/?Valeur=Production">PRODUCTION</option>
                                <option value="/Gestion-Commande/?Valeur=Terminer">TERMINER</option>
                            </select>
                        </div>
                        <a href="/Nouvelle-Commande" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; AJOUTER COMMANDE</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tissue
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Date Livraison
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Etat
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Montant
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Client
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tailleur
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Commande as $C)
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{$C->id}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$C->Tissue}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$C->DateLivraison}}</p>
                                    </td>
                                    <td class="text-center">
                                        @if($C->Etat == "ATTENTE")
                                        <span class="text-danger text-xs font-weight-bold">{{$C->Etat}}</span>
                                        @endif
                                        @if($C->Etat == "PRODUCTION")
                                        <span class="text-info text-xs font-weight-bold">{{$C->Etat}}</span>
                                        @endif
                                        @if($C->Etat == "TERMINER")
                                        <span class="text-success text-xs font-weight-bold">{{$C->Etat}}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$C->Montant.' FR CFA'}}</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$C->Clients->Utilisateurs->name}}</span>
                                    </td>
                                    <td class="text-center">
                                        @if($C->IdEmployer == 0)
                                        <span class="text-secondary text-xs font-weight-bold">EN ATTENTE</span>
                                        @else
                                        <span class="text-secondary text-xs font-weight-bold">{{$C->Employers->Utilisateurs->name}}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($C->IdEmployer == 0)
                                        <a href="/Attribuer-Commande/?Id={{$C->id}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Attribuer">
                                            <i class="fa fa-share text-secondary" aria-hidden="true"></i>
                                        </a>
                                        @endif
                                        <a href="" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Modifier">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <a href="" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Supprimer">
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
