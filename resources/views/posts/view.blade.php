@extends('template')

@section('content')

<p><a href="{{URL::Route('posts.index')}}">Revenir</a></p>
<h1>{{$post->name}}</h1>
<p>{{$post->content}}</p>
<a href="{{URL::route('posts.edit', $post->id)}}">éditer l'article</a>

@stop