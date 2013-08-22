@extends('master')


@section('header')

@stop


@section('nav')

@stop


@section('pagebody')
	<h3> {{ $userdata->name . " " . $userdata->lastname1 . " " . $userdata->lastname2 }}</h3>

	<div style=""><img src="{{ asset('img/no_photo.png') }}" /></div>


	<div style="font-weight:bold;">Login</div>
	<div>{{ $userdata->login }}</div>

	<div style="font-weight:bold;">Correo Electrónico</div>
	<div>{{ $userdata->email }}</div>

	<div style="font-weight:bold;">Nombre</div>
	<div>{{ $userdata->name }}</div>

	<div style="font-weight:bold;">Primer apellido</div>
	<div>{{ $userdata->lastname1 }}</div>

	<div style="font-weight:bold;">Segundo apellido</div>
	<div>{{ $userdata->lastname2 }}</div>

	<div style="font-weight:bold;">Cumpleaños</div>
	<div>{{ $userdata->birthday }}</div>

	<div style="font-weight:bold;">Teléfono fijo</div>
	<div>{{ $userdata->tel }}</div>

	<div style="font-weight:bold;">Teléfono celular</div>
	<div>{{ $userdata->cel }}</div>

	<div style="font-weight:bold;">Dirección</div>
	<div>{{ $userdata->address }}</div>

	<div style="font-weight:bold;">Colonia</div>
	<div>{{ $userdata->colonia }}</div>

	<div style="font-weight:bold;">Ciudad</div>
	<div>{{ $userdata->city }}</div>

	<div style="font-weight:bold;">Estado</div>
	<div>{{ $userdata->state }}</div>

	<div style="font-weight:bold;">País</div>
	<div>{{ $userdata->country }}</div>

	<div style="font-weight:bold;">Fecha Creado</div>
	<div>{{ $userdata->created_at }}</div>

	<div style="font-weight:bold;">Última Actualización</div>
	<div>{{ $userdata->updated_at }}</div>

	<div>{{ HTML::link(route('u_edit',array('id' => $userdata->id)), 'Editar') }}</div>


@stop


@section('footer')


@stop