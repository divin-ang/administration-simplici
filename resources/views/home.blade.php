@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" >
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Liste des catégories') }}   </a>
                                              <a class="dropdown-item" href="{{ route('getuser') }}">
                                   Gerer les utilisateurs    
                             </a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  
                </div>
                <div>
                 <div>
                 @php 
                 $i = 1
                 @endphp

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
