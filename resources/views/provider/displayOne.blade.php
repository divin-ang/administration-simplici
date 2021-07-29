@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> </div>

                <div class="card-body">
                   

        
         @csrf
        
         <h3> {{ __('Nom') }}</h3>
        
          <p>  {{$provider->provider_proposed_by}}</p>
    
         <h3>{{ __('service') }}</h3>
         
          <p> {{$provider->provider_service}} </p>
       
         
         <h3>{{ __('Contacts téléphoniques') }}</h3>
         
          <p>{{$provider->provider_phone}}</p>
         
         
         
         
         <h3>{{ __('Horaire d\'appel') }}</h3>
    
          <p> {{$provider->provider_phone_timetable}}</p>
          


          
         <h3>{{ __('Adresse postale') }}</p>
         
          <p>{{$provider->provider_postal_address}}</p>
         

         <h3>{{ __('Rende-vous') }}</h3>
        
          <p>{{$provider->provider_postal_address_timetable_rdv}}</p>
        


          <h3>{{ __('Url de contact') }}</h3>
         
          <p> {{$provider->provider_write_online}}</p>
          
        
         </div>
        

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
