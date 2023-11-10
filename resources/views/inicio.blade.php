@extends('layouts.layout')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="931d7b5e-cf8f-4a82-9cab-bae2096f17ff"
        data-blockingmode="auto" type="text/javascript"></script>
</head>
@section('content')
    <div class="container">

        <h1>¿Cómo subo mis documentos de identificación?</h1>
        <h2>Para subir su información elija la forma en el menu: foto o documento.</h2>
        <p>Para la validación requerimos dos documentos: el INE o su pasaporte y una foto de su cara</p>

        <div class="col-md-8">
            <dl>
                <dt>INE</dt>
                <dd>Puede enviarnos una foto desde su celular o subir un archivo de imagen.</dd>
                <li> Los cuatro bordes del INE son visibles en la imagen.</li>
                <li> Toda la información es clara y legible: ningún detalle está borroso ni cubierto.</li>
            </dl>
        </div>

        <div class="col-md-8 row shadow p-6 mb-6 bg-white">

            <div class="col-md-6 "> <img src="images/1699120841.png"> </div>
            <div class="col-md-6 "> <img src="images/1699120855.png"> </div>

        </div>
        <dl>
            <br>
            <div class="col-md-8">
                <dt>PASAPORTE</dt>
                <dd>- Puede enviarnos una foto desde su celular o subir una imagen.</dd>
                <li> Los cuatro bordes del pasaporte son visibles en la imagen.</li>
                <li> Toda la información es clara y legible: ningún detalle está borroso ni cubierto.</li>
        </dl>

    <br>

    <div class="col-md-8 row shadow p-6 mb-6 bg-white">

        <div class="col-md-6 "> <img src="images/1699120872.png"> </div>
        <div class="col-md-6 "> <img src="images/1699120894.png"> </div>

    </div>



    <dl> <br>
        <div class="col-md-8">
            <dt>FOTO</dt>
            <dd> Puede enviarnos una foto desde su celular o subir un archivo de imagen. Al tomar su fotografía:
                <li> Muestre unicamente su cara de frente, sin sonreir y parte de los hombros sobre fondo blanco</li>
                <li> No llevar anteojos, diademas, sombreros o gorras.</li>
                <li> Asegure que la imagen es clara: ningún detalle está borroso ni cubierta.</li>
            </dd>

    </dl>


    <br>

    <div class="col-md-8 row shadow p-6 mb-6 bg-white">
        <img class= "img-fluid" src="images/1699120902.png" width="667" height="237">
        
  
        <img class= "img-fluid" src="images/1699120912.png" width="667" height="237">
                     
                </div>
@endsection
    </body>

</html>
