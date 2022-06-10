<?php

namespace App\Http\Controllers\Coordinator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Coordinator;
use Illuminate\Support\Facades\Auth;

class CoordinatorController extends Controller
{
    function check(Request $request){

        $request->validate([
            //'email' => ['bail','required', 'string', 'email:dns', 'max:255', 'exits:users'],
            //'email' => 'email:rfc,dns',
            //'e-mail'=>'required|email|exits:users,email',
            'email' => 'exists:mysql.coordinators,email',
            'password'=>'required|min:5|max:30'
        ],[
            'email.exits'=>'This email does not exits in coordinators table'
        ]);
    
        $creds = $request->only('email','password');
    
        if( Auth::guard('coordinator')->attempt($creds)){
            return redirect()->route('coordinator.home');
    
        }else{
            return redirect()->route('coordinator.login')->with('fail','incorrect credentials');
        }
       }

       function logout(){
        Auth::guard('coordinator')->logout();
        return redirect('/');
       }
}
