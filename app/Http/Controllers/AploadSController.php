<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aploadd;
use Illuminate\Support\Facades\Stroage;

class AploadSController extends Controller
{
    public function uploadpages()
    {
        
        return view('aploads');
 
    }

    public function stores(Request $request)
    {
        $data=new aploadd();
   	
   	  
        $file=$request->file;
            
        $filename=time().'.'.$file->getClientOriginalExtension();

        $request->file->move('asse',$filename);

        $data->file=$filename;


        $data->name=$request->name;
            

        $data->save();
        if( $request ){
            return redirect()->back()->with('success','file apploded successfull');

        }else{
            return redirect()->back()->with('fall','something went wrong, failed to apload');
        }
            
 
    }

    public function shows()
   {

   	$data=aploadd::all();
   	return view('showaploads',compact('data'));
   }

   public function downloads(Request $request,$file)
   {

   	
        return response()->download(public_path('asse/'.$file));
   }

   public function views($id)
   {
   	$data=aploadd::find($id);

   	return view('viewaploads',compact('data'));


   }
}
