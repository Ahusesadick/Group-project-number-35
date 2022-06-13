<?php

namespace App\Http\Controllers;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
  
    public function index()
    {
        $reports = report::all();
      return view ('report.index')->with('reports', $reports);
    }

    
    public function create()
    {
        return view('dashboard.supervisor.home');
    }

   
    public function store(Request $request)
    { 

        $request->validate([
            'name'=>'required',
            
        ]);

        $input = $request->all();
        Report::create($input);
        return redirect('report')->with('flash_message', 'report Addedd!');  
    }

    
    public function show($id)
    {
        $report = Report::find($id);
        return view('report.show')->with('reports', $report);
    }

    
    public function edit($id)
    {
        $report = Report::find($id);
        return view('report.edit')->with('reports', $report);
    }

  
    public function update(Request $request, $id)
    {
        $report = Report::find($id);
        $input = $request->all();
        $report->update($input);
        return redirect('report')->with('flash_message', 'Contact Updated!');  
    }

   
    public function destroy($id)
    {
        Report::destroy($id);
        return redirect('report')->with('flash_message', 'Contact deleted!');  
    }
}