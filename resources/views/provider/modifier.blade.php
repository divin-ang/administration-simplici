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
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>
         <div class="col-md-6">
          <input type='tel' class="form-control" value='{{$provider->provider_phone}}' name="phone"  />
          </div>
         </div>
         
          <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('service') }}</label>
         <div class="col-md-6">
          <input type='text' class="form-control" value='{{$provider->provider_service}}' name="service" required />
          </div>
         </div>
          <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Horaires Télephone') }}</label>
         <div class="col-md-6">
          <input type='text' class="form-control" value='{{$provider->provider_phone_timetable}}' name="horaires" required />
          </div>
         </div>


          <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Adresse postale') }}</label>
         <div class="col-md-6">
          <input type='text' class="form-control" value='{{$provider->provider_postal_address}}' name="adresse" required />
          </div>
         </div>


          <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Horaires Accueil') }}</label>
         <div class="col-md-6">
          <input type='text' class="form-control" value='{{$provider->provider_postal_address_timetable}}' name="service" required />
          </div>
         </div>


         
          <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Rende-vous') }}</label>
         <div class="col-md-6">
          <input type='text' class="form-control" value='{{$provider->provider_postal_address_timetable_rdv}}' name="service" required />
          </div>
         </div>


         
          <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Url de contact') }}</label>
         <div class="col-md-6">
          <input type='url' class="form-control" value='{{$provider->provider_write_online}}' name="service" required />
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
