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
            'Sname'=>'required',
            'programe'=>'required',
            'RegNo'=>'required',
            'date_reported'=>'required',
            'date_finished'=>'required',
            'Attitude'=>'required|not_in:0',
            'organizes'=>'required|not_in:0',
            'panctual'=>'required|not_in:0',
            'resourcefulness'=>'required|not_in:0',
            'accuracy'=>'required|not_in:0',
            'adapts'=>'required|not_in:0',
            'has_ability_to_get_along_with_others_work'=>'required|not_in:0',
            'Follows_upon_assignments'=>'required|not_in:0',
            'ability_to_communicate_with_supervisor'=>'required|not_in:0',
            'ability_to_apply_theory_in_practice'=>'required|not_in:0',
            'ability_to_judge'=>'required|not_in:0',
            'Adherence_to_general_code_of_conduct'=>'required|not_in:0',
            'comments'=>'required',
            'name'=>'required',
            'designation'=>'required',
            'contact'=>'required',
            'email'=>'required',
            'date'=>'required',
            'signature'=>'required',
            
        ]);
       

        $input = $request->all();
        Report::create($input);
        if( $request ){
            return redirect()->back()->with('success','Thanks your report Addedd successfully!');
        }
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