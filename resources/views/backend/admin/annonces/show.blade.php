@extends('layouts.header')

@section('title')
 Admin panel | Annonces
@endsection

@section('content')
 <div class="container-fluid-categorie">
  <div class="row">
    <div class="col-md-8">
    
       
            <div class="card-body">
                     <p style="font-size: 18px; font-weight: bold;"><u>Description :</u></p>
                        <p class="card-text">{{ $annonce->description }}</p>
           </div>
        </div>
    <div class="col-md-4">
      <div class="card bg-light">
            <h2 class="critiquer_debat">Annonce: {{ $annonce->title }}</h2>
           
            <div class="card-body">
                    <h3 style="font-weight: bold;color: red;font-style: italic;">Prix: {{ $annonce->price }} €</h3>
                <hr>
                    <p class="card-text"><u>Identité</u> : {{ $annonce->identite->name }}<br>
                   <u>Catégorie</u> : {{ $annonce->type->name }}<br>
                    <u>Region</u> : {{ $annonce->region->name }}<br>
                    <p style="color: red;font-weight: bold;">Publication : {{ $annonce->created_at->diffForHumans() }} à {{ $annonce->ville }} &nbsp{{ $annonce->departement }}.</p>
                </p>
                <hr>
                <p class="card-text"><u>Pseudo</u> : {{ $annonce->name }} </u>  &nbsp&nbsp <u>Tél:</u> {{ $annonce->tel }} </p>
                    <p>
                 <hr>

            </div>
        </div>
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

      <form method="post" action="{{ route('message') }}">
      @csrf
      <input id="id" name="id" type="hidden" value="{{ isset($annonce) ? $annonce->id : '' }}">
      <div class="modal-body">
        @guest
        <div class="form-group">
          <label>Email address</label>
          <input type="email" class="form-control" name="email" placeholder="mail" required>
        </div>
        @endguest
        <div class="form-group">
          <label>Content</label>
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
</div>
<!-- fin modal -->
  </div>
  </div>

</div>
@endsection