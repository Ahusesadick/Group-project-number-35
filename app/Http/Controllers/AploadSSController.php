<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aploaddd;
use Illuminate\Support\Facades\Stroage;

class AploadSSController extends Controller
{
    public function uploadpagess()
    {
        
        return view('aploadss');
 
    }

    public function storess(Request $request)
    {
        $data=new aploaddd();
   	
   	  
        $file=$request->file;
            
        $filename=time().'.'.$file->getClientOriginalExtension();

        $request->file->move('ass',$filename);

        $data->file=$filename;


        $data->name=$request->name;
            

        $data->save();
        if( $request ){
            return redirect()->back()->with('success','file upploded successfull');

        }else{
            return redirect()->back()->with('fall','something went wrong, failed to upload');
        }
            
 
    }

    public function showss()
   {

   	$data=aploaddd::all();
   	return view('showaploadss',compact('data'));
   }

   public function downloadss(Request $request,$file)
   {

   	
        return response()->download(public_path('ass/'.$file));
   }

   public function viewss($id)
   {
   	$data=aploaddd::find($id);

   	return view('viewaploadss',compact('data'));


   }
}
