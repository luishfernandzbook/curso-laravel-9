@extends('app')

@section('title', 'Estudiantes')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="{{route('estudiantes.create', '$student->id')}}">Crear</a> 
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Nro.</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Edad</th>
            <th scope="col">Fecha Nacimiento</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach ($students as $student)
        <tr>
            <td>{{$index++}}</td>
            <td>{{$student->firstname}}</td>
            <td>{{$student->lastname}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->birthday}}</td>
            <td>{{$student->state}}</td>
            <td>
                <a class="btn btn-success" href="{{route('estudiantes.show', $student->id)}}">Ver</a> 
                <a class="btn btn-info" href="{{route('estudiantes.edit', $student->id)}}">Editar</a> 
                <form action="{{route('estudiantes.destroy', $student->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>              
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection