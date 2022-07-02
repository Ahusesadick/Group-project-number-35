<?php

namespace App\Http\Controllers\Orgsupervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Orgsupervisor;
use Illuminate\Support\Facades\Auth;

class OrgsupervisorController extends Controller
{
    function create(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255|regex:/^[a-z A-Z]+$/',
            'email'=>'required|email|unique:orgsupervisors,email',
            //'email' => 'email:rfc,dns|unique:orgsupervisors,email',
            //'email' => ['bail','required', 'string', 'email:dns', 'max:255', 'unique:users'],
            //'PhoneNo'=>'required|regex:/^[-0-9\+]+$/',
            'PhoneNo' => ['required', 'digits:10'],
            'Sregion'=>'required|max:255',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $orgsupervisor = new Orgsupervisor();
           $orgsupervisor->name = $request->name;
           $orgsupervisor->email = $request->email;
           $orgsupervisor->PhoneNo = $request->PhoneNo;
           $orgsupervisor->Sregion = $request->Sregion;
           $orgsupervisor->password = \Hash::make($request->password);
           $save = $orgsupervisor->save();
           
   
           if( $save ){
               return redirect()->back()->with('success','Organization supervisor registered successfully');
   
           }else{
               return redirect()->back()->with('fall','something went wrong, failed to register');
           }
    }

    function check(Request $request){

        $request->validate([
            //'email' => ['bail','required', 'string', 'email:dns', 'max:255', 'exits:users'],
            //'email' => 'email:rfc,dns',
            //'e-mail'=>'required|email|exits:users,email',
            'email' => 'exists:mysql.orgsupervisors,email',
            'password'=>'required|min:5|max:30'
        ],[
            'email.exits'=>'This email does not exits in supervisors table'
        ]);
    
        $creds = $request->only('email','password');
    
        if( Auth::guard('orgsupervisor')->attempt($creds)){
            return redirect()->route('orgsupervisor.home');
    
        }else{
            return redirect()->route('orgsupervisor.login')->with('fail','incorrect credentials');
        }
       }

       function logout(){
        Auth::guard('orgsupervisor')->logout();
        return redirect('/');
    }
}
