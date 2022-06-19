<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function users()
    {
        $users=User::all();
        return view ('show',\compact('users'));
    }
}
