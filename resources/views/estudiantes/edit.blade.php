<div>
    <h2>Editar Estudiante</h2>
    <form action="{{ route('estudiantes.update', $student->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
        <div>
            <strong>Nombres</strong>
            <input type="text" name="firstname" value="{{$student->firstname}}">
        </div>
        <div>
            <strong>Apellidos</strong>
            <input type="text" name="lastname" value="{{$student->lastname}}">
        </div>
        <div>
            <strong>Edad</strong>
            <input type="number" name="age" value="{{$student->age}}">
        </div>
        <div>
            <strong>Fecha de nacimiento</strong>
            <input type="date" name="birthday" value="{{$student->birthday}}">
        </div>
        <div>
            <strong>Estado</strong>
            <input type="text" name="state" value="{{$student->state}}">
        </div>
        <button type="submit">Actualizar</button>
    </form>
</div>