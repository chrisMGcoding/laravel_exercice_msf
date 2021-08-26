@extends('template.template')

@section('content')

    <div class="container">

        <form action="/crud/updateformation/{{$formation->id}}" method="post">
        @csrf
        @method("PUT")

            <label class="mt-2 mb-2" for="">Nom formation :</label>
            <input type="text" name="name" id="" value="{{$formation->name}}">
                <br>
            <label class="mt-2 mb-2" for="">description :</label>
            <input type="text" name="description" id="" value="{{$formation->description}}">
                <br>
            <button class="mt-2 mb-2" type="submit">Update</button>

        </form>

    </div>

@endsection