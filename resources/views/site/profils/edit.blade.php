@extends('layouts.header')

@section('title', 'Create Annonce')

@section('content')
<div class="container mt-4">

@if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}        
        </div>
@endif

@if(count($errors) > 0)
  <div class="alert alert-danger">
  @foreach($errors->all() as $error)
   <ul>
      <li>{{$error}}</li>
   </ul>
  @endforeach
  </div>
@endif
<div class="container mt-4">
     <h2 style="color:blue;text-align:right"><a href="{{ route('site.profils.create')}}"> Ajouter une annonce</a></h2><br>
     <form method="post" action="{{ route('site.profils.update', $annonce->id )}}" enctype="multipart/form-data">
      @csrf
      @method('PATCH')

      <div class="col-md-6">
           <div class="form-group">
            <h5 style="font-weight: bold;color: #000;font-style: italic;"><label for="region_id">Région * : </label></h5>
            <select name="region_id" id="region_id" class="form-control">
                @foreach($regions as $region)
                 <option value="{{ $region->id }}">{{ $region->name }}</option>
                @endforeach
            </select>
         </div>
       </div>

       <div class="col-md-6">
           <div class="form-group">
            <h5 style="font-weight: bold;color: #000;font-style: italic;"><label for="type_id">Catégories * : </label></h5>
            <select name="type_id" id="type_id" class="form-control">
                @foreach($types as $type)
                 <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
          </div>
       </div>

       <div class="col-md-6">
           <div class="form-group">
            <h5 style="font-weight: bold;color: #000;font-style: italic;"><label for="identite_id">Identite * : </label></h5>
            <select name="identite_id" id="identite_id" class="form-control">
                @foreach($identites as $identite)
                 <option value="{{ $identite->id }}">{{ $identite->name }}</option>
                @endforeach
            </select>
          </div>
       </div>

       <div class="col-md-6">
<div class="form-group">
 <label for="title">Titre: </label>
 <input type="text" name="title" id="title" class="form-control" placeholder="Ajouter un Titre" value="{{$annonce->title}}" required>
</diV>
</div>

<div class="col-md-6">
<div class="form-group">
 <label for="name">Pseudo: </label>
 <input type="text" name="name" id="name" class="form-control" placeholder="Ajouter un nom" value="{{$annonce->name}}" required>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
 <label for="email">Mail: </label>
 <input type="email" name="email" id="email" class="form-control" placeholder="Ajouter un Mail" value="{{$annonce->email}}" required>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
 <label for="price">Prix: </label>
 <input type="text" name="price" id="price" class="form-control" placeholder="Ajouter un prix" value="{{$annonce->price}}" required>
</div>
</div>

<div class="col-md-12">
<div class="form-group">
 <label for="description">Description: </label>
 <textarea name="description" class="form-control" rows="7" cols="2" placeholder="Description facultatif">{{$annonce->description}}</textarea>
</div>
</div>

<div class="form-group">
 <label for="image">Upload une image </label><br>
 <img src="{{asset('image/products/'.$annonce->image )}}" class="img-thumbnail" width="100" />
 <input type="file" name="image" value="{{ $annonce->image }}" />
</div>

<div class="form-group">
 <label for="photo">Upload une image </label><br>
 <img src="{{asset('image/photos/'.$annonce->photo )}}" class="img-thumbnail" width="100" />
 <input type="file" name="photo" value="{{ $annonce->photo }}" />
</div>

<div class="form-group">
 <label for="media">Upload une image </label><br>
 <img src="{{asset('image/medias/'.$annonce->media )}}" class="img-thumbnail" width="100" />
 <input type="file" name="media" value="{{ $annonce->media }}" />
</div>

<div class="form-group">
 <label for="upload">Upload une image </label><br>
 <img src="{{asset('image/uploads/'.$annonce->upload )}}" class="img-thumbnail" width="100" />
 <input type="file" name="upload" value="{{ $annonce->upload }}" />
</div>

<div class="form-group">
 <label for="fichier">Upload une image </label><br>
 <img src="{{asset('image/fichiers/'.$annonce->fichier )}}" class="img-thumbnail" width="100" />
 <input type="file" name="fichier" value="{{ $annonce->fichier }}" />
</div>


<div class="form-group">
 <button type="submit" class="btn btn-primary">Editer une annonce</button>

</div>
</form>
</div>
</div>

@endsection