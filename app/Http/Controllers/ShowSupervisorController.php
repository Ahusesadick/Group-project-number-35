<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;

use Illuminate\Http\Request;

class ShowSupervisorController extends Controller
{
    public function supervisors()
    {
        $supervisors=Supervisor::all();
        return view ('showsupervisor',\compact('supervisors'));
    }
}
