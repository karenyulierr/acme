@extends('layouts.base')

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

</div>
