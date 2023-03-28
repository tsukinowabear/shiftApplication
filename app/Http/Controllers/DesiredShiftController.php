<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DesiredShift;
use App\Models\ConfirmedShift;
use App\Models\WorkedShift;

class DesiredShiftController extends Controller
{
    public function index(DesiredShift $desired)
    {
        return view('shifts/desired/index')->with(['shifts' => $desired->getByLimit()]);
    }
    
    public function apply()
    {
        return view('shifts/desired/apply');
    }
    
    public function store(Request $request, DesiredShift $desired)
    {
        $input = $request['post'];
        $desired->fill($input)->save();
        return redirect('/shifts/desired');
    }
    
    public function show(DesiredShift $desired, $id)
    {
        $table_data = $desired->find($id);
        
        return view('shifts/desired/show')->with(['shift' => $table_data]);
    }
    
    public function edit(DesiredShift $desired, $id)
    {
        $table_data = $desired->find($id);
        
        return view('shifts/desired/edit')->with(['shift' => $table_data]);
    }
    
    public function update(Request $request, DesiredShift $desired, $id)
    {
        $table_data = $desired->find($id);
        
        $input = $request['post'];
        $table_data->fill($input)->save();
        
        return redirect('/shifts/desired');
    }
    
    public function delete(DesiredShift $desired, $id)
    {
        $shift = $desired->find($id);
        
        $shift->delete();
        return redirect('/shifts/desired');
    }
}
