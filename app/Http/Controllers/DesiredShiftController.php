<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DesiredShift;
use App\Models\ConfirmedShift;
use App\Models\WorkedShift;

class DesiredShiftController extends Controller
{
    public function desire(DesiredShift $desire)
    {
        return view('shifts/desire')->with(['shifts' => $desire->getByLimit()]);
    }
    
    public function apply()
    {
        return view('shifts/apply');
    }
    
    public function store(Request $request, DesiredShift $desire)
    {
        $input = $request['post'];
        $desire->fill($input)->save();
        return redirect('/shifts/desire');
    }
    
    public function show(DesiredShift $desire, $id)
    {
        $table_data = $desire->find($id);
        
        return view('shifts/show')->with(['shift' => $table_data]);
    }
    
    public function edit(DesiredShift $desire, $id)
    {
        $table_data = $desire->find($id);
        
        return view('shifts/edit')->with(['shift' => $table_data]);
    }
    
    public function update(Request $request, DesiredShift $desire)
    {
        $input = $request['post'];
        $desire->fill($input)->save();
        
        return redirect('/shifts/desire');
    }
    
    public function delete(DesiredShift $desire, $id)
    {
        $shift = $desire->find($id);
        
        $shift->delete();
        return redirect('/shifts/desire');
    }
}
