@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="container-fluid">
        <div class="page-header min-height-100 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('FORMULAIRE') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="/Aded-Categorie" method="POST" role="form text-left">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Nom" class="form-control-label">{{ __('NOM DE LE CATEGORIE') }}</label>
                                <div class="@error('Nom')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Nom" name="Nom">
                                        @error('Nom')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'AJOUTER CATEGORIE' }}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
