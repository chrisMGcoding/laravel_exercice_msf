@extends('template.template')

@section('content')

    <div class="container">

        <form action="/crud/updateeleve/{{$eleve->id}}" method="post">
        @csrf
        @method("PUT")

            <label class="mt-2 mb-2" for="">Nom élève :</label>
            <input type="text" name="name" id="" value="{{$eleve->name}}">
                <br>
            <label class="mt-2 mb-2" for="">Age :</label>
            <input type="text" name="age" id="" value="{{$eleve->age}}">
                <br>
            <button class="mt-2 mb-2" type="submit">Update</button>

        </form>

    </div>

@endsection