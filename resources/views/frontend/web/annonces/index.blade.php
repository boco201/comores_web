@extends('layouts.header')
@section('content')

<div class="container-fluid mt-4">

@if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}        
        </div>
@endif

    <div class="row">
        <div class="col-md-10">
            <div class="row">
            @foreach($annonces as $annonce)
            <div class="col-md-4">
               <ul class="list-group">
                  <li class="list-group-item"><a href="{{ $annonce->path()}}"><img src="{{ asset('image/products/'.$annonce->image )}}" width="300" height="240" alt=""></a></li>
               </ul>
            </div>
    
              <div class="col-md-8"><p></p>
                  <ul class="list-group">
                    <li class="list-group-item"><h3><a href="{{ $annonce->path()}}">{{ $annonce->title }}</a></h3></li>
                    <li class="list-group-item"><span style="font-size:1.2rem;font-style:italic;font-weight:bold;color:red;">Prix: {{ $annonce->price}} €</span></li>
                    <li class="list-group-item"><span style="font-style:italic;color:black;">Region: {{ $annonce->region->name }}</span></li>
                    <li class="list-group-item"> <span style="color:blue;">Annonce: {{ $annonce->identite->name }}.</span></li>
                    <li class="list-group-item"> <span style="color:red;">Annonce publié il y a {{ $annonce->created_at->diffForHumans() }} </span> </li>
                </ul>
              </div>
              @endforeach
            </div>
        </div>
        <div class="col-md-2" >
        <h1 style="color: blue;">Régions</h1>
<a href="{{ route('occitanies')}}" style="color: red;">Occitanie</a><br>
<a href="{{ route('paysdelaloires')}}" style="color: red;">Pays de la loire</a><br>
<a href="{{ route('bretagnes')}}" style="color: red;">Bretagne</a><br>
<a href="{{ route('centres')}}" style="color: red;">Centre</a><br>
<a href="{{ route('normandies')}}" style="color: red;">Normandie</a><br>
<a href="{{ route('iledefrances')}}" style="color: red;">Île De France</a><br>
<a href="{{ route('hautsdefrances')}}" style="color: red;">Hauts De France</a><br>
<a href="{{ route('grandests')}}" style="color: red;">Grand Est</a><br>
<a href="{{ route('bourgognes')}}" style="color: red;">Bourgogne</a><br>
<a href="{{ route('auvergnes')}}" style="color: red;">Auvergne Rhône Alpes</a><br>
<a href="{{ route('provences')}}" style="color: red;">Provence Alpes Côte d'Azur</a><br>
<a href="{{ route('corses')}}" style="color: red;">Corse</a><br>
<a href="{{ route('aquitaines')}}" style="color: red;">Aquitaine</a><br>
        
       
        <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">conditions générales</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Condition général du site</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.est le faux texte standard de l'imprimerie depuis les années 1500, quand un 
       imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser 
       un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, 
       mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit 
       modifié. Il a été popularisé daest le faux texte standard de l'imprimerie depuis les années 1500, quand un 
       imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser 
       un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, 
       mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit 
       modifié. Il a été popularisé daest le faux texte standard de l'imprimerie depuis les années 1500, quand un 
       imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser 
       un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, 
       mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit 
       modifié. Il a été popularisé da</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  </div>

    </div>
</div>
<div class="container">
<p>{{ $annonces->links() }}</p>
</div>
@endsection



