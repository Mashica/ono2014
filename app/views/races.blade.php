@extends('master')


@section('header')

@stop


@section('nav')

@stop


@section('pagebody')
	<h3>Carreras</h3>

	<table>
		<tr>
			<th>Tipo</th>
			<th>Carrera</th>
			<th>Fecha</th>
			<th></th>
			<th></th>
		</tr>
	@foreach ($races as $race)
		<tr>
			<td>{{ HTML::link(route('race_show', array($race->id)), $race->racetype) }}</td>
			<td>{{ HTML::link(route('race_show', array($race->id)), $race->title) }}</td>
			<td>{{ HTML::link(route('race_show', array($race->id)), $race->fecha . " " . $race->starttime)  }}</td>
			<td>{{ HTML::link(route('race_edit',array('id' => $race->id)), 'Edit') }}</td>
			<td>{{ HTML::link(route('race_delete',array('id' => $race->id)), 'Borrar') }}</td>
		</tr>
	@endforeach

	</table>

@stop


@section('footer')


@stop