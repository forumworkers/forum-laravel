<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatisticsBanner extends Model
{
	use HasFactory;

	protected $table = 'statistics_banner';

	// public $timestamps = false;

	protected $fillable = [			
		'maincategory_id'
		
	];

	
}
