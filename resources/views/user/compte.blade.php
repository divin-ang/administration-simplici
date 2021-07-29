@extends('layouts.app')

@section('content')
<div class="container">
<link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Mon compte') }}</div>

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
               

                 @foreach($users as $user)
                     <div class=' item'>
                     <p class="">Nom :  {{$user->name}}</p>
                     <p class="">Email: {{$user->email}}</p>
                     @if($user->role =='admin')         
                       <p class="">Niveau d'accès: {{$user->role}}</p>
                        <a href="{{ url('utilisateur/modifier/'.$user->id) }}" class=" modifier">modifier les autorisations</a>
                
                     @endif
                     
                    
                     
                   </div>
                     @endforeach
                 
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
