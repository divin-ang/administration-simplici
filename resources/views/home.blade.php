@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" >
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           <a href="{{ url('/utilisateurs') }}" class="user_link ">Gérer les utilisateurs</a>
           <a href="{{ url('/services'.'/liste') }}" class="user_link ">Les fourniseurs des démarches</a>
           <a href="{{ url('/tutoriel') }}" class="user_link ">Tutoriel</a>
           <a href="{{ url('/demarche'.'/documents') }}" class="user_link ">supprimer un document</a>
                             <a href="{{ url('/demarche'.'/supprimer') }}" class="user_link">Supprimer une démarche</a>
            <div class="card">
            
                             
                          
            </div>

                <div class="card-body">
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  
                </div>
                <div>
                 <div>
               

                 @foreach($categories as $categorie)
                     <div class='row item'>
                     <span class="col-4 name">  {{$categorie->container_name}}</span>
                     <a href="{{ url('categorie/'.$categorie->container_id.'/'.$categorie->container_name) }}" class=" col-4 afficher">Afficher les sous catégories</a>
                     <a href="{{ url('categorie/changer/'.$categorie->container_id.'/'.$categorie->container_name) }}" class="col-2 modifier">Modifier</a>
                 </div>
                     @endforeach
                 
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
