@extends('template.template')

@section('content')

    <div class="container">


        <table class="table">

            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Action</th>
                    <th scope="col">Show</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>

            <tbody>

                @foreach($eleve as $item)

                <tr>
                    <th scope="row">{{($item->id)}}</th>
                    <td>{{($item->name)}}</td>
                    <td>{{($item->age)}}</td>
                    <td>
                        <form action="/eleve/{{$item->id}}" method="post">
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <button><a href="/crud/showeleve/{{$item->id}}">Show</a></button>
                    </td>
                    <td>
                        <button><a href="/crud/editeleve/{{$item->id}}">Update</a></button>
                    </td>
                </tr>

                @endforeach

            </tbody>

        </table>



        <h3 class="mt-2 mb-2">Ajout d'un nouvel élève :</h3>

        <form action="/eleve" method="post">
        @csrf

        <label class="mt-2 mb-2" for="">Nom élève :</label>
        <input type="text" name="name" id="">
                <br>
        <label class="mt-2 mb-2" for="">Age :</label>
        <input type="text" name="age" id="">
                <br>
        <label class="mt-2 mb-2" for="">Etat :</label>
        <input type="text" name="etat" id="">
                
        <label class="mt-2 mb-2" for="">Prénom élève :</label>
        <input type="text" name="firstName" id="">
            <br>
        <button class="mt-2 mb-2" type="submit">Ajouter</button>
    
        </form>

    </div>

    

@endsection