@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/sousCategorie.css') }}" >
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{$container_name}} : {{ __('Liste des sous catégories') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

               
                </div>
                <div>
                 <div>
                

                <div class="item">
                  <a href="{{ url('sous-categorie/creer/'.$sousCategory[0]->container_id.'/'.$sousCategory[0]->subcontainer_name) }}" class="ajouter">Ajouter une nouvelle sous catégorie</a>
                </div>
                 
                 @foreach($sousCategory as $sous_categorie)
                  
                   
                    <div class="item row"> <span class="name col-6"> {{$sous_categorie->subcontainer_name}}</span>
                    <a href="{{ url('demarches/'.$sous_categorie->subcontainer_id.'/'.$sous_categorie->subcontainer_name) }}" class="col-3 afficher">Afficher les démarches</a>
                     <a href="{{ url('sous-categorie/modifier/'.$sous_categorie->subcontainer_id.'/'.$container_name.'/'.$sous_categorie->subcontainer_name) }}" class="col modifier" >Modifier</a>
                      <a href="{{ url('sous-categorie/supprimer/'.$sous_categorie->subcontainer_id.'/'.$sous_categorie->container_id) }}" class="col supprimer">supprimer</a>
                      </div>
                     @endforeach

                    
                 
                 </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
