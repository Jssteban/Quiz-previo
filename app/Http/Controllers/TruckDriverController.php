<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTruck;
use App\Models\TruckDriverModel;
use Illuminate\Http\Request;

class TruckDriverController extends Controller
{
    public function index(){
        $trucks = TruckDriverModel::orderBy('id', 'asc')->paginate();
        return view('truck_driver.index', compact('trucks'));
    }

    public function create(){
        return view('truck_driver.create');
    }
    public function store(StoreTruck $request){
        $truck = TruckDriverModel::create($request->all());
        return redirect()->route('trucks.store' , $truck);
    }
    public function show($id){
        $truck = TruckDriverModel::find($id);
        return view('truck_driver.show', compact('truck'));
    }

    public function edit(TruckDriverModel $truck){
        return view('truck_driver.edit', compact('truck'));
    }

    public function update(StoreTruck $request, TruckDriverModel $truck){
        $truck->update($request->all());
        return redirect()->route('trucks.store', $truck);
    }
    public function destroy($id){
        $truck = TruckDriverModel::find($id);
        if(!$truck){
            return response()->json(['message'=> 'no se encontro'] , 404);
        }
        $truck->delete();
        return redirect()->route('trucks.index');
    }
}
