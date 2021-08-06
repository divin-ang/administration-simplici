@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

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

                 @foreach($categories as $categorie)
                     <div class='row'>
                     <span>  {{$categorie->container_name}}</span>
                     <a href="{{ url('categorie/'.$categorie->container_id.'/'.$categorie->container_name) }}" class="btn btn-dark">Afficher les sous catégories</a>
                     <a href="{{ url('categorie/changer/'.$categorie->container_id.'/'.$categorie->container_name) }}" class="btn btn-secondary">Modifier</a>
                 </div>
                     @endforeach
                 
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
