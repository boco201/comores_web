@extends('layouts.header')

@section('title')
 Admin panel | Smarphone
@endsection

@section('content')
<div class="container">
	<div class="row">

          @foreach($annonces as $annonce)
		<div class="col-md-12">
			<h1><a href="{{ $annonce->path()}}">{{ $annonce->title }}</a></h1>
	        <p>{{str_limit ($annonce->description, 200) }}</p>
		</div>
	</div>
</div>

		
	 @endforeach


</div>
<div class="container"><br>
  {{$annonces->links()}}
</div>

@endsection