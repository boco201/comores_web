@extends('layouts.header')

@section('title')
  La bonne annonce | Confirmation posts
@endsection

@section('content')

<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/1881.jpg') }}" alt="1881" width="350" height="400">
            </div>
            <div class="col-md-8">
                <h1 style="background-color: tomato;color: #fff;text-align: center;font-weight: bold;font-style: italic;">#BOCO# TSEMBEHOU-COMORES</h1><br><br>
                <h3 style="color:blue;font-style: italic;">Le développeur web n°1 Comorien Boco et son équipe : vous Confirme la transmission de votre message.</h3><br><br>
                <h4 style="color:grey;font-style: italic;">BOCO ET SON EQUIPE vous souhaite une bonne réussite.<br>Cordialement.</h4><br><br>
                <h5> Cliquer ce lien <a href="/"> Pour rétouner </a> à l'accueil</h5>
            </div>
        </div>
    </div>
</div>

@endsection
