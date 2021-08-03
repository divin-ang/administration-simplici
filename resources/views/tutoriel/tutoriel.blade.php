@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/sousCategorie.css') }}" >
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tutoriel</div>

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
                      <h2 class="title">Modifier une catégori</h2>
                      <div class="row">

                        <img src="{{ asset('image/site-accueil.png') }}" alt="accueil" class="col img-fluid">
                        <img src="{{ asset('image/cat-form.png') }}" alt="accueil" class="col img-fluid">
                      </div>
                </div>

                    
                 
                 </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
