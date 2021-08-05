@extends('layout')

@section('content')

<h2 class="customerBanner btn-primary">Edit a customer</h2>

<div class="container">
<div class="row">
{!! Form::model($customer, ['method' => 'PUT','route' => ['customers.update', $customer->customer_id]]) !!}

{!! Form::label('Name') !!}
{!! Form::text('Name', null,['class' => 'form-control imputWidth250','placeholder' => 'Customer name']) !!}
</br>
{!! Form::label('Age') !!}
{!! Form::text('Age', null,['class' => 'form-control imputWidth250','placeholder' => 'Customer age']) !!}
</br>
{!! Form::label('Sex') !!}
{!! Form::text('Sex', null,['class' => 'form-control imputWidth250','placeholder' => 'Customer sex']) !!}
</br>
{!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
</div>
</div>
@endsection
