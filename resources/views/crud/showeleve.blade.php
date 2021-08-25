@extends('template.template')

@section('content')

    <div class="container">

        <h3>Le bâtiment :</h3>

        <p>ID : {{($eleve->id)}}</p>
        <p>Nom du bâtiment : {{($eleve->name)}}</p>
        <p>Description du bâtiment : {{($eleve->description)}}</p>

    </div>

@endsection('content')