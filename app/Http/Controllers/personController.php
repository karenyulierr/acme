<?php

namespace App\Http\Controllers;

use App\Person;
use App\City;
use App\Department;
use App\Country;
use Illuminate\Http\Request;

class personController extends Controller
{   
    //Formulario de crear persona
    public function personForm(){
        $country=Country::all();
        $department=Department::all();
        $city=City::all();
        $data=Person::join('cities','cities.id','=','persons.city_id')->select('persons.*', 'cities.*')->get();

        // $data['person']=Person::join('vehicle_persons','vehicle_persons.person_id','=','persons.id')->join('vehicle','vehicle_persons.vehicle_id','=','vehicle.id')->select('persons.*', 'vehicle_persons.*', 'vehicle.*')->get();
        return view('persons.person',compact("country","department","city","data"));
    }

    //Guardar persona
    public function savePerson(Request $request){

        // dd($request->city_id);
        $validator =$this->validate($request,[
            'identification'=>'required|numeric|unique:persons',
            'first_name'=>'required|string|max:200',
            'lastname'=>'required|string|max:200',
            'address'=>'required|string|max:200',
            'phone'=>'required|numeric',
        ]);
        $data = request()->except('_token');
        Person::insert($data);
        return back()->with('PersonaGuardado','Persona guardado correctamente');

    }
    public function updatePerson($id){
        $person=Person::findOrFail($id);
        return view('persons.person');
    }
    public function update(Request $request,$id){
        $validator =$this->validate($request,[
            'identification'=>'required|numeric|unique:persons',
            'first_name'=>'required|string|max:200',
            'lastname'=>'required|string|max:200',
            'address'=>'required|string|max:200',
            'phone'=>'required|numeric',
        ]);
        $data = request()->except((['_token','_method']));
        Person::where('id','=',$id)->update($data);
        return back()->with('PersonaActualizada','Persona Actualizada correctamente');

    }
}
