@extends('layouts.header')

@section('title', 'Boco | Annonces')

@section('content')
<div class="container-fluid mt-4" style="width:1400px;background-color:ccc;">
    <div class="row">

        <div class="col-md-8" >
        <ul class="list-group">
              <li class="list-group-item">@include('carroussel.slider')</li>
          </ul>
         
         </div>
            
   
         <div class="col-md-4" >
          <ul class="list-group">
              <li class="list-group-item"><h3><a href="{{ route('site.profils.index')}}">{{ $annonce->title }}</a></h3></li>
              <li class="list-group-item"><span style="font-size:1.3rem;">Prix: </span><span style="font-size:1.3rem;color:red;font-weight:bold;">{{ $annonce->price}} €</span></li>
              <li class="list-group-item">Category: {{ $annonce->region->name }}</li>
              <li class="list-group-item"><span style="color:red;font-weight:bold;">Annonce publié il y a {{ $annonce->created_at->diffForHumans() }}</span></li>
              <li class="list-group-item">{{ str_limit ($annonce->description, 200) }}.</li>
          </ul><br>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Contacter par mail le proprietaire
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title btn btn-primary" id="exampleModalLabel">Contacter le propietaire de l'annonce</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post" >
      @csrf
      <input id="id" name="id" type="hidden" value="{{ isset($annonce) ? $annonce->id : '' }}">
      <div class="modal-body">
        @guest
        <div class="form-group">
          <label>Email addresse</label>
          <input type="email" class="form-control" name="email" placeholder="mail" required>
        </div>
        @endguest
        <div class="form-group">
          <label>Description</label>
          <textarea name="message" id="message" cols="7" rows="7" class="form-control" placeholder="ajouter ici votre contenu" required>{{ old('texte', isset($value) ? $value : '') }}</textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">Envoyer votre message</button>
      </div>
      </form>
    </div>
  </div>
</div>
  
       </div>

        <div class="col-md-12"><br>
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action ">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1" class="mb-1" style="color:red;"> Description</h5>
              <small style="color:red;font-weight:bold;">{{ $annonce->created_at->diffForHumans() }}</small>
            </div>
            <p >{{ $annonce->description }}.</p>
            <small>Donec id elit non mi porta.</small>
          </a>
        </div>
        </div>
    </div>
</div><br>

@endsection