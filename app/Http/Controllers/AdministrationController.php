<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministrationController extends Controller
{
    //
    function get(){
        $categories = DB::table('containers')
       

        

        ->get();

        return view('admin/accueil',['categories'=>$categories]);
    }
    function  getCategory($id,$name){
        $Souscategories = DB::table('subcontainer')
        ->where('subcontainer.container_id', '=', $id)
        ->get();
        return view('admin/categorie',['sousCategory'=>$Souscategories,'container_name'=>$name]);

    }
    function getDemarches($id){
        $processes = DB::table('subcontainer')
        ->where('subcontainer.subcontainer_id' ,'=',$id)
        ->join('subcontainer_process', 'subcontainer_process.subcontainer_id', '=', 'subcontainer.subcontainer_id')
        
        ->join('processes', 'processes.process_id', '=', 'subcontainer_process.process_id')
        
        ->select('processes.*')

        

        ->get();
        $subcontainer_name=DB::table('subcontainer')
        ->where('subcontainer_id',$id)
        ->get();

        return view('admin/demarches',['demarches'=>$processes,'subcontainerId'=>$id,'subcontainer_name'=>$subcontainer_name[0]->subcontainer_name]);
        
    }
    public function getProviders()
    {
        //
        $categories = DB::table('containers')
       

        

        ->get();

        return view('admin/accueil',['categories'=>$categories]);
        $providers =DB::table('providers')
        ->get();
        return  view('admin/provider',['providers'=>$providers]);
     
    }
    public function tutoriel (){
        return view('tutoriel/tutoriel');
    }

    
}
