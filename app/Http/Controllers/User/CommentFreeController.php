<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

// usar clase
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Category;
use App\Models\MainCategory;
use App\Models\Post;
use App\Models\UserPost;

use App\Models\Message;
use App\Models\MessagePost;

use App\Models\Comment;
use App\Models\CommentFree;

use App\Models\UserPostFree;
use App\Models\PostFree;

use Illuminate\Support\Facades\DB;

use Mail;
use App\Mail\CommentFreeEmail;

class CommentFreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($username, $id)
    {

     // $id_user = Auth::user()->id;

     // $messages = User::select('messages.message')
     // ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
     // ->join('users as u', 'u.id', '=', 'mp.user_id')
     // ->join('posts as p', 'p.id', '=', 'mp.post_id')
     // ->where('u.id', $id_user)
     // ->get();


     //   print_r($subcategory.$id);

     // dd($messages);

     // exit;

    	$post = Post::select('posts.post_name')    
    	->where('posts.id', $id)
    	->first();


    	// return view('user.message', [
    	// 	'categoryid' => $id,
    	// 	'username' => $username,
    	// 	'post' => $post

    	// ]);
    }  


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // var_dump($request);

        // $email = Auth::user()->email;
    	$user_id = Auth::user()->id;

      //   $validator = Validator::make($request->all(), [       
      //     'country_nat' => 'required',
      //     'country' => 'required',
      //     'birthdate' => 'required',
      //     'ident_doc' => 'required',
      //     'passport_number' => 'required',
      //     'date_exp' => 'required',
      //     'country_offi' => 'required',
      //     'postal_code' => 'required',
      //     'address_primary' => 'required',
      //     'address_secondary' => 'required',
      //     'city' => 'required',
      //     'state' => 'required',
      //     'phone_number' => 'required',        
      // ]);


    	// $user = User::select('users.id')    
    	// ->where('users.username', $request->username)
    	// ->first();




     // dd($messages);

     // exit;

        $request->validate([
            'comment' => ['required', 'max:500']                     
        ]);

        $comment = new CommentFree;

        $comment->comment = $request->comment;
        $comment->user_id = $user_id;
        $comment->post_id = $request->post_id;

      // $message->read = 0;                

        $comment->save();

    	// $ = new Post;

    	// $messagepost->user_id = $user->id ;
    	// $messagepost->message_id = $message->id ;
    	// $messagepost->post_id  = $request->post_id;
    	// $messagepost->user_id_message = $user_id ;


    	// $messagepost->save();




        $postupdate = DB::table('posts_free')
        ->where('id', $request->post_id)
        ->update(['updated_at' => now()]);

        // email comentarios

        $userp = UserPostFree::select('users_posts_free.user_id')       
     ->where('users_posts_free.post_id', $request->post_id)         
     ->firstOrFail();

    

        $userdata = User::select('users.email')       
     ->where('users.id', $userp->user_id)         
     ->firstOrFail();

     //falta esta parte para el link, falta el parametro de categoria

          $postinfo = PostFree::select('posts_free.post_name','posts_free.url_name','posts_free.id as postid','posts_free.post_content','u.id as userid', 'u.username','u.img','r.rank_name','u.is_banned','co.country_name','posts_free.views','mc.maincategory_name','mc.subcategory_id','mc.maincategory_url','posts_free.created_at','mc.promo_url','posts_free.maincategory_id','co.country_flag','mc.promo_banner','u.url_patreon')       
     ->join('users_posts_free as up', 'up.post_id', '=', 'posts_free.id')
     ->join('users as u', 'u.id', '=', 'up.user_id')
     ->join('ranks as r', 'u.rank_id', '=', 'r.id')    
     ->join('countrys as co', 'u.country_id', '=', 'co.id') 
     ->join('maincategorys as mc', 'mc.id', '=', 'posts_free.maincategory_id')     
     ->where('posts_free.id', $request->post_id)
     ->where('posts_free.maincategory_id', $request->maincategory_id)
     ->where('posts_free.publish', null)      
     ->firstOrFail();    

     // mandar email a usuarios diferentes del autor del post
     if ($user_id != $postinfo->userid) {
       
       $mailData = [
        'title' => 'Tienes Nuevos Comentarios',
        'body' => 'Tu reciente Post tiene nuevos comentarios.',
        'url_name' =>  $postinfo->url_name,
        'maincategory_id' =>  $request->maincategory_id,
        'post_id' =>  $request->post_id
      ];
     

      Mail::to($userdata->email)->send(new CommentFreeEmail($mailData));
     
     }

      

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tema, $postid,$subcategoryid)
    {

        // $category = Post::select('posts.post_name','posts.url_name','posts.id as postid','mc.maincategory_name','u.id as userid', 'u.username','u.img','mc.id','mc.maincategory_url')
    	$category = Post::select('posts.post_name','posts.url_name','posts.id as postid','posts.post_content','u.id as userid', 'u.username','u.img','m.message')    
        // ->join('maincategorys as mc', 'mc.id', '=', 'posts.maincategory_id')
        // ->join('maincategorys as mc', 'mc.id', '=', 'posts.maincategory_id')
     // ->join('users_posts as up', 'up.maincategory_id', '=', 'posts.maincategory_id')
    	->join('messages_posts as mp', 'mp.post_id', '=', 'posts.id')
    	->join('messages as m', 'm.id', '=', 'mp.message_id')
    	->join('users as u', 'u.id', '=', 'mp.user_id')
     // ->join('subcategorys as sc', 'sc.category_id', '=', 'categorys.id')
     // ->join('maincategorys', 'mc.subcategory_id', '=', 'sc.id')
        // ->where('mc.subcategory_id', $subcategoryid)
        // ->where('up.maincategory_id', $subcategoryid)
        // ->where('posts.id', $postid)
        // ->where('u.user_id', $postid)
     // ->where('mc.id', 8)
        // ->orderBy('posts.id', 'asc')
     // ->first();
        // ->first();
    	->get();

        // dd($category);

        // exit;

      //   return view('inbox', [
      //     'post' => $category

      // ]);



    }


   // al messages
    public function inbox()
    {

    	$id_user = Auth::user()->id;

    	$messagesnavbar = Message::select('messages.message')
    	->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
    	->join('users as u', 'u.id', '=', 'mp.user_id')
    	->join('posts as p', 'p.id', '=', 'mp.post_id')
    	->where('u.id', $id_user)
    	->orderBy('messages.created_at', 'desc')
    	->limit(4)
    	->get();

    	$messages = Message::select('messages.message','messages.id','mp.user_id_message','u.username','p.post_name','u.img')
    	->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
    	->join('users as u', 'u.id', '=', 'mp.user_id')
    	->join('posts as p', 'p.id', '=', 'mp.post_id')
    	->where('u.id', $id_user)
    	->orderBy('messages.created_at', 'desc')
    	->get();


     // $messages = Message::select('messages.message','messages.id','mp.user_id_message','u.username','p.post_name')
     // ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
     // ->join('users as u', 'u.id', '=', 'mp.user_id')
     // ->join('posts as p', 'p.id', '=', 'mp.post_id')
     // ->where('u.id', $id_user)
     // ->where('mp.user_id_message', $userid)
     // ->orderBy('messages.created_at', 'desc')
     // // ->get();
     // ->first();

     //  $messagesuserid = $messages[0]->user_id_message;

     //  dd($messagesuserid);
     //  exit;


     // // $idusermsg = $messages[0]->user_id_message;
     // $idusermsg = $messages->user_id_message;

     // $usermsg = User::select('users.username','users.img')    
     // ->where('users.id', $idusermsg)    
     // ->first();


     // $messages->user_id_message;

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

    	return view('user.inbox', [
    		'messagesnavbar' => $messagesnavbar,
    		'messages' => $messages,
    		'summessages' => $summessages
    	]);



    }

    public function converusers($userid)
    {



    	$id_user = Auth::user()->id;

    	$messagesnavbar = Message::select('messages.message')
    	->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
    	->join('users as u', 'u.id', '=', 'mp.user_id')
    	->join('posts as p', 'p.id', '=', 'mp.post_id')
    	->where('u.id', $id_user)
    	->orderBy('messages.created_at', 'desc')
    	->limit(4)
    	->get();

    	$messages = Message::select('messages.message','messages.id','mp.user_id_message','u.username','p.post_name')
    	->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
    	->join('users as u', 'u.id', '=', 'mp.user_id')
    	->join('posts as p', 'p.id', '=', 'mp.post_id')
    	->where('u.id', $id_user)
    	->where('mp.user_id_message', $userid)
    	->orderBy('messages.created_at', 'desc')
     // ->get();
    	->first();


    	$readmessages = DB::table('messages')
    	->where('id', $messages->id)
    	->update(['read' => 1]);


     // $idusermsg = $messages[0]->user_id_message;
    	$idusermsg = $messages->user_id_message;

    	$usermsg = User::select('users.username','users.img')    
    	->where('users.id', $idusermsg)    
    	->first();

     // dd($usermsg);

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

       // $project = Project::findOrFail($id);
       //  $project->update($request->all());

     // $readmessages = DB::table('messages')
     //          ->where('id', $messages->id)
     //          ->update(['read' => 1]);


    	return view('user.converusers', [
    		'messagesnavbar' => $messagesnavbar,
    		'messages' => $messages,
    		'summessages' => $summessages,
    		'usermsg' => $usermsg
    	]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
