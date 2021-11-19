@extends('layouts.base')
@section('contenido')
<div class="container mt-5">
    <div class="row d-flex justify-content-lg-between">
        <div class="col-md-6 mt-5">
            <!-- Mensaje flash -->
            @if(session('PersonaGuardado'))
            <div class="alert alert-success">
                {{ session('PersonaGuardado') }}
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
                <form action="savePerson" method="post">
                    <div class=" card-header text-center">
                        <h2>Agregar propietario/conductor</h2>
                    </div>
                    @csrf
                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="col-12">Identificación:* </label>
                            <input type="text" name="identification" class="form-control col-md-12">
                        </div>
                        <br>
                        <div class="row form-group">
                            <label for="" class="col-12">Primer nombre:* </label>
                            <input type="text" name="first_name" class="form-control col-md-112">
                        </div>
                        <br>
                        <div class="row form-group">
                            <label for="" class="col-12">Segundo nombre: </label>
                            <input type="text" name="second_name" class="form-control col-md-12">
                        </div>
                        <br>
                        <div class="row form-group">
                            <label for="" class="col-12">Apellido:* </label>
                            <input type="text" name="lastname" class="form-control col-md-12">
                        </div>
                        <br>
                        <div class="row form-group">
                            <label for="" class="col-12">Dirección:* </label>
                            <input type="text" name="address" class="form-control col-md-12">
                        </div>
                        <br>
                        <div class="row form-group">
                            <label for="" class="col-12">Télefono: </label>
                            <input type="text" name="phone" class="form-control col-md-12">
                        </div>
                        <br>
                        <div class="row form-group">
                            <label for="" class="col-12">País: </label>
                            @foreach($country as $key => $value)
                            <input disabled type="text" value="{{ $value->name }}" class="form-control col-md-12">
                            @endforeach

                        </div>
                        <br>
                        <div class="row form-group">
                            <label for="" class="col-12">Cuidad: </label>
                            <select class="form-select col-md-12" aria-label="Seleccione el tipo de persona" name="city_id" id="city_id">
                                <option selected>Seleccione el país</option>
                                @foreach($city as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="row form-group">
                            <label for="" class="col-12">Tipo de persona: </label>
                            <select class="form-select col-md-12" aria-label="Seleccione el tipo de persona" name="type_person" id="type_person">
                                <option selected>Seleccione tipo de persona </option>
                                <option value="Conductor">Conductor </option>
                                <option value="Propietario">Propietario </option>

                            </select>
                        </div>
                        {{-- <div class="row form-group">
                            <label for="" class="col-12">tipo de persona: </label>
                            <input type="text" name="type_person" class="form-control col-md-12" placeholder="'Conductor  - Propietario">
                        </div>  --}}
                        <br><br>
                        <div class="row form-group">
                            <button type="submit" class="btn btn-success col-md-12">
                                Guardar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <h2 class="text-center mb-5">Listado</h2>
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <th>
                        Identificación
                    </th>
                    <th>
                        Nombre
                    </th>
                    <th>
                        Dirección
                    </th>
                    <th>
                        Telefono
                    </th>
                    <th>
                        Propietario/Conductor
                    </th>
                    <th>
                        Cuidad
                    </th>
                </thead>
                <tbody>
                    @foreach($data as $key => $value)
                    <tr>
                        <td>
                            {{ $value->identification }}
                        </td>
                        <td>
                            {{ $value->first_name .' '.$value->second_name . ' '.$value->lastname  }}
                        </td>
                        <td>
                            {{ $value->address }}
                        </td>
                        <td>
                            {{ $value->phone }}
                        </td>
                        <td>
                            {{ $value->type_person }}
                        </td>
                        <td>
                            {{ $value->name  }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
