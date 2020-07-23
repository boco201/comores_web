@extends('layouts.header')

@section('title')
  Liste | Catégories Médias
@endsection

@section('content')
<div class="container">
	<h1 class="espace_membre">Catégories Médias </h1>
	<div class="row">
		@foreach($posts as $post)
		<div class="col-md-12">
			<img src="">
			<h1>{{ $post->category->name }}</h1>
			<h3><a href="{{ $post->path() }}">{{ $post->title }}</a></h3>
			<p>{{str_limit( $post->description, 100) }}</p>
			<p class="date_publication">L'article est publié, {{ $post->created_at->diffForHumans() }}</p>
			 <div class="col-md-12">
                   @foreach($post->uploads as $upload)
                <a href="{{ $post->path()}}"> <img  src="/images/{{$upload->resized_name }}"  width="24%" height="200"></a>  
                @endforeach
                </div><br>
			<div>
				<a href="{{ $post->path() }}" class="btn btn-primary">Details de l'article</a>
			</div>
		</div>	
		@endforeach
	</div>

</div><br>
<div class="container">
	{{$posts->links()}}
</div>
@endsection