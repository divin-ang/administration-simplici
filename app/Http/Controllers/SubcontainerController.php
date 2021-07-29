<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SubcontainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        //

        DB::table('subcontainer')
        ->updateOrInsert(['subcontainer_name'=>$request->nom,'container_id'=>$id]);
        $Souscategories = DB::table('subcontainer')
        ->where('subcontainer.container_id', $id)
        ->get();
        return view('admin/categorie',['sousCategory'=>$Souscategories]);
    }

    public function storeForm($id,$name)
    {
        //
        return view('sousCategories/creer',['containerId'=>$id,'container_name'=>$name]);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $containerId)
    {
        //
        DB::table('subcontainer')
        ->where('subcontainer_id', $id)  
       
        ->update(array('subcontainer_name' => $request->nom));  // update the record in the DB. 
        
        $Souscategories = DB::table('subcontainer')
        ->where('subcontainer.container_id', $containerId)
        ->get();
        return view('admin/categorie',['sousCategory'=>$Souscategories]);
     
    }

    public function updateForm(Request $request, $id,$name)
    {
        //
        $subcontainer =DB::table('subcontainer')
        ->where('subcontainer_id',$id)
        ->get();
        return view("sousCategories/modifier",['subcontainer'=>$subcontainer[0],'container_name'=>$name]);
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$containerId)
    {
        //
        DB::table('subcontainer')
        ->where('subcontainer_id',$id)
        ->delete();

        $Souscategories = DB::table('subcontainer')
        ->where('subcontainer.container_id', $containerId)
        ->get();
        return view('admin/categorie',['sousCategory'=>$Souscategories]);
    }
}
