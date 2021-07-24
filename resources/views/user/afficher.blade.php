@extends('layouts.app')

@section('content')
<div class="container">
<link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Les utilisateurs') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div>
                 <div>
                 @php 
                 $i = 1
                 @endphp

                 @foreach($users as $user)
                     <div class='row'>
                     <span>  {{$user->name}}</span>
                     <a href="{{ url('utilisateur/modifier/'.$user->id.'/'.$user->name) }}" class="col modifier">modifier les autorisations</a>
                     <a href="{{ url('utlisateur/supprimer/'.$user->id.'/'.$user->name) }}" class="col supprimer">supprimer l'utilisateur</a>
                 </div>
                     @endforeach
                 
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
