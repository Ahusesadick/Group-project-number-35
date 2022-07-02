<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apload;
use Illuminate\Support\Facades\Stroage;

class AploadController extends Controller
{
    public function uploadpage()
    {
        
        return view('apload');
 
    }

    public function store(Request $request)
    {
        $data=new apload();
   	
   	  
        $file=$request->file;
            
        $filename=time().'.'.$file->getClientOriginalExtension();

        $request->file->move('assets',$filename);

        $data->file=$filename;


        $data->name=$request->name;
            

        $data->save();
        if( $request ){
            return redirect()->back()->with('success','file apploded successfull');

        }else{
            return redirect()->back()->with('fall','something went wrong, failed to apload');
        }
 
    }

    public function show()
   {

   	$data=apload::all();
   	return view('showapload',compact('data'));
   }

   public function download(Request $request,$file)
   {

   	
        return response()->download(public_path('assets/'.$file));
   }

   public function view($id)
   {
   	$data=Apload::find($id);

   	return view('viewapload',compact('data'));


   }


}
