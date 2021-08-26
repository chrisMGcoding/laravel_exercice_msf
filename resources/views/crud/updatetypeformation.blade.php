@extends('template.template')

@section('content')

    <div class="container">

        <form action="/crud/updatetypeformation/{{$typeformation->id}}" method="post">
        @csrf
        @method("PUT")

            <label class="mt-2 mb-2" for="">Nom type formation :</label>
            <input type="text" name="name" id="" value="{{$typeformation->name}}">
                <br>
            <button class="mt-2 mb-2" type="submit">Update</button>

        </form>

    </div>

@endsection