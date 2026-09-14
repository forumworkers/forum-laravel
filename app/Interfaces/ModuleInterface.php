<?php

// namespace App\Http\Services;

// namespace App\Repository\Post;

namespace App\Interfaces;



interface ModuleInterface
{
    

	public function responseGet($segment,$api_key_factory,$website,$user_id,$software_id);

	public function responsePost($segment,$api_key_factory,$website,$user_id,$software_id);
}