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

use Illuminate\Support\Facades\DB;

class MessageController extends Controller
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


      return view('user.message', [
        'categoryid' => $id,
        'username' => $username,
        'post' => $post

      ]);
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

      $request->validate([
        'message' => ['required', 'max:255']        
      ]);


      $user = User::select('users.id')    
      ->where('users.username', $request->username)
      ->first();

      // if ( Auth::user()->id == $user_id) {

      if ( $user->id == $user_id) {

        throw new \Exception('Eres el Author del Post');
      }


      $messagesvalidation = MessagePost::select('messages_posts.id')    
      ->where('messages_posts.user_id_message',  $user_id)
      ->where('messages_posts.user_id', $user->id)
      ->where('messages_posts.post_id', $request->post_id)
      ->first();

      if ($messagesvalidation) {

        throw new \Exception('Ya tienes un mensaje activo para este post');
      }


      

     // dd($messages);

     // exit;

      $message = new Message;

      $message->message = $request->message;
      $message->read = 0;                

      $message->save();

      $messagepost = new MessagePost;

      $messagepost->user_id = $user->id;
      $messagepost->message_id = $message->id;
      $messagepost->post_id  = $request->post_id;
      $messagepost->user_id_message = $user_id;
      $messagepost->is_ignored = 0;


      $messagepost->save();

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
     // ->join('users_ignoreds as ui', 'u.id', '=', 'ui.user_id_msg')
     ->where('u.id', $id_user)
     ->where('mp.is_ignored', 0)
     // ->where('ui.user_id', $id_user)
     // ->where('ui.is_ignored', 0)
     ->orderBy('messages.created_at', 'desc')
     ->limit(4)
     ->get();

     $messages = Message::select('messages.message','messages.id','mp.user_id_message','u.username','p.post_name','u.img','mp.user_id','messages.created_at','messages.read','mp.post_id')
     ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
     ->join('users as u', 'u.id', '=', 'mp.user_id')
     ->join('posts as p', 'p.id', '=', 'mp.post_id')
     // ->join('users_ignoreds as ui', 'u.id', '=', 'ui.user_id_msg')
     ->where('u.id', $id_user)
     ->where('mp.is_ignored', 0)
     // ->where('ui.user_id', $id_user)
     // ->where('ui.is_ignored', 0)
     ->orderBy('messages.created_at', 'desc')
     // ->get();
     ->paginate(10);


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
     ->where('mp.is_ignored', 0)
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

   public function converusers($userid,$useridmessage,$postid)
   {



     $id_user = Auth::user()->id;

     // dd()


     // verificar usuario logeado que envia o recibe mensaje
     if ($id_user == $userid || $id_user == $useridmessage) {



       $messagesnavbar = Message::select('messages.message')
       ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
       ->join('users as u', 'u.id', '=', 'mp.user_id')
       ->join('posts as p', 'p.id', '=', 'mp.post_id')
       // ->join('users_ignoreds as ui', 'u.id', '=', 'ui.user_id_msg')
       ->where('u.id', $id_user)
       ->where('mp.is_ignored', 0)
       // ->where('ui.user_id', $id_user)
       // ->where('ui.is_ignored', 0)
       ->orderBy('messages.created_at', 'desc')
       ->limit(4)
       ->get();



       $messages = Message::select('messages.message','messages.id','mp.user_id_message','u.username','p.post_name','mp.message_id',)
       ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
       ->join('users as u', 'u.id', '=', 'mp.user_id')
       ->join('posts as p', 'p.id', '=', 'mp.post_id')
       // ->join('users_ignoreds as ui', 'u.id', '=', 'ui.user_id_msg')
     // ->where('u.id', $id_user)
       ->where('u.id', $userid)
       ->where('mp.is_ignored', 0)
     // ->where('mp.user_id_message', $userid)
       ->where('mp.user_id_message', $useridmessage)
       ->where('mp.post_id',  $postid)
       ->orderBy('messages.created_at', 'desc')
     // ->get();
       ->first();




       $readmessages = DB::table('messages')
       ->where('id', $messages->id)
       ->update(['read' => 1]);


     // $idusermsg = $messages[0]->user_id_message;
       $idusermsg = $messages->user_id_message;

       $usermsg = User::select('users.username','users.img','users.id')    
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
       ->where('mp.is_ignored', 0)
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


     // zona de reply
     // $message_id = $messages->id;
       $message_id = $messages->message_id;


     // dd($message_id);

     // exit;


     // comentarios
     // $comments = Post::select('posts.post_name','posts.url_name','posts.id as postid','posts.post_content','u.id as userid', 'u.username','u.img','c.comment')
       $replys = Message::select('u.id as userid', 'u.username','u.img','r.reply')        
       ->join('replys as r', 'messages.id', '=', 'r.message_id')
       ->join('users as u', 'u.id', '=', 'r.user_id')
     // ->join('ranks as r', 'u.rank_id', '=', 'r.id')       
     // ->where('posts.id', $postid)
     // ->where('r.message_id', 1)
       ->where('r.message_id', $message_id)
        // ->where('u.user_id', $postid)
     // ->where('mc.id', 8)
        // ->orderBy('posts.id', 'asc')
     // ->first();
     // ->first();
       ->get();

     // dd($replys);

     // exit;

     // dd($postid);

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

       $replysall = Message::select('r.reply')  
       ->join('replys as r', 'messages.id', '=', 'r.message_id')
       ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')    
       ->join('posts as p', 'p.id', '=', 'mp.post_id')
       ->join('users as u', 'u.id', '=', 'r.user_id')   
       ->where('mp.user_id_message', $id_user) 
      // ->where('messages.read', 0)
       ->orWhere('mp.user_id','=',$id_user)         
       ->get();


       $sumreplys = count($replysall);


       return view('user.converusers', [
        'messagesnavbar' => $messagesnavbar,
        'messages' => $messages,
        'summessages' => $summessages,
        'usermsg' => $usermsg, 
        'replys' => $replys,
        'replysnavbar' => $replysnavbar,
        'sumreplys' => $sumreplys
      ]);


     }
      // end verificacion



   }

   public function msgfront()
   {
     if (Auth::user()) {

      $id_user = Auth::user()->id;

 // $messages = Message::select('messages.message','messages.id','mp.user_id_message','u.username','p.post_name','mp.message_id')

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
      ->where('mp.is_ignored', 0)
      ->orderBy('messages.created_at', 'desc')
      ->limit(4)
      ->get();

      $messages = Message::select('messages.message','messages.id','mp.user_id_message','u.username','p.post_name','u.img','mp.user_id')
      ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
      ->join('users as u', 'u.id', '=', 'mp.user_id')
      ->join('posts as p', 'p.id', '=', 'mp.post_id')
      ->where('u.id', $id_user)
      ->where('mp.is_ignored', 0)
      ->orderBy('messages.created_at', 'desc')
      ->get();

     // dd($messages[0]['user_id_message']);

     // exit;


      $mmessagesall = Message::select('messages.message')
      ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
      ->join('users as u', 'u.id', '=', 'mp.user_id')
      ->join('posts as p', 'p.id', '=', 'mp.post_id')
      ->where('u.id', $id_user)
      ->where('mp.is_ignored', 0)
      ->where('messages.read', 0)         
      ->get();


      $summessages = count($mmessagesall);

      $data = array(
       'messagesnavbar' => $messagesnavbar,
       'summessages' => $summessages,
       'replys' => $replys,
       'replysnavbar' => $replysnavbar,
       'sumreplys' => $sumreplys

     );

      return response()->json($data);





      // return view('home', [
      //   'categorylastnegocios' =>  $categorylastnegocios,
      //   'categorylastservicios' =>   $categorylastservicios,              
      //   // 'categorys' => $array,
      //   'categorys' => $category,
      //   'categoryslast' =>  $categorylast,
      //   'categoryslastser' =>  $categorylastser,
      //   'categorys1' => $category1,
      //   'messagesnavbar' => $messagesnavbar,
      //   'summessages' => $summessages,
      //   'replys' => $replys,
      //   'replysnavbar' => $replysnavbar,
      //   'sumreplys' => $sumreplys
      // // 'subcategorys' => $subcategory,
      // ]);

    }
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
