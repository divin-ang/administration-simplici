@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                   

         <form  action="{{url('demarche/modifier/'.$process->process_id.'/'.$subcontainerId)  }}" method="POST">
         @csrf
         <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
         <div class="col-md-6">
          <input type='text' class="form-control" value='{{$process->process_name}}' name="nom" required />
          </div>
         </div>
          <div class="form-group row">
         <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>
         <div class="col-md-6">
          <input type='text' class="form-control" value='{{$process->process_description}}' name="description"  />
          </div>
     
         </div>

            <div class="form-group row">
                <label for="draft_mode " class="col-md-4 col-form-label text-md-right">{{ __('posibilité de réprendre') }}</label>
           
           <div class="col-md-6">
                 <select class="form-control " value='{{$process->process_draft_mode}}' name="draft_mode" required >

              <option value='{!! $process->process_draft_mode!!}'>
                @if ($process->process_draft_mode===0)
                   Non
                    
                @else
                    Oui
                @endif
            
            </option>

            @if ($process->process_draft_mode===0)
            <option value="1">Oui</option>
             
         @else
         <option value="0">Non</option>
         @endif
             
    
             </select>
        
          </div> 
             
          
          </div>





        <div class="form-group row">
                <label for="providerId" class="col-md-4 col-form-label text-md-right">{{ __('Origine') }}</label>
           
           <div class="col-md-6">
                 <select class="form-control "  name="providerId" required >
                     <option value='{!!$process->provider_id !!}'>{{$provider_name}}</option>

                      @foreach($providers as $provider)
                       @if($process->provider_id !==$provider->provider_id)
                       <option value="{!! $provider->provider_id !!}">{{$provider->provider_proposed_by}} {{$provider->provider_service}}</option>
                       
                           
                       @endif
                @endforeach
             </select>
        
          </div> 
             
          
          </div>



         
           



           <div class="form-group row">
         <label for="link" class="col-md-4 col-form-label text-md-right">{{ __('Url') }}</label>
         <div class="col-md-6">
          <input type='text' class="form-control" value='{{$process->process_link}}' name="link" required />
          
          
          </div>

           </div>
           <div class="form-group row">
         <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Durée') }}</label>
         <div class="col-md-6">
          <input type='text' class="form-control" value='{{$process->process_duration}}' name="duration" />
          
          
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
