<?php

namespace App\Repository\Message;


use App\Models\Message;
use App\Repository\Message\MessageInterface as MessageInterface;



class MessageRepository implements MessageInterface
{
    public $message;


    function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function getAllReplysMessages($id_user)
	{
		return $this->message->select('messages.message','messages.id','u.username','u.img','r.reply','p.post_name','mp.user_id_message','mp.message_id','mp.user_id')
        ->join('replys as r', 'messages.id', '=', 'r.message_id')
        ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
      // ->join('users as u', 'u.id', '=', 'mp.user_id')
        ->join('posts as p', 'p.id', '=', 'mp.post_id')
        ->join('users as u', 'u.id', '=', 'r.user_id')
      // ->where('u.id', $id_user)
        // ->where('r.user_id', $id_user)
        ->where('mp.user_id_message', $id_user)
        ->orderBy('r.created_at', 'desc')
        ->get();
	}

       public function getLimitReplysMessages($id_user)
    {
        return $this->message->select('messages.message')
        ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
        ->join('users as u', 'u.id', '=', 'mp.user_id')
        ->join('posts as p', 'p.id', '=', 'mp.post_id')
        ->where('u.id', $id_user)
        ->where('mp.is_ignored', 0)
        ->orderBy('messages.created_at', 'desc')
        ->limit(4)
        ->get();
    }

     public function getLimitReplys($id_user)
    {
        return $this->message->select('r.reply')
        ->join('replys as r', 'messages.id', '=', 'r.message_id')
        ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')    
        ->join('posts as p', 'p.id', '=', 'mp.post_id')
        ->join('users as u', 'u.id', '=', 'r.user_id')   
        ->where('mp.user_id_message', $id_user)  
      // ->where('u.id', $id_user)
        ->orWhere('mp.user_id','=',$id_user)
        ->orderBy('r.created_at', 'desc')
        ->limit(4)
        ->get();
    }

      public function getAllReplys($id_user)
    {
        return $this->message->select('r.reply')
      // ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
      // ->join('users as u', 'u.id', '=', 'mp.user_id')
      // ->join('posts as p', 'p.id', '=', 'mp.post_id')
      // ->where('u.id', $id_user)
        ->join('replys as r', 'messages.id', '=', 'r.message_id')
        ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')    
        ->join('posts as p', 'p.id', '=', 'mp.post_id')
        ->join('users as u', 'u.id', '=', 'r.user_id')   
        ->where('mp.user_id_message', $id_user) 
      // ->where('messages.read', 0)
        ->orWhere('mp.user_id','=',$id_user)         
        ->get();
    }

      public function getLimitMessages($id_user)
    {
        return $this->message->select('messages.message')
        ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
        ->join('users as u', 'u.id', '=', 'mp.user_id')
        ->join('posts as p', 'p.id', '=', 'mp.post_id')
        ->where('u.id', $id_user)
        ->where('mp.is_ignored', 0)
        ->orderBy('messages.created_at', 'desc')
        ->limit(4)
        ->get();
    }

      public function getAllMessagesByUser($id_user)
    {
        return $this->message->select('messages.message','messages.id','mp.user_id_message','u.username','p.post_name','u.img','mp.user_id')
        ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
        ->join('users as u', 'u.id', '=', 'mp.user_id')
        ->join('posts as p', 'p.id', '=', 'mp.post_id')
        ->where('u.id', $id_user)
        ->where('mp.is_ignored', 0)
        ->orderBy('messages.created_at', 'desc')
        ->get();
    }

       public function getAllMessages($id_user)
    {
        return $this->message->select('messages.message')
        ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
        ->join('users as u', 'u.id', '=', 'mp.user_id')
        ->join('posts as p', 'p.id', '=', 'mp.post_id')
        ->where('u.id', $id_user)
        ->where('mp.is_ignored', 0)
        ->where('messages.read', 0)         
        ->get();
    }

    //  public function getLastPosts($options)
    // {
    //     return $this->post->select('posts.post_name','posts.url_name','mc.maincategory_name','u.id', 'u.username','posts.updated_at','posts.id as postid','mc.id as maincategory_id')    
    //   ->join('maincategorys as mc', 'mc.id', '=', 'posts.maincategory_id')   
    //   ->join('users_posts as up', 'up.post_id', '=', 'posts.id')
    //   ->join('users as u', 'u.id', '=', 'up.user_id')   
    //   ->where('mc.subcategory_id', $options)
    //   ->where('posts.publish', null)    
    //   ->orderBy('posts.updated_at', 'desc')   
    //   ->first();
    //  // ->get();
    // }
}