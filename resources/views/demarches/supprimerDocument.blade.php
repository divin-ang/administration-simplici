@extends('layouts.app')


@section('content')
<div class="container">
<link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Liste des documents') }} {{ $document->annex_document_name}}</div>

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
                    <div class="row">
                        
                            <div class="row">
                                <p >Voulez vous vraiement supprimer le document:{{$document->annex_document_name}}  de la base des données ?</p>
                            </div>
              
                         
                            <a href="{{ url('demarche/documents') }}"  class="col">Annuler</a>
                            <a href="{{ url('demarche/documents/supprimer-partout/'.$document->annex_document_id) }}" class="col">Supprimer</a>
                      

                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>
</div>
@endsection
