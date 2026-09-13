<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Backlink extends Model
{
	use HasFactory;

	protected $table = 'backlinks';

	// public $timestamps = false;

	protected $fillable = [		
		'backlink_url',
		'backlink_email',
		'is_buyer'		
	];	
}
