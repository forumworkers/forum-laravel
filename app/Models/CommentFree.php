<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentFree extends Model
{
	use HasFactory;

	protected $table = 'comments_free';

	// public $timestamps = false;

	protected $fillable = [		
		'comment',
		'user_id',
		'post_id',
		'publish'				
	];	
}
