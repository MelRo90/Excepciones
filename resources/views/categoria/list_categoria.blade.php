@extends('welcome')


@section('contenido')
    <div class="p-3 bg-white mb-3">
        <h3>Lista de Catgorias</h3>
        <div class="input-group mb-3">
            <button type="button" class="btn btn-success ml-5" ><i class="fas fa-plus text-white"></i> Nuevo</button>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID CATEGORIA</th>
                    <th scope="col">DESCRIPCION</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <td>{{$categoria->id_categoria}}</td>
                        <td>{{$categoria->descripcion}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $categorias->links() }}
        </div>
    </div>
@endsection