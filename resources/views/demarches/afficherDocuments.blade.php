@extends('layouts.app')

@section('content')
<div class="container">
<link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Liste des documents') }} {{ $process->process_name}}</div>

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
               
                @if (count($documents)<1)

                    <h2>Aucun document n'est renseigné pour cette démarche. </h2>
                @endif
                <div class="row">
                    <a href="{{ url('demarche/documents/creer/'.$process->process_id) }}" class="col"> Créer  un document</a>
                    <a href="{{ url('demarche/documents/dupliquer/'.$process->process_id) }}" class="col"> Ajouter un document existant</a>
              
                </div>
                 @foreach($documents as $document)
                     <div class='row item'>
                     <span class="col-9">  {{$document->annex_document_name}}</span>
                     <a href="{{ url('demarche/documents/modifier/'.$document->annex_document_id.'/'.$process->process_id) }}" class="col"> modifier</a>
                     <a href="{{ url('demarche/documents/supprimer/'.$document->annex_document_id.'/'.$process->process_id) }}" class="col supprimer">supprimer</a>
                 </div>
                     @endforeach
                 
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
