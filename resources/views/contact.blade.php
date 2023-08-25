
@extends('layouts.app')

@section('title') 
    Contacto
@endsection

@section('content')
    <div class="container">
        <h2>Contacto</h2>

        <form action="/send-email" method="post">
            @csrf
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="email">Correo Electrónico:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="mensaje">Mensaje:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br><br>
            
            <input type="submit" value="Enviar">
        </form>
        @include('includes.follow')
    </div>

@endsection

