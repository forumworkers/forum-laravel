<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategoryBacklink extends Model
{
	use HasFactory;

	protected $table = 'maincategorys_backlinks';

	// public $timestamps = false;

	protected $fillable = [		
		'maincategory_id',
		'backlink_id'
		// 'maincategory_id'		
		// 'created_at',
		// 'updated_at'
		// 'client_name',
		// 'client_phone',
		// 'client_email',
		// 'client_address',
		// 'project_name'
	];

	
}
