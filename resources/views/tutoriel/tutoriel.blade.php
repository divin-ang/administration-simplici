@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/tutoriel.css') }}" >
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
                        <h2 class="title">Modifier une catégorie</h2>
                        <p>Les catégories correspondent aux rubriques de la page d'accueil. <br>
                           Pour modifier une catégorie : cliquer sur le bouton modifier à droite du nom de la catégorie concernée.
                        
                        </p>
                        <div class="">

  
                          <img src="{{ asset('image/site-accueil.png') }}" alt="accueil" class="img-fluid accueil">
                          <img src="{{ asset('image/cat-modifier.PNG') }}" alt="accueil" class="  img-fluid accueil">
                          <p>Il suffit de modifier les informations contenues dans le formulaire qui s'affiche et de cliquer sur valider.</p>
                          <img src="{{ asset('image/cat-form.PNG') }}" alt="accueil" class="img-fluid accueil">
                          <img src="{{ asset('image/site-modifier-cat.png') }}" alt="accueil" class="  img-fluid accueil">
                        
                        </div>
                       
                  </div>
  
                      
                   
                   </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
