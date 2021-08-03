@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/sousCategorie.css') }}" >
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{$container_name}} : {{ __('Liste des sous catégories') }}</div>

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
                  <div> 
                      <h2 class="title">Modifier une catégorie</h2>
                      <div class="row">

                        <img src="{{URL::asset('/images/site-accueil.png')}}" alt="profile Pic" height="200" width="200">
                      </div>
                </div>

                    
                 
                 </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
