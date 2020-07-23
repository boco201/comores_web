@extends('layouts.header')

@section('title')
 Admin panel | Annonces
@endsection

@section('content')
<div class="container">
  <table class="table table-condensed">
    <tr>
      <td>ID</td>
      <td>Auteur</td>
      <td>Titre</td>
      <td>Description</td>
      <td>Supprimer</td>
    </tr>
     @foreach($annonces as $annonce)
    <tr>
      <td>{{ $annonce->id }}</td>
      <td>{{ $annonce->author }}</td>
      <td> {{ $annonce->title }}</td>
      <td>{{ str_limit($annonce->description, 100) }}</td>
      <td> <form method="post" action="/annonces/posts/{{$annonce->id}}">
           @method('DELETE')
          @csrf
          <div>
            <button type="submit" class="btn btn-danger">Supprimer une annonce</button>
          </div>

              </form></td>
    </tr>
      @endforeach

  </table>
  @endsection



 