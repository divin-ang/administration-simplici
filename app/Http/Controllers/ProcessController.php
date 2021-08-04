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
        $demarches =DB::table('processes')
        ->get();

        return view('/demarches/demarches',['demarches'=>$demarches]);
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
    public function storeForm($id,$name)
    {
        //
        $providers =DB::table('providers')
        ->distinct()
        ->get();
        return view('demarches/creer',['subcontainerId'=>$id,'subcontainer_name'=>$name,'providers'=>$providers]);
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

        $subcontainer_name=DB::table('subcontainer')
        ->where('subcontainer_id',$id)
        ->get();

        return view('admin/demarches',['demarches'=>$processes,'subcontainerId'=>$id,'subcontainer_name'=>$subcontainer_name[0]->subcontainer_name]);
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
public function addForm($subcontainerId,$name){
    $processes = DB::table('processes')
        

        ->get();

    return view('demarches/ajouter',['demarches'=>$processes,'subcontainer_id'=>$subcontainerId,'subcontainer_name'=>$name]);
}
public function add(Request $request, $subcontainerId){

    //$processId = DB::table('processes')->insertGetId(['process_name'=>$request->nom,'process_link'=>$request->link,'process_draft_mode'=>$request->draft_mode,'provider_id'=>$request->providerId,'process_duration'=>$request->duration]);
    $processId=$request->process_id; 
        DB::table('subcontainer_process')
        ->Insert(['process_id'=>$processId,'subcontainer_id'=>$subcontainerId]);
        $processes = DB::table('subcontainer')
        ->where('subcontainer.subcontainer_id' ,'=',$subcontainerId)
        ->join('subcontainer_process', 'subcontainer_process.subcontainer_id', '=', 'subcontainer.subcontainer_id')
        
        ->join('processes', 'processes.process_id', '=', 'subcontainer_process.process_id')
        
        ->select('processes.*')

        ->get();

        $subcontainer_name=DB::table('subcontainer')
        ->where('subcontainer_id',$subcontainerId)
        ->get();

        return view('admin/demarches',['demarches'=>$processes,'subcontainerId'=>$subcontainerId,'subcontainer_name'=>$subcontainer_name[0]->subcontainer_name]);

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
        return redirect()->route('demarches', ['id' => $subcontainerId,'name'=>$subcontainerName[0]->subcontainer_name,'subcontainer_name'=>$subcontainerName[0]->subcontainer_name]);

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
        $provider_name = DB::table('providers')
        ->where('process_id',$id)
        ->join('processes','processes.provider_id','=','providers.provider_id')
        ->select('provider_proposed_by')
        ->get();
        return view("demarches/modifier",['process'=>$process[0],'providers'=>$providers,'subcontainerId'=>$subcontainerId,'provider_name'=>$provider_name[0]->provider_proposed_by]);
    }
     public function ajoutDocument($id){
       $documents= DB::table('process_annex_documents')
        ->where('process_annex_documents.process_id',$id)
        ->join('annex_documents','annex_documents.annex_document_id','=','process_annex_documents.annex_document_id')
        ->select('annex_documents.*')
        ->get();

        $process= DB::table('processes')
        ->where('processes.process_id',$id)
        ->get();

        return view('demarches/afficherDocuments',['documents'=>$documents,'process'=>$process[0]]);

     }
     public function creerForm($id){
         
          
        $process= DB::table('processes')
        ->where('processes.process_id',$id)
        ->get();
        return view('demarches/creerDocument',['process'=>$process[0]]);
     }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyEvryWhere($id){
        DB::table('processes')
        ->where('process_id',$id)
        ->delete();
        $demarches =DB::table('processes')
        ->get();

        return view('/demarches/demarches',['demarches'=>$demarches]);


    }
    public function destroy($id,$subcontainerId)
    {
        //
        DB::table('subcontainer_process')
        ->where('process_id',$id)
        ->delete();


        $processes = DB::table('subcontainer')
        ->where('subcontainer.subcontainer_id' ,'=',$subcontainerId)
        ->join('subcontainer_process', 'subcontainer_process.subcontainer_id', '=', 'subcontainer.subcontainer_id')
        
        ->join('processes', 'processes.process_id', '=', 'subcontainer_process.process_id')
        
        ->select('processes.*')

        ->get();
        $subcontainer_name=DB::table('subcontainer')
        ->where('subcontainer_id',$subcontainerId)
        ->get();

        return view('admin/demarches',['demarches'=>$processes,'subcontainerId'=>$subcontainerId,'subcontainer_name'=>$subcontainer_name[0]->subcontainer_name]);
    }

}
