@extends('template.template')

@section('content')

    <div class="container">

        <h3>Le bâtiment :</h3>

        <p>ID : {{($formation->id)}}</p>
        <p>Nom du bâtiment : {{($formation->name)}}</p>
        <p>Description du bâtiment : {{($formation->description)}}</p>

    </div>

@endsection('content')