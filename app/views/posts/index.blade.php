@extends('layout')

@section('content')
<a href="posts/create">Agregar</a>
<ul>
	@foreach($posts as $post)
	<li><a href="posts/{{ $post->id }}">{{ $post->title }}</a></li>
	@endforeach
</ul>
@stop