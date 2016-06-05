@extends('template')
 
@section('content')
    {!! Form::open(['url' => '/soumettreApp']) !!}
        <div class="form-group">
        {!! Form::label('email', 'Entrez votre adresse mail: ') !!}
        {!! Form::text('email') !!}
        </div>
        <div class="form-group">
        {!! Form::label('application', 'entrez le nom de l\'appli: ') !!}
        {!! Form::text('application') !!}
        </div>
        <div class="form-group">
        {!! Form::label('description', 'décrivez l\'appli proposée: ') !!}
        {!! Form::textarea('description') !!}
        </div>
        <div class="form-group">
        {!! Form::label('lien', 'lien vers le site officiel de l\'appli: ') !!}
        {!! Form::text('lien') !!}
        </div>
        {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}
@stop