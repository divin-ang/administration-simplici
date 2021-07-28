@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/sousCategorie.css') }}" >
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Liste des démarches') }}</div>

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
             
                 @foreach($demarches as $demarche)
                   
                   
                      <div class="item row">
                        <span class="name col-8">  {{$demarche->process_name}}</span>
                    
                     <a href="{{ url('demarche/supprimer/'.$demarche->process_id) }}" class="col-2 modifier">Supprimer</a>
                    </div>
       
                     @endforeach
                     
                 
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
