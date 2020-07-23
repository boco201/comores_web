@extends('layouts.header')
 
  <div class="container-fluid">
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
<h2 style="color:blue;text-align:right"><a href="{{ route('products.annonces.create')}}"> Ajouter une annonce</a></h2><br>
     
    <form method="post" action="{{ route('products.annonces.store') }}" enctype="multipart/form-data">
     @csrf

<div class="row">

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
 <input type="text" name="title" id="title" class="form-control" placeholder="Ajouter un Titre" value="{{old('title')}}" required>
</diV>
</div>

<div class="col-md-6">
<div class="form-group">
 <label for="name">Pseudo: </label>
 <input type="text" name="name" id="name" class="form-control" placeholder="Ajouter un nom" value="{{old('name')}}" required>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
 <label for="email">Mail: </label>
 <input type="email" name="email" id="email" class="form-control" placeholder="Ajouter un Mail" value="{{old('email')}}" required>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
 <label for="price">Prix: </label>
 <input type="text" name="price" id="price" class="form-control" placeholder="Ajouter un prix" value="{{old('price')}}" required>
</div>
</div>

<div class="col-md-12">
<div class="form-group">
 <label for="description">Description: </label>
 <textarea name="description" class="form-control" rows="7" cols="2" placeholder="Description facultatif">{{old('description')}}</textarea>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
 <label for="image">Upload une image 1 </label><br>
 <input type="file" name="image" id="image" class="btn btn-primary" placeholder="Ajouter une image" value="{{old('image')}}" >
</div>
</div>
<div class="col-md-4">
<div class="form-group">
 <label for="photo">Upload une image 2 </label><br>
 <input type="file" name="photo" id="photo" class="btn btn-primary" placeholder="Ajouter une image" value="{{old('photo')}}" >
</div>
</div>

<div class="col-md-4">
<div class="form-group">
 <label for="media">Upload une image 3 </label><br>
 <input type="file" name="media" id="media" class="btn btn-primary" placeholder="Ajouter une image" value="{{old('media')}}" >
</div>
</div>


<div class="col-md-4">
<div class="form-group">
 <label for="upload">Upload une image 4 </label><br>
 <input type="file" name="upload" id="upload" class="btn btn-primary" placeholder="Ajouter une image" value="{{old('upload')}}" >
</div>
</div>

<div class="col-md-4">
<div class="form-group">
 <label for="fichier">Upload une image 5 </label><br>
 <input type="file" name="fichier" id="fichier" class="btn btn-primary" placeholder="Ajouter une image" value="{{old('fichier')}}" >
</div>
</div>

</div>
<div class="col-md 12"><br>
   <div class="form-group">
   <button type="submit" class="btn btn-success form-control" style="padding-bottom:30px;text-transform:uppercase;"> Publier votre annonce</button>
   </div>
</div>
   
</div>
</form>
</div>
</div>

@endsection








  
