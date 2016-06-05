@extends('template')

@section('content')

{{Form::model($post, array('url'=>URL::route('posts.update', $post->id)))}}
<div class="form-group">
	{{Form::label('name', 'Titre', ['class'=> 'form-label'] )}}
	{{Form::text('name', $post->name, null, ['class'=> 'form-control'] )}}
</div>

<div class="form-group">
	{{Form::label('slug', 'slug', ['class'=> 'form-label'] )}}
	{{Form::text('slug', $post->slug, null, ['class'=> 'form-control'] )}}
</div>

<div class="form-group">
	{{Form::label('content', 'Contenu', ['class'=> 'form-label'] )}}
	{{Form::textarea('content', $post->content, null, ['class'=> 'form-control'] )}}
</div>

{{Form::submit()}}
{{Form::close()}}

@stop