@extends('layouts.header')

@section('title')
  Liste | Annonce Alsace 
@endsection

@section('content')
<div class="container">
  <h1  style="color: white;background-color:tomato;height: 70px;line-height: 70px;text-align: center; " class="titre_principale">Bienvenue sur notre plateforme! <a href="/annonces/valides" class="btn btn-success">Admin panel annonces</a></h1>
</div>
<div class="container">
  <div class="row">

      @foreach($annonces as $annonce)

          <div class="col-md-12">
            <form method="post" action="/annonces/valides/{{ $annonce->id }}">
                @csrf
                 @method('PATCH')
                 <label for="valides" class="checkbox">
                  <h1 style="color: blue;"> Region: {{ $annonce->region->name }}</h1>
                 <h2 style="color: tomato;"><input type="checkbox" name="valides" onChange="this.form.submit()"> {{ $annonce->title}}</h2>

                </label>
                  <p>{{str_limit( $annonce->description, 100) }}</p>
                <p class="date_publication">L'article est publié, {{ $annonce->created_at->diffForHumans() }}</p>

              </form><br>
         <form method="post" action="/annonces/valides/{{$annonce->id}}">
         @method('DELETE')
        @csrf
        <div>
          <button type="submit" class="btn btn-danger">Supprimer article</button>
        </div>

              </form>
            </div>

  </div>
  
  
  <div class="container">
  {{$annonces->links()}}
</div>
</div>

@endsection