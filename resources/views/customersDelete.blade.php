@extends('layout')

@section('content')
	 {!! Form::open(['method' => 'DELETE','route' => ['customers.destroy', $customer->customer_id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
@endsection
