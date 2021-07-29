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
          <textarea cols="60" rows="5" placeholder=" Exemple : Au 04 79 96 86 70 choix 1 pour Chambéry ou au 04 79 54 53 56 pour l'Antenne des Bauges" class="form-control" value='{{$provider->provider_phone}}' name="phone"  ></textarea>
          </div>
         </div>
         
         
          <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Horaire d\'appel') }}</label>
         <div class="col-md-6">
          <textarea  cols="60" rows="5" placeholder='exemple "Antenne Chambéry :"8:00-12:00 13:30-17:30;8:00-12:00 13:30-17:30;8:00-12:00 13:30-17:30;8:00-12:00 13:30-17:30;8:00-12:00 13:30-17:30;"Antenne du Chatelard :"9:00-12:00 14:00-17:30;9:00-12:00 14:00-17:30;9:00-12:00 14:00-17:30;9:00-12:00 14:00-17:30;9:00-12:00 14:00-16:30;' class="form-control" value='{{$provider->provider_phone_timetable}}' name="horaires"  ></textarea>
          </div>
         </div>


          <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Adresse postale') }}</label>
         <div class="col-md-6">
          <textarea cols="60" rows="5" placeholder=' Exemple : Au 298 rue de Chantabord à Chambéry ou avenue Denis Therme à Le Châtelard'class="form-control" value='{{$provider->provider_postal_address}}' name="adresse" ></textarea>
          </div>
         </div>


          <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Horaires Accueil') }}</label>
         <div class="col-md-6">
          <textarea  cols="60" rows="5"  placeholder='"Antenne Chambéry (sur RDV):"8:00-12:00 13:30-17:30;8:00-12:00 13:30-17:30;8:00-12:00 13:30-17:30;8:00-12:00 13:30-17:30;8:00-12:00 13:30-17:30;"Antenne du Chatelard :"9:00-12:00 14:00-17:30;9:00-12:00 14:00-17:30;9:00-12:00 14:00-17:30;9:00-12:00 14:00-17:30;9:00-12:00 14:00-16:30;' class="form-control" value='{{$provider->provider_postal_address_timetable}}' name="service"></textarea>
          </div>
         </div>


         
          <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Rende-vous') }}</label>
         <div class="col-md-6">
          <input  type='url'  placeholder='https://formulaires.simplici.grandchambery.fr/eau/je-contacte-le-service-des-eaux/' class="form-control" value='{{$provider->provider_postal_address_timetable_rdv}}' name="service" required />
          </div>
         </div>


         
          <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Url de contact') }}</label>
         <div class="col-md-6">
          <input  type='url' class="form-control" value='{{$provider->provider_write_online}}' name="service" required />
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
