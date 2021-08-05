<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

	public $timestamps = false;

	protected $primaryKey = 'customer_id';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'Name', 'Age', 'Sex',
	];
}
