@extends('master')


@section('header')

@stop


@section('nav')

@stop


@section('pagebody')
	<h3> {{ $racedata->title }}</h3>


	<div style="font-weight:bold;">Tipo de carrera</div>
	<div>{{ $racedata->racetype }}</div>

	<div style="font-weight:bold;">Carrera</div>
	<div>{{ $racedata->title }}</div>

	<div style="font-weight:bold;">Número en la serie</div>
	<div>{{ $racedata->seriesordinal }}</div>

	<div style="font-weight:bold;">Año de serie</div>
	<div>{{ $racedata->seriesyear }}</div>

	<div style="font-weight:bold;">Fecha</div>
	<div>{{ $racedata->fecha }}</div>

	<div style="font-weight:bold;">Hora de arranque</div>
	<div>{{ $racedata->starttime }}</div>

	<div style="font-weight:bold;">Lugar</div>
	<div>{{ $racedata->venue }}</div>

	<div style="font-weight:bold;">Ciudad</div>
	<div>{{ $racedata->city }}</div>

	<div style="font-weight:bold;">Estado</div>
	<div>{{ $racedata->state }}</div>

	<div style="font-weight:bold;">Inscripciones/informes</div>
	<div>{{ $racedata->inscripciones }}</div>

	<div style="font-weight:bold;">Dirección para inscripciones/informes</div>
	<div>{{ $racedata->inscripciones_dir }}</div>

	<div style="font-weight:bold;">Teléfono 1</div>
	<div>{{ $racedata->inscripciones_tel1 }}</div>

	<div style="font-weight:bold;">Teléfono 2</div>
	<div>{{ $racedata->inscripciones_tel2 }}</div>

	<div style="font-weight:bold;">Publicada</div>
	<div>@if ($racedata->ispublished)
			{{ "true" }}
		@else
			{{ "false" }}
		@endif

		</div>

	<div style="font-weight:bold;">Fecha Creado</div>
	<div>{{ $racedata->created_at }}</div>

	<div style="font-weight:bold;">Última Actualización</div>
	<div>{{ $racedata->updated_at }}</div>

	<div>{{ HTML::link(route('race_edit',array('id' => $racedata->id)), 'Editar') }}</div>


@stop


@section('footer')


@stop