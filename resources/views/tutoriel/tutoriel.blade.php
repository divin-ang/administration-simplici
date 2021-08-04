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
                    <h2 class="tutoriel-title">Modifier une catégorie</h2>
                    <p>Les catégories correspondent aux rubriques de la page d'accueil. <br>
                        
                    
                    </p>
                    <div class="row">


                        <img src="{{ asset('image/site-accueil.png') }}" alt="accueil" class="col-md-10">
                        <p> Pour modifier une catégorie : cliquer sur le bouton modifier à droite du nom de la catégorie concernée.</p>
                        <img src="{{ asset('image/cat-modifier.PNG') }}" alt="accueil" class="  col-md-10">

                    
                    </div>
                    <p>Il suffit de modifier les informations contenues dans le formulaire qui s'affiche et de cliquer sur valider.</p>
                    <img src="{{ asset('image/cat-form.PNG') }}" alt="accueil" class="col-md-10 ">
                    <img src="{{ asset('image/site-modifier-cat.png') }}" alt="accueil" class="col-md-10">
                    </div>

            
                
                        </div>
                
                </div>
            </div>
            <div>
                  <h2>  Les sous catégories.</h2>
                  <p>Chaque rubrique de la page d'accueil est composée des sous catégories elles mêmes contenant les démarches.</p>
                  <p>
                      L'administration permet d'ajouter une sous catégorie à une rubrique, de modifier le nom d'une sous catégorie existante ou encore de supprimer la sous catégories.
                      <ul>
                         <ol>
                             <h2>Afficher les sous catégorie.</h2>
                             <p> Pour afficher les sous catégories d'une rubrique: cliquer sur le bouton afficher les sous catégorie à droite du nom de la rubrique.</p>
                             <img src="{{ asset('image/afficher-sous-categorie.png') }}" alt="accueil" class="col-md-10">
                            
                         </ol>
                         <ol>
                            <h2>Ajouter une sous catégorie</h2>
                            <p> Pour ajouter une sous catégorie  dans une rubrique: cliquer sur le bouton ajouter une nouvelle catégorie les sous catégorie</p>
                            <img src="{{ asset('image/sous-cat-aff.PNG') }}" alt="accueil" class="col-md-10">
                            <img src="{{ asset('image/site-sous-categorie.PNG') }}" alt="accueil" class="col-md-10">
                        </ol>
                      </ul>
                  </p>
            </div>
    </div>
</div>
</div>
@endsection
