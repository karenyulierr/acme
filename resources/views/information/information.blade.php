@extends('layouts.base')

@section('contenido')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Información</h2>
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <th>
                        Placa
                    </th>
                    <th>
                        Marca
                    </th>
                    <th>
                        Conductor/Propietario
                    </th>
                    <th>
                        Nombre
                    </th>
                    {{-- <th>
                        Acciones
                    </th> --}}
                </thead>
                <tbody>
                    @foreach($person as $key => $value)
                    <tr>
                        <td>
                            {{ $value->plaque }}
                        </td>
                        <td>
                            {{ $value->mark }}
                        </td>
                        <td>
                            {{ $value->type_person }}
                        </td>
                        <td>
                            {{ $value->first_name .' '. $value->lastname }}
                        </td>
                        {{-- <td>
                            <form action="delete/{{$value->id}}" method='post'>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" onclick="confirm('¿Esta seguro de borrar la asignación');">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{ person->links() }} --}}
        </div>
    </div>
</div>
@endsection
