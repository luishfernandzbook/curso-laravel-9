<div>
    <h2>Crear Estudiante</h2>
    <form action="{{ route('estudiantes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <strong>Nombres</strong>
            <input type="text" name="firstname" placeholder="Ingrese nombre">
        </div>
        <div>
            <strong>Apellidos</strong>
            <input type="text" name="lastname" placeholder="Ingrese apellido">
        </div>
        <div>
            <strong>Edad</strong>
            <input type="number" name="age" placeholder="Ingrese edad">
        </div>
        <div>
            <strong>Fecha de nacimiento</strong>
            <input type="date" name="birthday" placeholder="Ingrese fecha de nacimiento">
        </div>
        <div>
            <strong>Estado</strong>
            <input type="text" name="state" placeholder="Ingrese estado">
        </div>
        <button type="submit">Crear</button>
    </form>
</div>