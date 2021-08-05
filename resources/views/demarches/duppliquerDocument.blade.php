@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter un document existant ') }}</div>

                <div class="card-body">
                   

         <form  action="{{url('demarche/documents/dupliquer')  }}" method="POST">
         @csrf
       
        <div class="form-group row">
               <div>
                 <label for="providerId" class="col col-form-label text-md-right">{{ __('Selectionner le document que vous souhaiter ajouter à la démarche') }}</label>
               </div>
           
           <div class="col-md-12">
             <select class="form-control "  name="process_id" required >

                      @foreach($documents as $document)
                        <option value="{!! $document->annex_document_id !!}">{{$document->annex_document_name}}</option>
                       
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
