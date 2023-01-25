@extends('layout.plantilla') <!-- home-->
@section('title','materia')

@section('contendio')
@section('materia.form')

@endsection
<h1>PAGINA PRINCIPAL DEL ESTUDUIANTE</h1>

<body>
    <form action="" method="get">
        <label for="nombre" >Nombre</label><br>
        <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre"><br>

        <label for="Apellido">Apellido</label><br>
        <input type="text" id="Apellido" name="Apellido" placeholder="Escribe tu Apellido"><br>
<br>
        <button type="submit"> GUARDAR DATOS</button>

    </form>
</body>

