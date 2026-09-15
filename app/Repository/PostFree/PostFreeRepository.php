<?php

namespace App\Repository\PostFree;


use App\Models\PostFree;
use App\Repository\PostFree\PostFreeInterface as PostFreeInterface;



class PostFreeRepository implements PostFreeInterface
{
    public $postfree;


    function __construct(PostFree $postfree)
    {
        $this->postfree = $postfree;
    }

    public function getAllPosts($options)
	{
		return $this->postfree->select('posts_free.post_name','posts_free.url_name','posts_free.id as postid','mc.maincategory_name','mc.subcategory_id','u.id as userid', 'u.username','u.img','mc.id','mc.maincategory_url','posts_free.created_at','posts_free.updated_at','cont.content_name','cont.content_color')    
        ->join('maincategorys as mc', 'mc.id', '=', 'posts_free.maincategory_id')
        ->join('contents as cont', 'cont.id', '=', 'posts_free.content_id')     
        ->join('users_posts_free as up', 'up.post_id', '=', 'posts_free.id')
        ->join('users as u', 'u.id', '=', 'up.user_id')
        ->where('mc.subcategory_id', $options)
        ->where('posts_free.publish', null)   
        ->orderBy('posts_free.updated_at', 'desc')    
        ->limit(5)
        ->get();
	}

      public function getLastPosts($options)
    {
        return $this->postfree->select('posts_free.post_name','posts_free.url_name','mc.maincategory_name','u.id', 'u.username','posts_free.updated_at','posts_free.id as postid','mc.id as maincategory_id','sc.subcategory_url','mc.maincategory_url')       
      ->join('maincategorys as mc', 'mc.id', '=', 'posts_free.maincategory_id')
      ->join('subcategorys as sc', 'sc.id', '=', 'mc.subcategory_id')    
      ->join('users_posts_free as up', 'up.post_id', '=', 'posts_free.id')
      ->join('users as u', 'u.id', '=', 'up.user_id')    
      ->where('mc.subcategory_id', 3)
      ->where('posts_free.publish', null)   
      ->orderBy('posts_free.updated_at', 'desc')   
      ->first();
    }
}