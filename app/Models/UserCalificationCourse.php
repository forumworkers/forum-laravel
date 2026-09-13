<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCalificationCourse extends Model
{
	use HasFactory;

	protected $table = 'users_califications_courses';

	// public $timestamps = false;

	protected $fillable = [		
		'user_id',
		'course_id',
		'calification_id',
		'review',		
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
