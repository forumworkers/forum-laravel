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

use App\Models\Calification;
use App\Models\UserCalification;

use Illuminate\Support\Facades\DB;

class CalificationController extends Controller
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

    	$post = Post::select('posts.url_name')    
    	->where('posts.id', $id)
    	->first();

    	$califications = Calification::select('califications.id','califications.calification_name')    
    	// ->where('users.username', $request->username)
    	->get();

    	// dd($post);

     // exit;



    	return view('user.calification', [
    		'categoryid' => $id,
    		'username' => $username,
    		'post' => $post,
    		'califications' => $califications

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
        $username_client = Auth::user()->username;

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
        'review' => ['required', 'max:255']        
      ]);

        $califications = UserCalification::select('users_califications.calification_id')    
        ->where('users_califications.post_id', $request->post_id)
        ->where('users_califications.user_id_client', $user_id)
        ->first();

        // dd($califications);
        // exit;

        // $calitotal = count($califications->calification_id);


        $user = User::select('users.id')    
        ->where('users.username', $request->username)
        ->first();

        if ( $user->id == $user_id) {

            throw new \Exception('No puedes calificar tu negocio');
        }

        if ( !empty($califications)) {

            // si no pones array no acepta integer
            $calitotal = count((array)$califications->calification_id);

            // $calitotal = count($califications->calification_id);


            if ( $calitotal >= 1) {

                throw new \Exception('Ya calificaste este negocio');
            }

        }








     // dd($messages);

     // exit;

    	// $message = new Message;

    	// $message->message = $request->message;
    	// $message->read = 0;                

    	// $message->save();

        $usercalification = new UserCalification;

        $usercalification->user_id = $user->id ;    	
        $usercalification->post_id  = $request->post_id;
        $usercalification->calification_id  = $request->calification_id;
        $usercalification->user_id_client = $user_id;
        $usercalification->username_client = $username_client;
        $usercalification->review  = $request->review;
        $usercalification->review_back  = null;
        $usercalification->accept  = 0;


        $usercalification->save();

        // return back();

         return back()->with('success', 'Reseña Agregada !!, La contraparte puede aceptar o omitir');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {

    	$users = User::select('users.id')    
    	->where('users.username', $username)
     // ->where('uc.calification_id', 1)
      // ->where('uc.calification_id', 2)
    	->first();

    	$user_id = $users->id;

    	// dd($user_id);

    	// exit;

    	$califications = Calification::select('califications.calification_name','califications.calification_icon','califications.calification_color','uc.calification_id','uc.review','p.post_name')
    	->join('users_califications as uc', 'uc.calification_id', '=', 'califications.id')
    	->join('users as u', 'u.id', '=', 'uc.user_id')
    	->join('posts as p', 'p.id', '=', 'uc.post_id')    	 
    	->where('u.id',  $user_id )
        ->where('uc.accept', 1)
        ->orderBy('uc.created_at', 'desc')  
     // ->where('uc.calification_id', 1)
      // ->where('uc.calification_id', 2)
        // ->get();
        ->paginate(10);

    	// dd($califications);

    	// exit;

        return view('user.calification_all', [
          'califications' => $califications

      ]);



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

    	$messages = Message::select('messages.message')
    	->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
    	->join('users as u', 'u.id', '=', 'mp.user_id')
    	->join('posts as p', 'p.id', '=', 'mp.post_id')
    	->where('u.id', $id_user)
    	->get();


     // dd($messages);

     // exit;

    	return view('user.inbox', [
    		'messagesnavbar' => $messagesnavbar,
    		'messages' => $messages

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
