@extends('layouts.app')

@section('content')
<div class="container">
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
                     <a href="{{ url('categorie/'.$user->id.'/'.$user->name) }}" class="btn btn-dark">Afficher les sous catégories</a>
                     <a href="{{ url('categorie/changer/'.$user->id.'/'.$user->name) }}" class="btn btn-secondary">Modifier</a>
                 </div>
                     @endforeach
                 
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
