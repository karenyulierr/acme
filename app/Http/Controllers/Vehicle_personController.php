<?php

namespace App\Http\Controllers;
use App\Vehicle_person;
use App\Person;
use App\Vehicle;


use Illuminate\Http\Request;

class Vehicle_personController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $person=Person::where('type_person','Propietario')->get();
        $conductor=Person::where('type_person','Conductor')->get();
        // $propietario=Person::where('type_person','Propietario')->get();
        $vehicle=Vehicle::all();
        return view('vehiculo_persona.vehiculo_persona',compact("person","vehicle","conductor"));
    }
    public function list(){
        $data['person']=Person::join('vehicle_persons','vehicle_persons.person_id','=','persons.id')->join('vehicle','vehicle_persons.vehicle_id','=','vehicle.id')->select('vehicle_persons.*','persons.*','vehicle.*')->get();
        // $data['person']=Person::paginate(3);
        return view('information.information',$data);


    //     $users = Person::join('model_has_permissions as mhp','users.id','=','mhp.model_id')
    //     ->join('permissions as per','mhp.permission_id','=','per.id')
    //     ->where('per.name', $permission)
    //     ->whereNull('deleted_at')
    //     ->select('users.id', 'users.email')
    //     ->groupBy('users.id', 'users.email')
    //     ->union($users_role)
    //     ->get();
    // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator =$this->validate($request,[
        //     'person_id '=>'required',
        //     'vehicle_id '=>'required',
        // ]);
        $data = request()->except('_token');
        Vehicle_person::insert($data);
        return back()->with('VehiculoGuardado','Asignacion guardada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Vehicle_person::destroy($id);
        return back()->with('AsinganacionEliminada','Asignacion eliminada');
    }
}
