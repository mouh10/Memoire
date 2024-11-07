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
                <h6 class="mb-0">{{ __('FORMULAIRE MODEL') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="/Aded-Model" method="POST" enctype="multipart/form-data" role="form text-left">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Nom" class="form-control-label">{{ __('NOM') }}</label>
                                <div class="@error('Nom')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Nom Model" name="Nom" required>
                                        @error('Nom')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Description" class="form-control-label">{{ __('DESCRIPTION') }}</label>
                                <div class="@error('Description')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Description du Model" name="Description" required>
                                        @error('Description')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Prix" class="form-control-label">{{ __('PRIX') }}</label>
                                <div class="@error('Prix')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="number" placeholder="200 000" name="Prix" required>
                                        @error('Prix')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Image" class="form-control-label">{{ __('IMAGE') }}</label>
                                <div class="@error('Image') border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="file" name="Image" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Prix" class="form-control-label">{{ __('CATEGORIE') }}</label>
                                <div>
                                    <select name="Categorie" class="form-control" required>
                                        <option selected disabled>CHOISIR UNE CCATEGORIE</option>
                                        @foreach($Categorie as $C)
                                        <option class="text-uppercase" value="{{$C->id}}">{{$C->Nom}}</option>
                                        @endforeach
                                    </select>
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
