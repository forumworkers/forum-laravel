<?php

namespace App\Repository\Post;


use App\Models\Post;
use App\Repository\Post\PostInterface as PostInterface;



class PostRepository implements PostInterface
{
    public $post;


    function __construct(Post $post)
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
		return $this->post->select('posts.post_name','posts.url_name','posts.id as postid','mc.maincategory_name','mc.subcategory_id','u.id as userid', 'u.username','u.img','mc.id','mc.maincategory_url','t.type_name','posts.created_at','posts.updated_at','t.type_color')    
		->join('maincategorys as mc', 'mc.id', '=', 'posts.maincategory_id')
		->join('types as t', 't.id', '=', 'posts.type_id')    
		->join('users_posts as up', 'up.post_id', '=', 'posts.id')
		->join('users as u', 'u.id', '=', 'up.user_id')
		->where('mc.subcategory_id', $options)
		->where('posts.publish', null)     
		->orderBy('posts.updated_at', 'desc')    
		->limit(5)
		->get();
	}
}