@extends('layouts.header')

@section('title')
 Admin panel | Annonces
@endsection

@section('content')
 
    <div class="row">
        <div class="col-sm-10 offset-sm-1"> 
    <h1>Editer une annonce</h1>
    <form method="post" action="/annonces/posts/{{ $annonce->id }}">
        @csrf
        @method('PATCH')
         <div class="form-group">
            <h5 style="font-weight: bold;color: #000;font-style: italic;"><label for="region_id">Région * : </label></h5>
            <select name="region_id" id="region_id" class="form-control">
                @foreach($regions as $region)
                 <option value="{{ $region->id }}">{{ $region->name }}</option>
                @endforeach
            </select>
         </div>

        <div class="form-group">
           <label for="title">Titre: </label>   
           <input type="text" name="title" class="form-control" value="{{ $annonce->title }}">
           <div>{{ $errors->first('title') }}</div>
        </div>

        <div class="form-group">
           <label for="departement">Département: </label>   
           <input type="text" name="departement" class="form-control" value="{{ $annonce->departement }}">
           <div>{{ $errors->first('departement') }}</div>
        </div>

        <div class="form-group">
           <label for="ville">Ville: </label>   
           <input type="text" name="ville" class="form-control" value="{{ $annonce->ville }}">
           <div>{{ $errors->first('ville') }}</div>
        </div>

        <div class="form-group">
           <label for="name">Nom: </label>   
           <input type="text" name="name" class="form-control" value="{{ $annonce->name }}">
           <div>{{ $errors->first('name') }}</div>
        </div>

        <div class="form-group">
           <label for="email">Email: </label>   
           <input type="text" name="email" class="form-control" value="{{ $annonce->email }}">
           <div>{{ $errors->first('email') }}</div>
        </div>

        <div class="form-group">
           <label for="tel">Tél: </label>   
           <input type="text" name="tel" class="form-control" value="{{ $annonce->price }}">
           <div>{{ $errors->first('tel') }}</div>
        </div>

        <div class="form-group">
            <h5 style="font-weight: bold;color: #000;font-style: italic;"><label for="identite_id">Identité * : </label></h5>
            <select name="identite_id" id="identite_id" class="form-control">
                @foreach($identites as $identite)
                 <option value="{{ $identite->id }}">{{ $identite->name }}</option>
                @endforeach
            </select>
       </div>

        <div class="form-group">
           <label for="description">Description: </label>   
           <textarea name="description" class="form-control" rows="7" cols="10">value="{{ $annonce->description }}"</textarea>
           <div>{{ $errors->first('description') }}</div>
        </div>

        <div class="form-group">
            <h5 style="font-weight: bold;color: #000;font-style: italic;"><label for="type_id">Type * : </label></h5>
            <select name="type_id" id="type_id" class="form-control">
                @foreach($types as $type)
                 <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
       </div>

       <div class="form-group">
           <label for="price">Prix: </label>    
           <input type="text" name="price" class="form-control" value="{{ $annonce->price }}">
           <div>{{ $errors->first('price') }}</div>
        </div>


        <div>
           <button type="submit" class="btn btn-primary">Editer une annonce</button>
        </div>

    </form>
</div>  
    </div>
@endsection

