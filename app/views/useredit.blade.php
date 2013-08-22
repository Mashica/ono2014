@extends('master')


@section('header')

@stop


@section('nav')

@stop


@section('pagebody')
	<h3>Edit Ciclista {{ $userdata->name . " " . $userdata->lastname1 . " " . $userdata->lastname2 }}</h3>

	<div style=""><img src="{{ asset('img/no_photo.png') }}" /></div>
	
	<div>
		{{ Form::open(array('url' => 'ciclistas/' . $userdata->id, 'method' => 'POST' )) }}
		 
		   	@if (Session::has('login_errors'))
		        <div class="error">Username or password incorrect.</div>
		    @endif
		   
			<div>{{ Form::label('login', 'Nombre de usuario') }}</div>
			<div>{{ Form::text('login', $userdata->login) }}</div>

			<div>{{ Form::label('email', 'Correo Electrónico') }}</div>
			<div>{{ Form::email('email', $userdata->email) }}</div>

			<div>{{ Form::label('password', 'Contraseña') }}</div>
			<div>{{ Form::password('password') }}</div>

			<div>{{ Form::label('name', 'Nombre') }}</div>
			<div>{{ Form::text('name', $userdata->name) }}</div>

			<div>{{ Form::label('lastname1', 'Primer apellido') }}</div>
			<div>{{ Form::text('lastname1', $userdata->lastname1) }}</div>

			<div>{{ Form::label('lastname2', 'Segundo apellido') }}</div>
			<div>{{ Form::text('lastname2', $userdata->lastname2) }}</div>

			<div>{{ Form::label('birthday', 'Cumpleaños') }}</div>
			<div>{{ Form::select('day', array(
					0 => '',
					1 => '1',
					2 => '2',
					3 => '3',
					4 => '4',
					5 => '5',
					6 => '6',
					7 => '7',
					8 => '8',
					9 => '9',
					10 => '10',
					11 => '11',
					12 => '12',
					13 => '13',
					14 => '14',
					15 => '15',
					16 => '16',
					17 => '17',
					18 => '18',
					19 => '19',
					20 => '20',
					21 => '21',
					22 => '22',
					23 => '23',
					24 => '24',
					25 => '25',
					26 => '26',
					27 => '27',
					28 => '28',
					29 => '29',
					30 => '30',
					31 => '31'
				), date('d',strtotime($userdata->birthday))) }}

				{{	Form::select('month', array(
					0 => '',
					1 => '1',
					2 => '2',
					3 => '3',
					4 => '4',
					5 => '5',
					6 => '6',
					7 => '7',
					8 => '8',
					9 => '9',
					10 => '10',
					11 => '11',
					12 => '12'
					), date('m',strtotime($userdata->birthday))) 
				}}

				{{	Form::select('year', array(
					0 => '',
					1939 => '1939',
					1940 => '1940',
					1941 => '1941',
					1942 => '1942',
					1943 => '1943',
					1944 => '1944',
					1945 => '1945',
					1946 => '1946',
					1947 => '1947',
					1948 => '1948',
					1949 => '1949',
					1950 => '1950',
					1951 => '1951',
					1952 => '1952',
					1953 => '1953',
					1954 => '1954',
					1955 => '1955',
					1956 => '1956',
					1957 => '1957',
					1958 => '1958',
					1959 => '1959',
					1960 => '1960',
					1961 => '1961',
					1962 => '1962',
					1963 => '1963',
					1964 => '1964',
					1965 => '1965',
					1966 => '1966',
					1967 => '1967',
					1968 => '1968',
					1969 => '1969',
					1970 => '1970',
					1971 => '1971',
					1972 => '1972',
					1973 => '1973',
					1974 => '1974',
					1975 => '1975',
					1976 => '1976',
					1977 => '1977',
					1978 => '1978',
					1979 => '1979',
					1980 => '1980',
					1981 => '1981',
					1982 => '1982',
					1983 => '1983',
					1984 => '1984',
					1985 => '1985',
					1986 => '1986',
					1987 => '1987',
					1988 => '1988',
					1989 => '1989',
					1990 => '1990',
					1991 => '1991',
					1992 => '1992',
					1993 => '1993',
					1994 => '1994',
					1995 => '1995',
					1996 => '1996',
					1997 => '1997',
					1998 => '1998',
					1999 => '1999',
					2000 => '2000',
					2001 => '2001',
					2002 => '2002',
					2003 => '2003',
					2004 => '2004',
					2005 => '2005',
					2006 => '2006',
					2007 => '2007',
					2008 => '2008'
					), date('Y',strtotime($userdata->birthday))) 
				}}
			</div>

			<div>{{ Form::label('tel', 'Teléfono fijo') }}</div>
			<div>{{ Form::text('tel', $userdata->tel) }}</div>

			<div>{{ Form::label('cel', 'Teléfono celular') }}</div>
			<div>{{ Form::text('cel', $userdata->cel) }}</div>

			<div>{{ Form::label('address', 'Dirección') }}</div>
			<div>{{ Form::text('address', $userdata->address) }}</div>

			<div>{{ Form::label('colonia', 'Colonia') }}</div>
			<div>{{ Form::text('colonia', $userdata->colonia) }}</div>

			<div>{{ Form::label('city', 'Ciudad') }}</div>
			<div>{{ Form::text('city', $userdata->city) }}</div>

			<div style="display:hidden;">{{ Form::hidden('state', 'Oaxaca') }}</div>

			<div style="display:hidden;">{{ Form::hidden('country', 'MX') }}</div>

			<div style="display:hidden;">{{ Form::hidden('id', $userdata->id) }}</div>

		    <div>{{ Form::submit('Actualizar') }}</div>
		    
		{{ Form::close() }}
	</div>

@stop


@section('footer')


@stop