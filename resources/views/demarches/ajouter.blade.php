@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter une démarche existante dans cette sous catégorie') }}</div>

                <div class="card-body">
                   

         <form  action="{{url('demarche/ajouter/'.$subcontainer_id)  }}" method="POST">
         @csrf
       
        <div class="form-group row">
               <div>
                 <label for="providerId" class="col col-form-label text-md-right">{{ __('Selectionner la démarche que vous souhaiter ajouter à la sous catégorie') }}</label>
               </div>
           
           <div class="col-md-12">
             <select class="form-control "  name="process_id" required >

                      @foreach($demarches as $demarche)
                        <option value="{!! $demarche->process_id !!}">{{$demarche->process_name}}</option>
                       
                @endforeach
             </select>
        
        
          </div> 

          
             
          
          </div>

         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
         </div>



         

       </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
