<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller {

	public function index() {

		$customersList = Customer::all();
		return view('customersList', compact('customersList'));

	}

	public function create() {

		return view('customersCreate');
	}

	public function store(Request $request) {

		//$v = \Validator::make($request->all(), [

		request()->validate([
			'Name' => 'required',
			'Age' => 'required',
			'Sex' => 'required',
		]);

		/*if ($v->fails()) {
			return redirect()->back()->withInput()->withErrors($v->errors());
		}*/

		Customer::create($request->all());
		return redirect()->route('customers.index')->with('success', 'Customer created successfully');
	}

	public function show($id) {
		return view('index');
	}

	public function edit($customerId) {

		$customer = Customer::find($customerId);
		return view('customersEdit', compact('customer'));
	}

	public function update(Request $request, $customerId) {

		request()->validate([
			'Name' => 'required',
			'Age' => 'required',
			'Sex' => 'required',
		]);

		Customer::find($customerId)->update($request->all());
		return redirect()->route('customers.index')->with('success', 'Customer updated successfully');
	}

	public function destroy($customerId) {
		Customer::find($customerId)->delete();
		return redirect()->route('customers.index')->with('success', 'Article deleted successfully');
	}
}
