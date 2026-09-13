<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostFree extends Model
{
	use HasFactory;

	protected $table = 'posts_free';

	// public $timestamps = false;

	protected $fillable = [		
		'post_name',
		'url_name',
		'post_content',
		'maincategory_id',
		'content_id',
		// 'type_id',
		// 'site_id',
		// 'payment_id',
		// 'comition_id',
		// 'condition_id',
		// 'revition_id',
		'publish',
		'views'
		// 'comment_id'
		// 'created_at',
		// 'updated_at'
		// 'client_name',
		// 'client_phone',
		// 'client_email',
		// 'client_address',
		// 'project_name'
	];

	// ejemplo para usar valires por defecto en modelo en vez de usar en migraciones
	// protected $attributes = [
 //        'status' => self::STATUS_UNCONFIRMED,
 //        'role_id' => self::ROLE_PUBLISHER,
 //    ];

	// public function quotes(){
	
	// 	return $this->hasMany(Quote::class);
	// }

	// public function users()
 //    {

 //    	// se referencia a la tabla pivot users_products y no a los id
 //    	return $this->belongsToMany(User::class, 'users_products');

 //        // return $this->belongsToMany(User::class, 'user_id');

 //        // return $this->belongsToMany(User::class);
 //    }
}
