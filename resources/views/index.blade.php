@extends('layout')

@section('content')

	<h2>Bienvenido</h2>
	<!-- customers es el alias del controller. customersList es el metodo en el controller -->
	<!--<a class="btn btn-primary" href="{{ route('customers.index') }}">Go to customers list</a>-->
	<a class="btn btn-primary" href="{{ route('customers.index') }}">Ingrese aqui</a>

@endsection
