<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pensum extends Model
{
	use HasFactory;

	protected $table = 'pensums';

	// public $timestamps = false;

	protected $fillable = [		
		'pensum_name',
		'pensum_video',
		'course_id'			
		// 'created_at',
		// 'updated_at'
		// 'client_name',
		// 'client_phone',
		// 'client_email',
		// 'client_address',
		// 'project_name'
	];

	
}
