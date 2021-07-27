@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modifier le statut') }}</div>

                <div class="card-body">
                   

         <form  action="{{url('utilisateur/modifier/'.$user->id)  }}" method="POST">
         @csrf
         <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
         <div class="col-md-6">
          <input type='text' class="form-control" value='{{$user->name}}' name="nom" required />
          </div>
         </div>
         <div class="form-group row">
         <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
         <div class="col-md-6">
          <input type='email' class="form-control" value='{{$user->email}}' name="email" required />
          </div>
         </div>
         
            <div class="form-group row">
                <label for="draft_mode " class="col-md-4 col-form-label text-md-right">{{ __('Niveau d\'accès') }}</label>
           
           <div class="col-md-6">
                 <select class="form-control " value='{{$user->role}}' name="role" required >
               
              <option value="admin">Administrateur</option>
              <option value="user">utilisateur simple</option>

    
             </select>
        
          </div> 
         
       
         </div>
         
         </div>
		   <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
        

</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
