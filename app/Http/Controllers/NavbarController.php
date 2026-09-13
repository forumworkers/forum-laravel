<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// usar clase
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Message;

use Illuminate\Support\Facades\DB;

class NavbarController extends Controller
{

	public $id_user;

	// el auth no sirve een el constructor
	public function __construct()
	{

		// $userData = AppSession::getLoginData();

		// dd($userData);

		// print_r($_SESSION);

		// exit;

		// if (Auth::user()) {

			// $id_user = Auth::user()->id;


			$id_user = $this->id_user;

			// dd($id_user);
			// exit;


			$replys = Message::select('messages.message','messages.id','u.username','u.img','r.reply','p.post_name','mp.user_id_message','mp.message_id','mp.user_id')
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

      // dd($replys);
      // exit;

      // $replys = Message::select('u.id as userid', 'u.username','u.img','r.reply')        
     // ->join('replys as r', 'messages.id', '=', 'r.message_id')
     // ->join('users as u', 'u.id', '=', 'r.user_id')
     // // ->join('ranks as r', 'u.rank_id', '=', 'r.id')       
     // // ->where('posts.id', $postid)
     // // ->where('r.message_id', 1)
     // ->where('r.message_id', $message_id)
     //    // ->where('u.user_id', $postid)
     // // ->where('mc.id', 8)
     //    // ->orderBy('posts.id', 'asc')
     // // ->first();
     // // ->first();
     // ->get();

      // ->orWhere('campoA','=','2')

			$replysnavbar = Message::select('r.reply')
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

      // dd($replysnavbar);

      // exit;
			$replysall = Message::select('r.reply')
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


			$sumreplys = count($replysall);

      // dd($sumreplys);

      // exit;

      // area mensajes 


			$messagesnavbar = Message::select('messages.message')
			->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
			->join('users as u', 'u.id', '=', 'mp.user_id')
			->join('posts as p', 'p.id', '=', 'mp.post_id')
			->where('u.id', $id_user)
			->orderBy('messages.created_at', 'desc')
			->limit(4)
			->get();

			$messages = Message::select('messages.message','messages.id','mp.user_id_message','u.username','p.post_name','u.img','mp.user_id')
			->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
			->join('users as u', 'u.id', '=', 'mp.user_id')
			->join('posts as p', 'p.id', '=', 'mp.post_id')
			->where('u.id', $id_user)
			->orderBy('messages.created_at', 'desc')
			->get();

     // dd($messages[0]['user_id_message']);

     // exit;


			$mmessagesall = Message::select('messages.message')
			->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
			->join('users as u', 'u.id', '=', 'mp.user_id')
			->join('posts as p', 'p.id', '=', 'mp.post_id')
			->where('u.id', $id_user)
			->where('messages.read', 0)         
			->get();


			$summessages = count($mmessagesall);

     // dd($messages);

     // exit;

		// return view('user.reply', [
		// 	'messagesnavbar' => $messagesnavbar,
		// 	'messages' => $messages,
		// 	'summessages' => $summessages, 
		// 	'replys' => $replys,
		// 	'replysnavbar' => $replysnavbar, 
		// 	'sumreplys' => $sumreplys 

		// ]);

		// $prueba = 1;




			return view('layouts/app', [
				'messagesnavbar' => $messagesnavbar,
				'messages' => $messages,
				'summessages' => $summessages, 
				'replys' => $replys,
				'replysnavbar' => $replysnavbar, 
				'sumreplys' => $sumreplys,
			// 'prueba' => $prueba  

			]);


		// }



	}
    
 
  }
