@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/sousCategorie.css') }}" >
<div class="container">

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header h1">Tutoriel</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

            
            </div>
            <div>
                <div>
            


                  <div>
                      <ul>
                          <ol>
                            <a href="#categorie h2">Les catégories</a>
                            
                          </ol>
                          <ol>
                            <a href="#sous-categorie">Les sous catégories</a>
                            <ul>
                                <ol> <a href="#afficher-sous-categorie"></a> Afficher les sous catégories</ol>
                                <ol><a href="#modifier-sous-categorie"></a> Modifier une sous catégorie</ol>
                                <ol><a href="#ajouter-sous-categorie"></a> Modifier une sous catégorie</ol>

                            </ul>
                           
                          </ol>
                          <ol>
                            <a href="#demarche h2">Les démarches</a>
                            <ul>
                                <ol><a href="#afficher-demarche"></a>Afficher les démarches</ol>
                                <ol><a href="#modifier-demarche"></a>Modifier une démarche</ol>
                                <ol><a href="#creer-demarche"></a>Créer une démarche</ol>
                                <ol><a href="#dupliquer-demarche"></a>Dupliquer une démarche</ol>

                            </ul>
                            
                          </ol>
                          <ol>
                            <a href="#fournisseur h2">Les fournisseurs</a>
                          </ol>
                      </ul>
                  </div>
                <div class="item text-center">
                <div> 
                    <h2 class="tutoriel-title h2" id="categorie">Modifier une catégorie</h2>
                    <p>Les catégories correspondent aux rubriques de la page d'accueil. <br>
                        
                    
                    </p>
                    <div class="row">


                        <img src="{{ asset('image/site-accueil.png') }}" alt="accueil" class="col-md-10">
                        <p class="h5"> Pour modifier une catégorie : cliquer sur le bouton modifier à droite du nom de la catégorie concernée.</p>
                        <img src="{{ asset('image/cat-modifier.PNG') }}" alt="accueil" class="  col-md-10">

                    
                    </div>
                    <p class="h5">Il suffit de modifier les informations contenues dans le formulaire qui s'affiche et de cliquer sur valider.</p>
                    <img src="{{ asset('image/cat-form.PNG') }}" alt="accueil" class="col-md-10 ">
                    <img src="{{ asset('image/site-modifier-cat.png') }}" alt="accueil" class="col-md-10">
                    </div>

            
                
                        </div>
                
                </div>
            </div>
            <div class="item text-center">
                  <h2 class="h2" id="sous-categorie">  Les sous catégories.</h2>
                  <p>Chaque rubrique de la page d'accueil est composée des sous catégories elles mêmes contenant les démarches.</p>
                  <p>
                      L'administration permet d'ajouter une sous catégorie à une rubrique, de modifier le nom d'une sous catégorie existante ou encore de supprimer la sous catégories.
                      <ul>
                         <ol>
                             <h2 class="h3">Afficher les sous catégorie.</h2>
                             <p> Pour afficher les sous catégories d'une rubrique: cliquer sur le bouton afficher les sous catégorie à droite du nom de la rubrique.</p>
                             <img src="{{ asset('image/afficher-sous-categorie.png') }}" alt="accueil" class="col-md-10">
                            
                         </ol>
                         <ol>
                            <h2 class="h3">Ajouter une sous catégorie</h2>
                            <p class="h5"> Pour ajouter une sous catégorie  dans une rubrique: cliquer sur le bouton ajouter une nouvelle catégorie les sous catégorie</p>
                            <img src="{{ asset('image/sous-cat-aff.PNG') }}" alt="accueil" class="col-md-10">
                            <img src="{{ asset('image/site-sous-categorie.PNG') }}" alt="accueil" class="col-md-10">
                        </ol>
                      </ul>
                  </p>
            </div>




            <div class="item text-center">
                <h2 class="h2" id="demarche">  Les démarches</h2>
                <p>Les démarches sont regroupées en sous catégories</p>
                <p>
                    L'administration permet de créer une nouvelle  démarche dans une sous catégorie donnée, de modifier une démarche existante,de supprimer une démarche d'une sous catégorie. Il est également possible de dupliquer une démarche: c'est à dire ajouter une démarche qui existe dans une autre sous catégorie.
                    <ul>
                       <ol>
                           <h2 class="h3">Afficher les démarches</h2>
                           <p> Pour afficher les démarches d'une sous catégorie: cliquer sur le bouton afficher les démarches à droite du nom de la sous catégorie.</p>
                           <img src="{{ asset('image/afficher-demarches.png') }}" alt="afficher les demarches" class="col-md-10">
                           
                       </ol>
                       <ol>
                          <h2 class="h3">Ajouter une démarche</h2>
                          <p> Pour ajouter une démarche  dans une sous catégorie: cliquer sur le bouton  créer une nouvelle démarche</p>
                          <img src="{{ asset('image/demarche-page.PNG') }}" alt="accueil" class="col-md-10">
                          <p class="h5">Ensuite completer le formulaire et cliquer sur valider.</p>
                          <img src="{{ asset('image/creer-demarche.PNG') }}" alt="accueil" class="col-md-10">
                         
                          <img src="{{ asset('image/site-modifier-demarche.png') }}" alt="accueil" class="col-md-10">
                      </ol>

                      <ol>
                        <h2 class="h2">Dupliquer une démarche</h2>
                        <p class="h5"> Pour dupliquer  une démarche existante dans une sous catégorie: cliquer sur le bouton ajouter créer une démarche existante à cette sous catégorie</p>
                        <img src="{{ asset('image/ajouter-demarche.PNG') }}" alt="accueil" class="col-md-10">
                         <p class="h5">Sélectionner une démarche et cliquer sur valider.</p>
                    </ol>
                    </ul>
                </p>
          </div>

          <div class="item text-center padding-xl ">
            <h2 class="h2" id="fournisseur">Les fourniseurs des démarches</h2>
            <p class="padding-xl ">Sont appéllés ici fournisseur les administrations d'où proviennent les démarches (Ville de chambéry, Grand Chambéry, CCAS, etc.</p>
            <p>
                L'administration permet de modifier les informations d'un fournisseur.
                <ul>
                   <ol>
                       <h2 class="h2">Afficher les fournisseurs</h2>
                       <p class="padding-xl h5"> Pour afficher les fournisseurs des démarches, sur la page d'accueil cliquer sur les fournisseur des démarches.</p>
                       <img src="{{ asset('image/afficher-fournisseur.PNG') }}" alt="afficher les demarches" class="col-md-10">
                        
                   </ol>
                   <ol class="padding-xl ">
                      <h2>Modifier les informations d'un fournisseur </h2>
                      <p class="padding-xl "> Cliquer sur le bouton modifier à droite du nom du fourniseur.</p>
                      <img src="{{ asset('image/liste-fourniseur.PNG') }}" alt="accueil" class="col-md-10 ">
                      <p class="padding-xl ">Ensuite completer le formulaire en pretant une attention aux champs horaires. <br>
                    les plages horaires de chaque jour sont séparés par des point-virgule (;), Vous pouver ajouter du texte en le mettant entre guillemets. <br>
                L'ordre des plages horaires correpond aux jours de la semaine( le premier lundi et 7ème dimanche <br>il est possible d'ajouter fermée en lieu et place d'une plage de temps.</p>
                      <img src="{{ asset('image/fournisseur-modifier.PNG') }}" alt="accueil" class="col-md-10">
                     
                      <img src="{{ asset('image/site-modifier-fourniseur.png') }}" alt="accueil" class="col-md-10">
                  </ol>

                 
                </ul>
            </p>
      </div>
    </div>
</div>
</div>
@endsection
