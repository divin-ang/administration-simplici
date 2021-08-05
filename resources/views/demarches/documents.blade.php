@extends('layouts.app')

@section('content')
<div class="container">
<link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Liste des documents') }} </div>

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
                    
              
                </div>
                 @foreach($documents as $document)
                     <div class='row item'>
                     <span class="col-9">  {{$document->annex_document_name}}</span>
                    
                     <a href="{{ url('demarche/documents/supprimer-document/'.$document->annex_document_id) }}" class="col supprimer">supprimer</a>
                 </div>
                     @endforeach
                 
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
