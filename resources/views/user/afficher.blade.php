@extends('layouts.app')

@section('content')
<div class="container">
<link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Les utilisateurs') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                            
                                    <a class="nav-link" href="{{ route('compte') }}">{{ __('Créér un compte') }}</a>
                               
                        
                </div>
                <div>
                 <div>
               

                 @foreach($users as $user)
                     <div class='row item'>
                     <span class="col">  {{$user->name}}</span>
                     <a href="{{ url('utilisateur/modifier/'.$user->id) }}" class="col modifier">modifier les autorisations</a>
                     <a href="{{ url('utilisateur/supprimer/'.$user->id) }}" class="col supprimer">supprimer l'utilisateur</a>
                 </div>
                     @endforeach
                 
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
