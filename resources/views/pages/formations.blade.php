@extends('template.template')

@section('content')

    <div class="container">


        <table class="table">

            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                    <th scope="col">Show</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>

            <tbody>

                @foreach($formation as $item)

                <tr>
                    <th scope="row">{{($item->id)}}</th>
                    <td>{{($item->name)}}</td>
                    <td>{{($item->description)}}</td>
                    <td>
                        <form action="/formation/{{$item->id}}" method="post">
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <button><a href="/crud/showformation/{{$item->id}}">Show</a></button>
                    </td>
                    <td>
                        <button><a href="/crud/editformation/{{$item->id}}">Update</a></button>
                    </td>
                </tr>

                @endforeach

            </tbody>

        </table>



        <h3 class="mt-2 mb-2">Ajout d'une nouvelle formation :</h3>

        <form action="/formation" method="post">
        @csrf

            <label class="mt-2 mb-2" for="">Nom formation :</label>
            <input type="text" name="name" id="">
                    <br>
            <label class="mt-2 mb-2" for="">Description :</label>
            <input type="text" name="description" id="">
                    <br>
            <button class="mt-2 mb-2" type="submit">Ajouter</button>
    
        </form>

    </div>