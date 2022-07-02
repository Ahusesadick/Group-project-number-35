<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aploadstudent;
use Illuminate\Support\Facades\Stroage;

class AploadStudentController extends Controller
{
    public function uploadpagestudent()
    {
        
        return view('aploadstudent');
 
    }

    public function storestudent(Request $request)
    {
        $data=new aploadstudent();
   	
   	  
        $file=$request->file;
            
        $filename=time().'.'.$file->getClientOriginalExtension();

        $request->file->move('asset',$filename);

        $data->file=$filename;


        $data->name=$request->name;
            

        $data->save();
        if( $request ){
            return redirect()->back()->with('success','file apploded successfull');

        }else{
            return redirect()->back()->with('fall','something went wrong, failed to apload');
        }
            
 
    }

    public function showstudents()
   {

   	$data=aploadstudent::all();
   	return view('showaploadstudent',compact('data'));
   }

   public function downloadstudent(Request $request,$file)
   {

   	
        return response()->download(public_path('asset/'.$file));
   }

   public function viewstudent($id)
   {
   	$data=aploadstudent::find($id);

   	return view('viewaploadstudent',compact('data'));


   }
}
