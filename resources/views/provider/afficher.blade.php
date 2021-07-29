@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" >
<div class="provider">
    <div class="row justify-content-center">
        <div class="col-md-11">
           <a href="{{ url('/utilisateurs') }}" class="user_link ">Gérer les utilisateurs</a>
                             <a href="{{ url('/provider'.'/supprimer') }}" class="user_link">Supprimer une démarche de toutes les sous catégories</a>
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
               

                 @foreach($providers as $provider)
                     <div class='row item'>
                     <span class="col-4 name">  {{$provider->provider_proposed_by}} : {{$provider->provider_service}}</span>
                     <a href="{{ url('provider/'.$provider->provider_id.'/'.$provider->provider_service) }}" class=" col-4 afficher">Afficher les sous catégories</a>
                     <a href="{{ url('provider/changer/'.$provider->provider_id.'/'.$provider->provider_name) }}" class="col-2 modifier">Modifier</a>
                 </div>
                     @endforeach
                 
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
