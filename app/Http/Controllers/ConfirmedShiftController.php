<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DesiredShift;
use App\Models\ConfirmedShift;
use App\Models\WorkedShift;
use App\Models\ConfirmedDesired;
use App\Models\ConfirmedWorked;
use App\Models\Role;

class ConfirmedShiftController extends Controller
{
    public function index(ConfirmedShift $confirm)
    {
        return view('shifts/confirm/index')->with(['shifts' => $confirm->getByLimit()]);
    }
    
    public function select(DesiredShift $desired)
    {
        return view('shifts/confirm/desired')->with(['shifts' => $desired->getByLimit()]);
    }
    
    public function create(Role $role)
    {
        return view('shifts/confirm/create')->with(['roles' => $role->get()]);
    }
    
    public function candidate(DesiredShift $desired, Role $role, $id)
    {
        $table_data = $desired->find($id);
        
        return view('shifts/confirm/show')->with(['shift' => $table_data, 'roles' => $role->get()]);
    }
    
    public function decision(DesiredShift $desired, $id)
    {
        $table_data = $desired->find($id);
        
        return view('shifts/confirm/decision')->with(['shift' => $table_data]);
    }
    
    public function create_store(Request $request, ConfirmedShift $confirm)
    {
        $input = $request['post'];
        $confirm->fill($input)->save();
        return redirect('/shifts/confirm');
    }
    
    public function candidate_store(Request $request, ConfirmedShift $confirm, $id)
    {
        $input = $request['post'];
        $confirm->fill($input)->save();
        return redirect('/shifts/confirm');
    }
    
    public function show(ConfirmedShift $confirm, $id)
    {
        $table_data = $confirm->find($id);
        
        return view('shifts/confirm/show')->with(['shift' => $table_data]);
    }
    
    public function edit(ConfirmedShift $confirm, Role $role, $id)
    {
        $table_data = $confirm->find($id);
        
        return view('shifts//confirm/edit')->with(['shift' => $table_data, 'roles' => $role->get()]);
    }
    
    public function update(Request $request, ConfirmedShift $confirm, $id)
    {
        $table_data = $confirm->find($id);

        $input = $request['post'];
        $table_data->fill($input)->save();
        
        return redirect('/shifts/confirm');
    }
    
    public function delete(ConfirmedShift $confirm, $id)
    {
        $shift = $confirm->find($id);
        
        $shift->delete();
        return redirect('/shifts/confirm');
    }
}
