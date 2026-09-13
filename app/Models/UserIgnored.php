<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserIgnored extends Model
{
	use HasFactory;

	protected $table = 'users_ignoreds';

	// public $timestamps = false;

	protected $fillable = [		
		'user_id',
		'user_id_msg',
		'is_ignored'
		// 'user_id_client',
		// 'review',
		// 'review_back',
		// 'accept'		
		// 'created_at',
		// 'updated_at'
		// 'client_name',
		// 'client_phone',
		// 'client_email',
		// 'client_address',
		// 'project_name'
	];

	
}
