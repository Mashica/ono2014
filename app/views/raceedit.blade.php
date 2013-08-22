@extends('master')


@section('header')

@stop


@section('nav')

@stop


@section('pagebody')
	<h3>Editar Carrera {{ $racedata->name . " " . $racedata->lastname1 . " " . $racedata->lastname2 }}</h3>

	<div>
		{{ Form::open(array('url' => 'carreras/' . $racedata->id, 'method' => 'POST' )) }}
		 
		   	@if (Session::has('login_errors'))
		        <div class="error">asdfasdf sadf asdf asdf asdf .</div>
		    @endif
		   
			<div>{{ Form::label('racetype', 'Tipo de carrera') }}</div>
			<div>{{ Form::text('racetype', $racedata->racetype) }}</div>

			<div>{{ Form::label('title', 'Carrera') }}</div>
			<div>{{ Form::text('title', $racedata->title) }}</div>

			<div>{{ Form::label('seriesordinal', 'Número en la serie') }}</div>
			<div>{{ Form::text('seriesordinal', $racedata->seriesordinal) }}</div>

			<div>{{ Form::label('seriesyear', 'Año de serie') }}</div>
			<div>{{ Form::text('seriesyear', $racedata->seriesyear) }}</div>

			<div>{{ Form::label('fecha', 'Fecha') }}</div>
			<div>{{ Form::text('fecha', $racedata->fecha) }}</div>

			<div>{{ Form::label('starttime', 'Hora de arranque') }}</div>
			<div>{{ Form::text('starttime', $racedata->starttime) }}</div>

			<div>{{ Form::label('venue', 'Lugar') }}</div>
			<div>{{ Form::text('venue', $racedata->venue) }}</div>

			<div>{{ Form::label('city', 'Ciudad') }}</div>
			<div>{{ Form::text('city', $racedata->city) }}</div>

			<div>{{ Form::label('state', 'Estado') }}</div>
			<div>{{ Form::text('state', $racedata->state) }}</div>

			<div>{{ Form::label('inscripciones', 'Inscripciones/informes') }}</div>
			<div>{{ Form::text('inscripciones', $racedata->inscripciones) }}</div>

			<div>{{ Form::label('inscripciones_dir', 'Dirección para inscripciones/informes') }}</div>
			<div>{{ Form::text('inscripciones_dir', $racedata->inscripciones_dir) }}</div>

			<div>{{ Form::label('inscripciones_tel1', 'Teléfono 2') }}</div>
			<div>{{ Form::text('inscripciones_tel1', $racedata->inscripciones_tel1) }}</div>

			<div>{{ Form::label('inscripciones_tel2', 'Teléfono 2') }}</div>
			<div>{{ Form::text('inscripciones_tel2', $racedata->inscripciones_tel2) }}</div>

			<div>{{ Form::label('ispublished', 'Publicada') }}</div>
			<div>{{ Form::text('ispublished', $racedata->ispublished) }}</div>

		    <div>{{ Form::submit('Actualizar') }}</div>
		    
		{{ Form::close() }}
	</div>

@stop


@section('footer')


@stop