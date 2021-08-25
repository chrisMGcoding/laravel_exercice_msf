@extends('template.template')

@section('content')

    <div class="container">

        <h3>Le bâtiment :</h3>

        <p>ID : {{($batiment->id)}}</p>
        <p>Nom du bâtiment : {{($batiment->name)}}</p>
        <p>Description du bâtiment : {{($batiment->description)}}</p>

    </div>

@endsection('content')