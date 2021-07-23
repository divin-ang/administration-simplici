@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Se connecter') }}</div>

                <div class="card-body">
                   

         <form  action="{{url('demarche/creer/'.$subcontainerId.'/')  }}" method="POST">
         @csrf
         <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
         <div class="col-md-6">
          <input type='text' class="form-control"  name="nom" required />
          </div>
         </div>
          <div class="form-group row">
         <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>
         <div class="col-md-6">
          <input type='text' class="form-control"  name="description" required />
          </div>
     
         </div>

            <div class="form-group row">
                <label for="draft_mode " class="col-md-4 col-form-label text-md-right">{{ __('posibilité de réprendre') }}</label>
           
           <div class="col-md-6">
                 <select class="form-control "  name="draft_mode" required >

              <option value="0">Non</option>
              <option value="1">Oui</option>
    
             </select>
        
          </div> 
             
          
          </div>





          <div class="form-group row">
                <label for="draft_mode " class="col-md-4 col-form-label text-md-right">{{ __('Origine de la démarche') }}</label>
           
           <div class="col-md-6">
                 <select class="form-control "  name="providerId" required >

                      @foreach($providers as $provider)
                        <option value="{!!$provider->provider_id !!}">{{$provider->provider_proposed_by}}</option>
                       
                      @endforeach
             </select>
        
          </div> 
             
          
          </div>



         
           



           <div class="form-group row">
         <label for="link" class="col-md-4 col-form-label text-md-right">{{ __('Url') }}</label>
         <div class="col-md-6">
          <input type='text' class="form-control"  name="link" required />
          
          
          </div>

           </div>
           <div class="form-group row">
         <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Durée') }}</label>
         <div class="col-md-6">
          <input type='text' class="form-control"  name="duration" required />
          
          
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
