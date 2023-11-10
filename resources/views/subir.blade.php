@extends('layouts.layout')
@section('title', 'Home')
@section('navbar')
@endsection


<body>
    @section('content')
    <div class="container">

        <h1>Archivo para subir imágenes al sitio web</h1>
        <h2>Para subir su una imagen.</h2>
        <p>Seleccione el archivo en su dispositivo.</p>

        <div class="col-md-8">
            <dl>
                <dt>INE</dt>
                <dd>Puede enviarnos una foto desde su celular o subir un archivo de imagen.</dd>
                <li> Los cuatro bordes del INE son visibles en la imagen.</li>
                <li> Toda la información es clara y legible: ningún detalle está borroso ni cubierto.</li>
            </dl>
        </div>
    </div>

    @endsection
</body>

@section('script')
    <!-- Container (Contact Section) -->
    <div id="contact" class="container">
        <h1 class="text-center" style="margin-top: 100px">Subir imágenes</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>

            <img src="{{ asset('images/' . Session::get('image')) }}" />
        @endif

        <form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="file" class="form-control" name="image" />

            <button type="submit" class="btn btn-outline-dark">Subir</button>
        </form>

@endsection
