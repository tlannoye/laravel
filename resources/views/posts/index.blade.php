@extends('template')

@section('content')
<h1>Tous les articles</h1>

@foreach ($posts as $post)

<h2>
	<a href="{{URL::to("/blog/{$post->slug}")}}">
	{{$post->name}}
	</a>
</h2>
<p>{{$post->content}}<p>
@endforeach
@stop