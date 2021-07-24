<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProcessController extends Controller
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
    public function storeForm($id)
    {
        //
        $providers =DB::table('providers')
        ->distinct()
        ->get();
        return view('demarches/creer',['subcontainerId'=>$id,'providers'=>$providers]);
    }
    public function store(Request $request,$id)
    {
        //
      
        $processId = DB::table('processes')->insertGetId(['process_name'=>$request->nom,'process_link'=>$request->link,'process_draft_mode'=>$request->draft_mode,'provider_id'=>$request->providerId,'process_duration'=>$request->duration]);
         
        DB::table('subcontainer_process')
        ->Insert(['process_id'=>$processId,'subcontainer_id'=>$id]);
        $processes = DB::table('subcontainer')
        ->where('subcontainer.subcontainer_id' ,'=',$id)
        ->join('subcontainer_process', 'subcontainer_process.subcontainer_id', '=', 'subcontainer.subcontainer_id')
        
        ->join('processes', 'processes.process_id', '=', 'subcontainer_process.process_id')
        
        ->select('processes.*')

        ->get();

        return view('admin/demarches',['demarches'=>$processes,'subcontainerId'=>$id]);
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
    public function update(Request $request, $id,$subcontainerId)
    {
        //
        DB::table('processes')
        ->where('process_id', $id)  
       
        ->update(['process_name'=>$request->nom,'process_link'=>$request->link,'process_draft_mode'=>$request->draft_mode,'provider_id'=>$request->providerId,'process_duration'=>$request->duration]);  // update the record in the DB. 
        
        $processes = DB::table('subcontainer')
        ->where('subcontainer.subcontainer_id' ,'=',$subcontainerId)
        ->join('subcontainer_process', 'subcontainer_process.subcontainer_id', '=', 'subcontainer.subcontainer_id')
        
        ->join('processes', 'processes.process_id', '=', 'subcontainer_process.process_id')
        
        ->select('processes.*')

        ->get();
        
        $subcontainerName = DB::table('subcontainer')
        ->where('subcontainer_id', $subcontainerId)  
        ->get();
        return redirect()->route('demarches', ['id' => $subcontainerId,'name'=>$subcontainerName[0]->subcontainer_name]);

        //return view('admin/demarches',['demarches'=>$processes,'subcontainerId'=>$subcontainerId]);
     
    }

    public function updateForm(Request $request, $id,$subcontainerId)
    {
        //
        $process =DB::table('processes')
        ->where('process_id',$id)
        ->get();
        $providers =DB::table('providers')
        ->distinct()
        ->get();
        return view("demarches/modifier",['process'=>$process[0],'providers'=>$providers,'subcontainerId'=>$subcontainerId]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$subcontainerId)
    {
        //
        DB::table('processes')
        ->where('process_id',$id)
        ->delete();

        $processes = DB::table('subcontainer')
        ->where('subcontainer.subcontainer_id' ,'=',$subcontainerId)
        ->join('subcontainer_process', 'subcontainer_process.subcontainer_id', '=', 'subcontainer.subcontainer_id')
        
        ->join('processes', 'processes.process_id', '=', 'subcontainer_process.process_id')
        
        ->select('processes.*')

        ->get();

        return view('admin/demarches',['demarches'=>$processes,'subcontainerId'=>$subcontainerId]);
    }
}
