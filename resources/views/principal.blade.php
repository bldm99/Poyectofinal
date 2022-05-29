
@extends('layouts/plantilla')

@section('tituloPagina', 'Crud con Laravel 8')

@section('contenido')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="{{ asset('css/st.css')}}?v=<?php echo time(); ?>" >



</head>
<body>



<div class="table table-responsibe">

    <h1> PAGINA PRINCIPAL </h1>
    <br>
    <div class="medio">
        <table>
            <thead>


            <th>Name</th>
            <th>Email</th>



            </thead>

            <tbody>
            @foreach($prueva as $item1)

                <tr>


                    <td>{{ $item1->name }}</td>
                    <td>{{ $item1->email }}</td>




                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


    <div class="lugares">
        @foreach($prueva as $itemy)

            <h2>{{ $itemy->email }}</h2>

        @endforeach

    </div>




    <a href="{{route('prueva.listarprueva')}}"> Lista usuarios</a>
    <br>
    <a href="{{route('fotos.vistafoto')}}"> subir fotos</a>
    <br>
    <i class="fab fa-500px"></i>









</div>




</body>
</html>
@endsection
