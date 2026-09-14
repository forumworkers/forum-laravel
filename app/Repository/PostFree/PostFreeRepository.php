<?php

namespace App\Repository\PostFree;


use App\Models\PostFree;
use App\Repository\PostFree\PostFreeInterface as PostFreeInterface;



class PostFreeRepository implements PostFreeInterface
{
    public $post;


    function __construct(PostFree $post)
    {
        $this->post = $post;
    }


    public function getAll()
    {
        return $this->post->get();
    }


    public function find($id)
    {
        return $this->post->find($id);
    }



    public function delete($id)
    {
        return $this->post->delete($id);
    }

    public function getLastPosts($options)
	{
		return PostFree::select('posts_free.post_name','posts_free.url_name','posts_free.id as postid','mc.maincategory_name','mc.subcategory_id','u.id as userid', 'u.username','u.img','mc.id','mc.maincategory_url','posts_free.created_at','posts_free.updated_at','cont.content_name','cont.content_color')    
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
}