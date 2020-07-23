@extends('layouts.header')

@section('title')
  Liste | Admin-Panel 
@endsection

@section('content')
<div class="container">
  <h1  style="color: white;background-color:tomato;height: 70px;line-height: 70px;text-align: center; " class="titre_principale"><a href="{{ route('occitanie')}}" class="btn btn-success">Annonces Occitanie</a>  <a href="{{ route('paysdelaloire')}}" class="btn btn-primary">Annonces Pays De La Loire</a>  <a href="{{ route('bretagne')}}" class="btn btn-secondary">Annonces Bretagne </a></h1>
</div>

<div class="container"><br>
  <h1  style="color: white;background-color:tomato;height: 70px;line-height: 70px;text-align: center; " class="titre_principale"><a href="{{ route('centre')}}" class="btn btn-success">Annonces Centre</a>  <a href="{{ route('normandie')}}" class="btn btn-primary">Annonces Normandie</a>  <a href="{{ route('iledefrance')}}" class="btn btn-secondary">Annonces Île de France </a></h1>
</div>

<div class="container"><br>
  <h1  style="color: white;background-color:tomato;height: 70px;line-height: 70px;text-align: center; " class="titre_principale"> <a href="{{ route('hautsdefrance')}}" class="btn btn-success">Annonces Hauts de France</a>  <a href="{{ route('grandest')}}" class="btn btn-primary">Annonces Grand Est</a>  <a href="{{ route('bourgogne')}}" class="btn btn-secondary">Annonces Bourgogne </a></h1>
</div>

<div class="container"><br>
  <h1  style="color: white;background-color:tomato;height: 70px;line-height: 70px;text-align: center; " class="titre_principale"> <a href="{{ route('auvergne')}}" class="btn btn-success">Annonces Auvergne Rhône Alpes</a>  <a href="{{ route('provence')}}" class="btn btn-primary">Annonces PACA</a>  <a href="{{ route('corse')}}" class="btn btn-secondary">Annonces Corse </a> <a href="{{ route('aquitaine')}}" class="btn btn-secondary">Annonces Aquitaine </a></h1>
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
      
    @endforeach

  </div>
  
  
  <div class="container">
  {{$annonces->links()}}
</div>
</div>

@endsection