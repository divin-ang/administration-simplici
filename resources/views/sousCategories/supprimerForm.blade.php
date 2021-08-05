@extends('layouts.app')

@section('content')
<div class="container">
<link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('') }} {{ $sous_categorie->subcontainer__name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}
                </div>
                <div>
                 <div>
                    <h2>Voulez vous vraiement supprimer la sous catégorie :{{$sous_categorie->subcontainer_name}} ?</h2>
                  
                        <div class="row">
                            <a href="{{ url('categorie/'.$sous_categorie->container_id.'/'.$container_name) }}" class=" col-4 afficher">Annuler</a>
                            <a href="{{ url('sous-categorie/supprimer/'.$sous_categorie->subcontainer_id.'/'.$sous_categorie->container_id) }}" class="col supprimer">supprimer</a>
                     
                        </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
