@extends('layout')

@section('content')

<h2 class="customerBanner btn-warning">Customers list</h2>

<div class="container">
	<div class="row">
	</br>
</br>

<table id="customersTable" class="table table-bordered">
	<thead>
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Sex</th>
			<th width="280px">Action</th>
		</tr>
	</thead>

	<tbody>
		<!--variables que viene del controller customers-->
		@foreach ($customersList as $customer)
		<tr>
			<td>{{ $customer->Name}}</td>
			<td>{{ $customer->Age}}</td>
			<td>{{ $customer->Sex}}</td>
			<td>
				<a class="btn btn-primary" href="{{ route('customers.edit', $customer->customer_id) }}">Edit</a>

				{!! Form::open(['method' => 'DELETE','route' => ['customers.destroy', $customer->customer_id],'style'=>'display:inline']) !!}
				{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
				{!! Form::close() !!}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

<br/>
<a class="btn btn-success" href="{{ route('customers.create') }}">Create a customer</a>

</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#customersTable').DataTable();
	});
</script>

@endsection
