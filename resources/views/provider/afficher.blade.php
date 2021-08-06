@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" >
<div class="provider">
    <div class="row justify-content-center">
        <div class="col-md-11">
        
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
                    <a href="{{ url('services/creer')}}" class="btn btn-primary" >Créer un service</a>
                 <div>
               

                 @foreach($providers as $provider)
                     <div class='row item'>
                     <a class="col-7 name" href="{{ url('services/afficher/'.$provider->provider_id.'/'.$provider->provider_proposed_by) }}">  {{$provider->provider_proposed_by}}
                     @if(strlen($provider->provider_service)>0)
                       : {{$provider->provider_service}}
                       @endif
                       </a>
                     
                     <a href="{{ url('services/modifier/'.$provider->provider_id.'/'.$provider->provider_proposed_by) }}" class="col-2 modifier">Modifier</a>
                 </div>
                     @endforeach
                 
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
