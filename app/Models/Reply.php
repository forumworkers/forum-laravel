<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
	use HasFactory;

	protected $table = 'replys';

	// public $timestamps = false;

	protected $fillable = [		
		'reply',
		'user_id',
		'message_id'				
	];	
}
