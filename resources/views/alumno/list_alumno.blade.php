@extends('welcome')


@section('contenido')
    <div class="p-3 bg-white mb-3">
        <h3>Lista de Alumnos</h3>
        <div class="input-group mb-3">
            <button type="button" class="btn btn-success ml-5" ><i class="fas fa-plus text-white"></i> Nuevo</button>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">CARNE</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">ALIAS</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">FECHA DE NACIMIENTO</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">CATEGORIA</th>
                </tr>
                </thead>
                <tbody>
                @foreach($alumnos as $alumno)
                    <tr>
                        <td>{{$alumno->carne}}</td>
                        <td>{{$alumno->nombre}}</td>
                        <td>{{$alumno->alias}}</td>
                        <td>{{$alumno->foto}}</td>
                        <td>{{$alumno->correo}}</td>
                        <td>{{$alumno->fecha_nacimiento}}</td>
                        <td>{{$alumno->telefono}}</td>
                        <td>{{$alumno->descripcion}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $alumnos->links() }}
        </div>
    </div>
@endsection