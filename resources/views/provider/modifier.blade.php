@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> </div>

                <div class="card-body">
                   

         <form  action="{{url('services/modifier/'.$provider->provider_id.'/'.$provider->provider_proposed_by)  }}" method="POST">
         @csrf
         <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
         <div class="col-md-6">
          <input type='text' class="form-control" value='{{$provider->provider_proposed_by}}' name="nom" required />
          </div>
         </div>
          <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('service') }}</label>
         <div class="col-md-6">
          <input type='text' class="form-control" value='{{$provider->provider_service}}' name="service" required />
          </div>
         </div>


          <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Contacts téléphoniques') }}</label>
         <div class="col-md-6">
          <textarea cols="60" rows="7" class="form-control" value='' name="phone"  >{{$provider->provider_phone}}</textarea>
          </div>
         </div>
         
         
          <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Horaire d\'appel') }}</label>
         <div class="col-md-6">
          <textarea  cols="60" rows="7" class="form-control" value='{{$provider->provider_phone_timetable}}' name="horaires"  ></textarea>
          </div>
         </div>


          <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Adresse postale') }}</label>
         <div class="col-md-6">
          <textarea cols="60" rows="7"  value='{{$provider->provider_postal_address}}' name="adresse" ></textarea>
          </div>
         </div>


          <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Horaires Accueil') }}</label>
         <div class="col-md-6">
          <textarea  cols="60" rows="7"   class="form-control" value='{{$provider->provider_postal_address_timetable}}' name="accueil"></textarea>
          </div>
         </div>


         
          <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Rende-vous') }}</label>
         <div class="col-md-6">
          <input  type='url'  class="form-control" value='{{$provider->provider_postal_address_timetable_rdv}}' name="rdv"/>
          </div>
         </div>


         
          <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Url de contact') }}</label>
         <div class="col-md-6">
          <input  type='url' class="form-control" value='{{$provider->provider_write_online}}' name="url" />
          </div>
         </div>
         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
         </div>
         
         </div>
        

</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
