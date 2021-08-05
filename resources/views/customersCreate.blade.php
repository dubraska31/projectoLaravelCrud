@extends('layout')

@section('content')

<h2 class="customerBanner btn-success">Create a customer</h2>

<div class="container">
<div class="row">
{!! Form::open(array('route'=>'customers.store', 'method'=>'POST')  )!!}

{!! Form::label('Name') !!}
{!! Form::text('Name', null,['class' => 'form-control imputWidth250','placeholder' => 'Customer name']) !!}
</br>
{!! Form::label('Age') !!}
{!! Form::text('Age', null,['class' => 'form-control imputWidth250','placeholder' => 'Customer age']) !!}
</br>
{!! Form::label('Sex') !!}
{!! Form::text('Sex',null,['class' => 'form-control imputWidth250','placeholder' => 'Customer sex']) !!}
</br>
{!! Form::submit('Create', ['class' => 'btn btn-success']) !!}

{!! Form::close() !!}
</div>
</div>
@endsection
