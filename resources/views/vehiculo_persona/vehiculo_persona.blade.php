@extends('layouts.base')
@section('contenido')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
            <!-- Mensaje flash -->
            @if(session('VehiculoGuardado'))
            <div class="alert alert-success">
                {{ session('VehiculoGuardado') }}
            </div>

            @endif
            <!-- Validacion de errores -->
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{ $error}}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card ">
                <div class="mt-2 mb-2 text-center">
                    <input type="button" onclick="mostrarConductor()" class="btn btn-warning" value="Conductor" />
                    <input type="button" onclick="mostrarPropie()" class="btn btn-warning" value="Propietario" />
                </div>
                <form action="/saveVehicle_person" method="post" id="propietarioForm">
                    <div class=" card-header text-center">
                        <h2>Asingar propietario a vehiculo </h2>
                    </div>
                    @csrf
                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="col-12">Propietario: </label>
                            <select class="form-select col-md-12" aria-label="Seleccione el tipo de persona" name="person_id" id="person_id">
                                <option selected>Seleccione</option>
                                @foreach($person as $key => $value)
                                <option value="{{ $value->id}}">{{ $value->first_name. " " . $value->second_name  ." ". $value->lastname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="row form-group">
                            <label for="" class="col-12">Vehiculo: </label>
                            <select class="form-select col-md-12" aria-label="Seleccione el tipo de persona" name="vehicle_id" id="vehicle_id">
                                <option selected>Seleccione</option>
                                @foreach($vehicle as $key => $value)
                                <option value="{{ $value->id}}">{{ $value->plaque. " - " . $value->mark }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br><br>
                        <div class="row form-group">
                            <button type="submit" class="btn btn-success col-md-12">
                                Asignar
                            </button>
                        </div>
                    </div>
                </form>
                <form action="/saveVehicle_person" method="post" id="conductorForm">
                    <div class=" card-header text-center">
                        <h2>Asingar conductor a vehiculo</h2>
                    </div>
                    @csrf
                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="col-12">Conductor: </label>
                            <select class="form-select col-md-12" aria-label="Seleccione el tipo de persona" name="person_id" id="person_id">
                                <option selected>Seleccione</option>
                                @foreach($conductor as $key => $value)
                                <option value="{{ $value->id}}">{{ $value->first_name. " " . $value->second_name  ." ". $value->lastname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="row form-group">
                            <label for="" class="col-12">Vehiculo: </label>
                            <select class="form-select col-md-12" aria-label="Seleccione el tipo de persona" name="vehicle_id" id="vehicle_id">
                                <option selected>Seleccione</option>
                                @foreach($vehicle as $key => $value)
                                <option value="{{ $value->id}}">{{ $value->plaque. " - " . $value->mark }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br><br>
                        <div class="row form-group">
                            <button type="submit" class="btn btn-success col-md-12">
                                Asignar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
