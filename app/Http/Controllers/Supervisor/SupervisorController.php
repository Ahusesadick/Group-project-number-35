<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Supervisor;
use Illuminate\Support\Facades\Auth;

class SupervisorController extends Controller
{
    function create(Request $request)
   {
       $request->validate([
           'name'=>'required',
           'email'=>'required|email|unique:supervisors,email',
           //'email' => ['bail','required', 'string', 'email:dns', 'max:255', 'unique:users'],
           'PhoneNo'=>'required|max:255',
           'Orgname'=>'required|max:255',
           'Orglocation'=>'required|max:255',
           'password'=>'required|min:5|max:30',
           'cpassword'=>'required|min:5|max:30|same:password'
       ]);

           $supervisor = new Supervisor();
           $supervisor->name = $request->name;
           $supervisor->email = $request->email;
           $supervisor->PhoneNo = $request->PhoneNo;
           $supervisor->Orgname = $request->Orgname;
           $supervisor->Orglocation = $request->Orglocation;
           $supervisor->password = \Hash::make($request->password);
           $save = $supervisor->save();
           
   
           if( $save ){
               return redirect()->back()->with('success','you are now registered successfully as Supervisor');
   
           }else{
               return redirect()->back()->with('fall','something went wrong, failed to register');
           }
    }

    function check(Request $request){

        $request->validate([
            //'email' => ['bail','required', 'string', 'email:dns', 'max:255', 'exits:users'],
            //'email' => 'email:rfc,dns',
            //'e-mail'=>'required|email|exits:users,email',
            'email' => 'exists:mysql.supervisors,email',
            'password'=>'required|min:5|max:30'
        ],[
            'email.exits'=>'This email does not exits in supervisors table'
        ]);
    
        $creds = $request->only('email','password');
    
        if( Auth::guard('supervisor')->attempt($creds)){
            return redirect()->route('supervisor.home');
    
        }else{
            return redirect()->route('supervisor.login')->with('fail','incorrect credentials');
        }
       }

       function logout(){
        Auth::guard('supervisor')->logout();
        return redirect('/');
    }
}
