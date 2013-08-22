@extends('master')


@section('header')

@stop


@section('nav')

@stop


@section('pagebody')
	<h3>Nueva Carrera</h3>

	<div>
		{{ Form::open( array('route' => 'race_store') ) }}
		 
		   	@if (Session::has('login_errors'))
		        <div class="error">asdfasdf sadf asdf asdf asdf .</div>
		    @endif
		   
			<div>{{ Form::label('racetype', 'Tipo de carrera') }}</div>
			<div>{{ Form::text('racetype') }}</div>

			<div>{{ Form::label('title', 'Carrera') }}</div>
			<div>{{ Form::text('title') }}</div>

			<div>{{ Form::label('seriesordinal', 'Número en la serie') }}</div>
			<div>{{ Form::text('seriesordinal') }}</div>

			<div>{{ Form::label('seriesyear', 'Año de serie') }}</div>
			<div>{{ Form::text('seriesyear') }}</div>

			<div>{{ Form::label('fecha', 'Fecha') }}</div>
			<div>{{ Form::text('fecha') }}</div>

			<div>{{ Form::label('starttime', 'Hora de arranque') }}</div>
			<div>{{ Form::text('starttime') }}</div>

			<div>{{ Form::label('venue', 'Lugar') }}</div>
			<div>{{ Form::text('venue') }}</div>

			<div>{{ Form::label('city', 'Ciudad') }}</div>
			<div>{{ Form::text('city') }}</div>

			<div>{{ Form::label('state', 'Estado') }}</div>
			<div>{{ Form::text('state') }}</div>

			<div>{{ Form::label('inscripciones', 'Inscripciones/informes') }}</div>
			<div>{{ Form::text('inscripciones') }}</div>

			<div>{{ Form::label('inscripciones_dir', 'Dirección para inscripciones/informes') }}</div>
			<div>{{ Form::text('inscripciones_dir') }}</div>

			<div>{{ Form::label('inscripciones_tel1', 'Teléfono 2') }}</div>
			<div>{{ Form::text('inscripciones_tel1') }}</div>

			<div>{{ Form::label('inscripciones_tel2', 'Teléfono 2') }}</div>
			<div>{{ Form::text('inscripciones_tel2') }}</div>

			<div>{{ Form::label('ispublished', 'Publicada') }}</div>
			<div>{{ Form::text('ispublished') }}</div>

		    <div>{{ Form::submit('Crear') }}</div>
		    
		{{ Form::close() }}
	</div>

@stop


@section('footer')


@stop