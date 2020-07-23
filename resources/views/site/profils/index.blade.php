@extends('layouts.header')

@section('title', 'Boco | UserPanel')

@section('content')
<div class="container mt-4">
      @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}        
        </div>
      @endif

      @if (session()->has('danger'))
        <div class="alert alert-danger">
            {{ session()->get('danger') }}        
        </div>
      @endif
      <h3 style="text-align:right;"><a href="{{ route('products.annonces.index') }}"> Retourner à l'accueil</a>&nbsp&nbsp | &nbsp
      
      &nbsp&nbsp | &nbsp<a href="{{ route('site.profils.create')}}"> Ajouter une annonce</a></h3>
     <div></div><br>
    <table class="table table-condensed">
    <tr style="background-color:tomato;color:#fff;font-weight:bold;">
        <td>ID</td>
        <td>Image</td>
        <td>Category</td>
        <td>Title</td>
        <td>Content</td>
        <td>Price</td>
        <td>Editer</td>
        <td>Supprimer</td>
    </tr>
    @foreach($annonces as $annonce)
    <tr>
        <td>{{ $annonce->id }}</td>
        <td><img src="{{ asset('image/products/'.$annonce->image )}}" width="100" height="100" alt=""></td>
        <td>{{ $annonce->identite->name }}</td>
        <td><a href="{{ route('site.profils.show', $annonce->id) }}"> {{$annonce->title }}</a></td>
        <td>{{ str_limit($annonce->content, 100) }}</td>
        <td>{{ $annonce->price }}</td>
        <td><a href="{{ route('site.profils.edit', $annonce->id) }}" class="btn btn-secondary"><svg class="bi bi-pencil" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
  <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
</svg></a></td>
        <td> <form method="post" action="{{ route('site.profils.destroy', $annonce->id )}}" enctype="multipart/form-data">
      @csrf
      @method('DELETE')
      <div>
      <button type="submit" class="btn btn-danger"> <svg class="bi bi-trash-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg> </button>
        </div>
     </form></td>
    </tr>
    @endforeach
    </table>
</div>
<div class="container">
<p>{{ $annonces->links() }}</p>
</div>
@endsection