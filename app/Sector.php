<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
	protected $table = 'sector';

	public $timestamps = false;

	protected $fillable = ['description'];

	protected $casts = [
		'id' => 'integer',
		'description' => 'string',
	];

}
