@extends('layouts.app')

@section('content')
<script src="{!!url('/js/jquery.min.js')!!}"></script>
<script type="text/javascript">
    $('.btn-suppression').click(function (e) { 
        $('.suppression').css({display:'block'})
        $('.btn-suppression').css({display:'none'})
       
        
    })
</script>

<link rel="stylesheet" type="text/css" href="{{ asset('css/sousCategorie.css') }}" >
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{$subcontainer_name}} :{{ __('Liste des démarches') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
                <div>
                 <div>
               

                 <div class="item row">
                  <a href="{{ url('demarche/creer/'.$subcontainerId.'/'.$subcontainer_name) }}" class="ajouter col-4">Créer une nouvelle démarche</a>
                  <a href="{{ url('demarche/ajouter/'.$subcontainerId.'/'.$subcontainer_name) }}" class="ajouter col-4">Ajouter une  démarche existante à cette sous catégorie</a></div>

                 @foreach($demarches as $demarche)
                   
                   
                      <div class="item row">
                        <span class="name col-8">  {{$demarche->process_name}}</span>
                    <a href="{{ url('demarche/modifier/'.$demarche->process_id.'/'.$subcontainerId) }}" class="col modifier">Modifier</a>
                    <a href="{{ url('demarche/documents/'.$demarche->process_id) }}" class="col modifier"> documents</a>
                     <button class="btn-suppression"> supprimer</button>
                       <div  class="suppression" style="display: none;">
                        <a href="{{ url('demarche/supprimer/'.$demarche->process_id.'/'.$subcontainerId) }}" class="col supprimer">Supprimer</a>
                       </div>
                    </div>
       
                     @endforeach
                     
                 
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
