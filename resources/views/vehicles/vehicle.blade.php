@extends('layouts.base')
@section('contenido')
<div class="container mt-5">
    <div class="row d-flex justify-content-lg-between">
        <div class=" col-md-8">
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
                    <form action="/saveVehicle" method="post">
                        <div class=" card-header text-center">
                            <h2>Agregar vehículo</h2>
                        </div>
                        @csrf
                        <div class="card-body">
                            <div class="row form-group">
                                <label for="" class="col-12">Placa:* </label>
                                <input type="text" name="plaque" class="form-control col-md-12">
                            </div>
                            <br>
                            <div class="row form-group">
                                <label for="" class="col-12">Marca:* </label>
                                <input type="text" name="mark" class="form-control col-md-112">
                            </div>
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
        </div>
        <div class="col-md-4">
            <h2 class="text-center mb-5">Listado</h2>
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <th>
                        Placa
                    </th>
                    <th>
                        Marca
                    </th>
                </thead>
             <tbody>
                    @foreach($vehicle as $key => $value)
                <td>
                    {{ $value->plaque }}
                </td>
                <td>
                    {{ $value->mark  }}
                </td>
                </tr>
                @endforeach
                </tbody> 
            </table>
        </div>
    </div>

</div>
@endsection
