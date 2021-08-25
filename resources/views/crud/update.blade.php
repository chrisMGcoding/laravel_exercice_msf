@extends('template.template')

@section('content')

    <div class="container">

        <form action="/crud/update/{{$batiment->id}}" method="post">
        @csrf
        @method("PUT")

            <label class="mt-2 mb-2" for="">Nom bâtiment :</label>
            <input type="text" name="name" id="" value="{{$batiment->name}}">
                <br>
            <label class="mt-2 mb-2" for="">Description :</label>
            <input type="text" name="description" id="" value="{{$batiment->quantity}}">
                <br>
            <button class="mt-2 mb-2" type="submit">Update</button>

        </form>

    </div>

@endsection