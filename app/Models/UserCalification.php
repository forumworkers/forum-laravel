<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCalification extends Model
{
	use HasFactory;

	protected $table = 'users_califications';

	// public $timestamps = false;

	protected $fillable = [		
		'user_id',
		'post_id',
		'calification_id',
		'user_id_client',
		'username_client',
		'username_post',
		'review',
		'review_back',
		'accept'		
		// 'created_at',
		// 'updated_at'
		// 'client_name',
		// 'client_phone',
		// 'client_email',
		// 'client_address',
		// 'project_name'
	];

	
}
