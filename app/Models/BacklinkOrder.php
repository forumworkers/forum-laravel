<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BacklinkOrder extends Model
{
	use HasFactory;

	protected $table = 'backlinks_orders';

	// public $timestamps = false;

	protected $fillable = [		
		'order',		
		'payer_email',
		'maincategory_id',
		'payer_id'
		
	];

	
}
