@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/sousCategorie.css') }}" >
<div class="container">

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header h1" id="entete">Tutoriel</div>

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
                      <ul class="tutoriel-plan">
                          <ol>
                            <a href="#categorie">Les catégories</a>
                            
                          </ol>
                          <ol>
                            <a href="#sous-categorie">Les sous catégories</a>
                            <ul>
                                <ol> <a href="#afficher-sous-categorie"> Afficher les sous catégories </a></ol>
                            
                                <ol><a href="#ajouter-sous-categorie"> Ajouter une sous catégorie </a></ol>

                            </ul>
                           
                          </ol>
                          <ol>
                            <a href="#demarche">Les démarches</a>
                            <ul>
                                <ol><a href="#afficher-demarche">Afficher les démarches</a></ol>
                              
                                <ol><a href="#creer-demarche">Créer une démarche </a></ol>
                                <ol><a href="#dupliquer-demarche">Dupliquer une démarche </a></ol>
                                <ol><a href="#ajouter-un-document">ajouter un document dans une démarche démarche </a></ol>

                            </ul>
                            
                          </ol>
                          <ol>
                            <a href="#fournisseur">Les Services</a>
                          </ol>
                          <ol>
                               <a href="#base">Connexion au serveur et à la base des données</a>
                          </ol>
                      </ul>
                  </div>
                <div class="tutoriel-item ">
                <div> 
                    <h2 class="tutoriel-title h2" id="categorie">Modifier une catégorie</h2>
                    <p class="tutoriel-p">Les catégories correspondent aux rubriques de la page d'accueil. <br>
                        
                    
                    </p>
                    <div class="row">


                        <img src="{{ asset('image/site-accueil.png') }}" alt="accueil" class="col-md-10">
                        <p class="tutoriel-p"> Pour modifier une catégorie : cliquer sur le bouton modifier à droite du nom de la catégorie concernée.</p>
                        <img src="{{ asset('image/cat-modifier.PNG') }}" alt="accueil" class="  col-md-10">

                    
                    </div>
                    <p class="tutoriel-p">Il suffit de modifier les informations contenues dans le formulaire qui s'affiche et de cliquer sur valider.</p>
                    <img src="{{ asset('image/cat-form.PNG') }}" alt="accueil" class="col-md-10 ">
                    <img src="{{ asset('image/site-modifier-cat.png') }}" alt="accueil" class="col-md-10">
                    </div>

            
                
                        </div>
                
                </div>
            </div>
            <div class="tutoriel-item ">
                  <h2 class="tutoriel-title" id="sous-categorie">  Les sous catégories.</h2>
                  <p>Chaque rubrique de la page d'accueil est composée des sous catégories elles mêmes contenant les démarches.</p>
                  <p>
                      L'administration permet d'ajouter une sous catégorie à une rubrique, de modifier le nom d'une sous catégorie existante ou encore de supprimer la sous catégories.
                      <ul>
                         <ol>
                             <h2  id="afficher-sous-categorie" class="tutoriel-title">Afficher les sous catégorie.</h2>
                             <p> Pour afficher les sous catégories d'une rubrique: cliquer sur le bouton afficher les sous catégorie à droite du nom de la rubrique.</p>
                             <img src="{{ asset('image/afficher-sous-categorie.png') }}" alt="accueil" class="col-md-10">
                            
                         </ol>
                         <ol>
                            <h2 class="tutoriel-title" id="ajouter-sous-categorie">Ajouter une sous catégorie</h2>
                            <p class="tutoriel-p"> Pour ajouter une sous catégorie  dans une rubrique: cliquer sur le bouton ajouter une nouvelle catégorie les sous catégorie</p>
                            <img src="{{ asset('image/sous-cat-aff.PNG') }}" alt="accueil" class="col-md-10">
                            <img src="{{ asset('image/site-sous-categorie.PNG') }}" alt="accueil" class="col-md-10">
                        </ol>
                      </ul>
                  </p>
            </div>




            <div class="tutoriel-item ">
                <h2 class="tutoriel-title" id="demarche">  Les démarches</h2>
                <p class="tutoriel-p">Les démarches sont regroupées en sous catégories</p>
                <p class="tutoriel-p">
                    L'administration permet de créer une nouvelle  démarche dans une sous catégorie donnée, de modifier une démarche existante,de supprimer une démarche d'une sous catégorie. Il est également possible de dupliquer une démarche: c'est à dire ajouter une démarche qui existe dans une autre sous catégorie.
                    <ul>
                       <ol>
                           <h2 class="tutoriel-title" id="afficher-demarche">Afficher les démarches</h2>
                           <p class="tutoriel-p"> Pour afficher les démarches d'une sous catégorie: cliquer sur le bouton afficher les démarches à droite du nom de la sous catégorie.</p>
                           <img src="{{ asset('image/afficher-demarches.png') }}" alt="afficher les demarches" class="col-md-10">
                           
                       </ol>
                       <ol>
                          <h2 class="tutoriel-title" id="creer-demarche">Ajouter une démarche</h2>
                          <p class="tutoriel-p"> Pour ajouter une démarche  dans une sous catégorie: cliquer sur le bouton  créer une nouvelle démarche</p>
                          <img src="{{ asset('image/demarche-page.PNG') }}" alt="accueil" class="col-md-10">
                          <p class="tutoriel-p">Ensuite completer le formulaire et cliquer sur valider.</p>
                          <img src="{{ asset('image/creer-demarche.PNG') }}" alt="accueil" class="col-md-10">
                         
                          <img src="{{ asset('image/site-modifier-demarche.png') }}" alt="accueil" class="col-md-10">
                      </ol>
                      <ol>
                        <h2 class="tutoriel-title" id="ajouter-un-document">Ajouter un document dans une démarche</h2>
                        <p class="tutoriel-p"> Pour ajouter un document à  une démarche: cliquer sur le bouton documents à droite du nom de démarche, sur la page qui s'affiche, vous avez la possibilité de créer un nouveau document ou si le document que vous souhaiter ajouter est déjà enregistré ajouter un document existant </p>
                        <img src="{{ asset('image/documents.PNG') }}" alt="accueil" class="col-md-10">
                        
                        <img src="{{ asset('image/creer-document.PNG') }}" alt="accueil" class="col-md-10">
                          <p class="tutoriel-p">Ensuite completer le formulaire et cliquer sur valider.</p>
                        <img src="{{ asset('image/document-form.PNG') }}" alt="accueil" class="col-md-10">
                    </ol>

                      <ol>
                        <h2 class="tutoriel-title" id="dupliquer-demarche" >Dupliquer une démarche</h2>
                        <p class="tutoriel-p"> Pour dupliquer  une démarche existante dans une sous catégorie: cliquer sur le bouton ajouter créer une démarche existante à cette sous catégorie</p>
                        <img src="{{ asset('image/ajouter-demarche.PNG') }}" alt="accueil" class="col-md-10">
                         <p class="tutoriel-p">Sélectionner une démarche et cliquer sur valider.</p>
                    </ol>
                    </ul>
                </p>
          </div>

          <div class="tutoriel-item  ">
            <h2 class="tutoriel-title" id="fournisseur">Les servicess</h2>
            <p class="tutoriel-p ">Sont appéllés ici fournisseur les administrations d'où proviennent les démarches (Ville de chambéry, Grand Chambéry, CCAS, etc.</p>
            <p class="tutoriel-p">
                L'administration permet de modifier les informations d'un fournisseur.
                <ul>
                   <ol>
                       <h2 class="tutoriel-title">Creer et modifier les services</h2>
                       <p class="tutoriel-p"> Pour afficher les services qui fournissent les démarches : sur la page d'accueil cliquer sur les services</p>
                       <img src="{{ asset('image/afficher-fourniseur.PNG') }}" alt="afficher les demarches" class="col-md-10">
                        
                   </ol>
                   <ol class="padding-xl ">
                      <h2 class="tutoriel-title">Modifier les informations d'un service </h2>
                      <p class="tutoriel-p"> Cliquer sur le bouton modifier à droite du nom du service.</p>
                      <img src="{{ asset('image/liste-fourniseur.PNG') }}" alt="accueil" class="col-md-10 ">
                      <p class="tutoriel-p">Ensuite completer le formulaire en pretant une attention aux champs horaires. <br>
                    les plages horaires de chaque jour sont séparés par des point-virgule (;), Vous pouver ajouter du texte en le mettant entre guillemets. <br>
                L'ordre des plages horaires correpond aux jours de la semaine( le premier lundi et 7ème dimanche <br>il est possible d'ajouter fermée en lieu et place d'une plage de temps.</p>
                      <img src="{{ asset('image/fournisseur-modifier.PNG') }}" alt="accueil" class="col-md-10">
                     
                      <img src="{{ asset('image/site-modifier-fourniseur.png') }}" alt="accueil" class="col-md-10">
                  </ol>

                 
                </ul>
            </p>
            
      </div>

      <div class="tutoriel-item">
          <h2 class="tutoriel-title">Connexion au serveur et à a base de données</h2>
          <p class="tutoriel-p"> pour se connecter à la base de données.
              <ul>
                  <ol>
                    Aller sur le site ovh en cliquant <a href="https://www.ovh.com/fr/">ici</a>
                  </ol>
                  <ol>
                      Vous connecter à compte.
                  </ol>
                  <ol>
                     <p> sur la page d'accueil, cliquer sur l'onglet web cloud sur le menu horizontal en haut de la page.</p>
                      <img src="{{ asset('image/accueil-ovh.PNG') }}" alt="accueil" class="col-md-10">
                      <p>sur la page suivante cliquer sur hébergements dans le menu vertical à gauche puis sur le nom de domaine(simpliciplus.fr)</p>
                      
                      <img src="{{ asset('image/accueil-ovh2.PNG') }}" alt="accueil" class="col-md-10">
                      <p>Sur la page suivante cliquer sur Base des données.</p>
                      <img src="{{ asset('image/accueil-ovh3.PNG') }}" alt="accueil" class="col-md-10">
                      <p>En suite cliquer sur les 3 points à du nom de la base de données </p>
                      <img src="{{ asset('image/accueil-ovh4.PNG') }}" alt="accueil" class="col-md-10">
                      <p>Puis sur PhpMyAdmin, en suite sur la page qui s'ouvre entrer les informations de connexion</p>
                      <img src="{{ asset('image/accueil-ovh5.PNG') }}" alt="accueil" class="col-md-10">

                  </ol>
              </ul>
          </p>

      </div>

      <a href="#entete" style="font-size: 17px;">Remonter en haut de la page</a>
    </div>
</div>
</div>
@endsection
