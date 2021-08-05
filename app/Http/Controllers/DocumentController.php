<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocumentController extends Controller
{
    //
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
      public function creerDocumentForm($id){
          
           
         $process= DB::table('processes')
         ->where('processes.process_id',$id)
         ->get();
         return view('demarches/creerDocument',['process'=>$process[0]]);
      }
      public function creerDocument(Request $request,$id){
          
                   
         $documentId=DB::table('annex_documents')
         ->InsertGetId(['annex_document_name'=>$request->nom,'annex_document_link'=>$request->link]);
         DB::table('process_annex_documents')
         ->Insert(['annex_document_id'=>$documentId,'process_id'=>$id]);
         
         
         $process= DB::table('processes')
         ->where('processes.process_id',$id)
         ->get();
         $documents=DB::table('process_annex_documents')
         ->where('process_annex_documents.process_id',$id)
         ->join('annex_documents','process_annex_documents.annex_document_id','=','annex_documents.annex_document_id')
         ->get();
         return view('demarches/afficherDocuments',['documents'=>$documents ,'process'=>$process[0]]);
      }
 
 
 
      public function dupliquerDocumentForm($id){
          
           
         $process= DB::table('processes')
         ->where('processes.process_id',$id)
         ->get();
         $documents=DB::table('annex_documents')
         
         ->get();
         return view('demarches/duppliquerDocument',[ 'documents'=>$documents, 'process'=>$process[0]]);
      }
 
      public function dupliquerDocument(Request $request,$id){
          
           
        
         DB::table('process_annex_documents')
         ->Insert(['annex_document_id'=>$request->annex_document_id,'process_id'=>$id]);
         
         
         $process= DB::table('processes')
         ->where('processes.process_id',$id)
         ->get();
         $documents=DB::table('process_annex_documents')
         ->where('process_annex_documents.process_id',$id)
         ->join('annex_documents','process_annex_documents.annex_document_id','=','annex_documents.annex_document_id')
         ->get();
         return view('demarches/afficherDocuments',['documents'=>$documents ,'process'=>$process[0]]);
 
      }
 
 
      public function modifierDocumentForm($id,$processId){
 
         $process= DB::table('processes')
         ->where('processes.process_id',$id)
         ->get();
         $document=DB::table('annex_documents')
         ->where('annex_document_id',$id)
        
         ->get();
         return view('demarches/modifierDocument',[ 'annex_document'=>$document[0], 'process'=>$process[0]]);
 
      }
 
      public function modifierDocument($id,$processId){
         DB::table('annex_documents')
         ->where('annex_document_id', $id)  
        
         ->update(['annex_document_name'=>$request->nom,'annex_document_link'=>$request->link]); 
         $documents=DB::table('process_annex_documents')
         ->where('process_annex_documents.process_id',$processId)
         ->join('annex_documents','process_annex_documents.annex_document_id','=','annex_documents.annex_document_id')
         ->get();
         return view('demarches/modifierDocument',[ 'annex_document'=>$documents, 'process'=>$process[0]]);
     }
  public function supprimerDocument($id,$processId){
    DB::table('process_annex_documents')
    ->where('process_id',$processId)
    ->where('annex_document_id',$id)
    ->delete();
    $process= DB::table('processes')
    ->where('processes.process_id',$id)
    ->get();
    $documents=DB::table('process_annex_documents')
    ->where('process_annex_documents.process_id',$processId)
    ->join('annex_documents','process_annex_documents.annex_document_id','=','annex_documents.annex_document_id')
    ->select('annex_documents.*')
    ->get();
    return view('demarches/modifierDocument',[ 'annex_document'=>$documents, 'process'=>$process[0]]);

  }
}
