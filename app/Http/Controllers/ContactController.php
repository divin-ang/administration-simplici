<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Redirect;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller
{

    public function index(){

        return view('auth/nouveau');
    
    }

    public function create(Request $request)
  {
    $validator = Validator::make($request->all(), [
        'name'  => 'required|max:255',
        'email' => 'required|email|unique:users',
      ]);

      // If validator fails, short circut and redirect with errors
      if($validator->fails()){
        return back()
          ->withErrors($validator)
          ->withInput();
      }

      //generate a password for the new users
      $pw = User::generatePassword();
     
      
      DB::table('users')
      ->updateOrInsert(['name'=>$request->name,'email'=>$request->email]);
      //add new user to database
    
      User::sendWelcomeEmail($user);

      return Redirect::to('home');
  }
}
