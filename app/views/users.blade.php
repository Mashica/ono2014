@extends('master')


@section('header')

@stop


@section('nav')

@stop


@section('pagebody')
	<h3>Ciclistas Registradas</h3>

	<table>
		<tr>
			<th>Ciclista</th>
			<th>Cel</th>
			<th>email</th>
			<th></th>
			<th></th>
		</tr>
	@foreach ($users as $user)
		<tr>
			<td>{{ HTML::link(route('u_show', array($user->id)), $user->name . " " . $user->lastname1 . " " . $user->lastname2 ) }}</td>
			<td>{{ $user->cel }}</td>
			<td>{{ HTML::mailto($user->email, $user->email)  }}</td>
			<td>{{ HTML::link(route('u_edit',array('id' => $user->id)), 'Edit') }}</td>
			<td>
				
					{{ HTML::link(route('u_delete',array('id' => $user->id)), 'Borrar') }}
				
			</td>
		</tr>
	@endforeach

	</table>

@stop


@section('footer')


@stop