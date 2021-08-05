@extends('layouts.app')


@section('content')
<div class="container">
<link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Liste des documents') }} {{ $demarche->process_name}}</div>

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
                    <h2>Voulez vous vraiement supprimer la démarche :{{$demarche->process_name}}  de la base des données ?</h2>
                  
                        <div class="row">
                            <a href="{{ url('demarches/') }}" class="col ">Annuler</a>
                           <a href="{{ url('demarche/supprimer/'.$demarche->process_id) }}" class="col supprimer">Supprimer</a>
                 
                        </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</p>
                  
                        <div class="row">
                            <a href="{{ url('demarches/') }}" class="col ">Annuler</a>
                           <a href="{{ url('demarche/supprimer/'.$demarche->process_id) }}" class="col supprimer">Supprimer</a>
                 
                        </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
