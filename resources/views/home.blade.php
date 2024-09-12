{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
<div class="container my-5 text-center">
    <h1>Home</h1>
    <!-- Welcome -->
    <h2>Welcome</h2>
    
    <!-- Paragrafo -->
    <span>Vai nella sezione treni per scegliere il tuo viaggio</span>
</div>

@endsection


@section('titlePage')
home
@endsection