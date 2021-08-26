@extends('template.template')

@section('content')

    <div class="container">

        <h3>Le bâtiment :</h3>

        <p>ID : {{($typeformation->id)}}</p>
        <p>Nom de la formation : {{($typeformation->name)}}</p>
        <p>Description de la formation : {{($typeformation->description)}}</p>

    </div>

@endsection('content')