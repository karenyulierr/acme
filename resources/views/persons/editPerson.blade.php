@extends('layouts.base')
@section('contenido')
<div class="container mt-5">
    <!-- Mensaje flash -->
    @if(session('PersonaActualizada'))
    <div class="alert alert-success">
        {{ session('PersonaActualizada') }}
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
        <form action="{{ route('update',$person->id) }}" method="post">
            <div class=" card-header text-center">
                <h2>Editar propietario/conductor</h2>
            </div>
            @csrf @method('PATCH')
            <div class="card-body">
                <div class="row form-group">
                    <label for="" class="col-12">Identificación:* </label>
                    <input type="text" name="identification" class="form-control col-md-12" value="{{$person->identification }}">
                </div>
                <br>
                <div class="row form-group">
                    <label for="" class="col-12">Primer nombre:* </label>
                    <input type="text" name="first_name" class="form-control col-md-112" value="{{$person->first_name }}">
                </div>
                <br>
                <div class="row form-group">
                    <label for="" class="col-12">Segundo nombre: </label>
                    <input type="text" name="second_name" class="form-control col-md-12" value="{{$person->second_name }}">
                </div>
                <br>
                <div class="row form-group">
                    <label for="" class="col-12">Apellido:* </label>
                    <input type="text" name="lastname" class="form-control col-md-12" value="{{$person->lastname }}">
                </div>
                <br>
                <div class="row form-group">
                    <label for="" class="col-12">Dirección:* </label>
                    <input type="text" name="address" class="form-control col-md-12" value="{{$person->address }}">
                </div>
                <br>
                <div class="row form-group">
                    <label for="" class="col-12">Télefono: </label>
                    <input type="text" name="phone" class="form-control col-md-12" value="{{$person->phone }}">
                </div>
                <br><br>
                <div class="row form-group">
                    <button type="submit" class="btn btn-success col-md-12">
                        Actualizar
                    </button>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection
