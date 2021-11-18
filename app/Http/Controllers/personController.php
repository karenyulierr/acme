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
        return view('persons.person',compact("country","department","city"));
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
    public function info(){

    }
}
