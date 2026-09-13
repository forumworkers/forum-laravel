<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// usar clase
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Calification;
use App\Models\UserCalification;

use App\Models\UserIgnored;

use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */   
    public function index()
    {   

    //  $email = Auth::user()->email;

    //  $orders = DB::table('orders as o')
    //  ->where('o.email', $email)              
    //  ->get();


    //  // print_r($orders);

    //    // exit;



    //  return view('orders.index', [
    //   'orders' => $orders

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username, $id)
    {

        // print_r($username.$id);

        // $member = User::where('username', $username)
        // ->where('id', $id)
        // ->first();

        $member = User::select('users.username','users.img','users.url_profile','users.created_at','co.country_flag','co.country_name')
        ->join('countrys as co', 'users.country_id', '=', 'co.id') 
        ->where('users.id', $id)
        ->where('users.username', $username)
        // ->first();
        ->firstOrFail();




         

        // nuevo obtener id del revoew
        // $clientusername = User::select('users.username')
        // ->join('users_califications as uc', 'uc.user_id', '=', 'users.id') 
        // ->where('uc.user_id',  $id )
        // // ->where('u.username', $username)
        // ->where('uc.accept', 1)
        // ->get();
         // ->first();

        // print_r($clientusername);
        // print_r($clientusername['username']);
        // print_r($clientusername[0]->user_id_client);

        // print_r($clientusername[2]->user_id_client);

        // exit;

        // print_r($clientusername->username);
         // print_r($clientusername->user_id_client);


        //  $memberclient = User::select('uc.user_id_client')
        //  ->join('users_califications as uc', 'uc.user_id', '=', 'users.id')        
        //  ->where('users.id', $id)        
        // ->get();

          // print_r($memberclient);

        //   $memberusername = User::select('users.username')       
        //  ->where('users.id', $memberclient[0]['user_id_client'])      
        // ->get();

          // print_r($memberusername);


        // print_r($memberclient->username);

        // exit;





        $califications = Calification::select('califications.calification_name','califications.calification_icon','califications.calification_color','uc.calification_id','uc.review','p.post_name','uc.created_at','uc.user_id_client','uc.username_client','p.id as postid','p.maincategory_id','p.url_name')
        ->join('users_califications as uc', 'uc.calification_id', '=', 'califications.id')
        ->join('users as u', 'u.id', '=', 'uc.user_id')
        ->join('posts as p', 'p.id', '=', 'uc.post_id')
        // ->join('maincategorys as mc', 'mc.id', '=', 'posts.maincategory_id')      
        ->where('u.id',  $id )
        // ->where('u.username', $username)
        ->where('uc.accept', 1)
        ->orderBy('uc.created_at', 'desc')  
     // ->where('uc.calification_id', 1)
      // ->where('uc.calification_id', 2)
        ->get();
        // ->paginate(10);

        // print_r($califications );

        // exit;

        // ejemplo merge en laravel
        // $users = User::all();
        // $associates = Associate::all();

        // $userAndAssociate = $users->merge($associates);

        // $caliname = $califications->merge($memberusername);

        // print_r($caliname);

        // exit;

        //practicas no sirve por el join
        //  $calificationsbuyer = UserCalification::select('users_califications.review_back','users_califications.created_at','users_califications.user_id','u.username')            
        // // ->where('user_id_client',  $id )
        // ->where('users_califications.user_id',  $id )
        //  ->join('users as u', 'u.id', '=', 'users_califications.user_id')        
        // ->orderBy('created_at', 'desc')    
        // ->paginate(10);

        $calificationsbuyer = UserCalification::select('review_back','created_at','user_id_client','username_client','username_post','user_id')            
        ->where('user_id_client',  $id )        
        ->orderBy('created_at', 'desc')    
        ->paginate(10);

        // print_r( $calificationsbuyer );

        // exit;

        $calificationscomment = UserCalification::select('review','created_at')
        // ->join('users_califications as uc', 'uc.calification_id', '=', 'califications.id')
        // ->join('users as u', 'u.id', '=', 'uc.user_id')
        // ->join('posts as p', 'p.id', '=', 'uc.post_id')      
        ->where('user_id',  $id )
        // ->where('u.username', $username)
        // ->where('uc.accept', 1)
        ->orderBy('created_at', 'desc')  
     // ->where('uc.calification_id', 1)
      // ->where('uc.calification_id', 2)
        // ->get();
        ->paginate(10);

        return view('member', [
            'member' => $member,
            'califications' => $califications, 
            'calificationsbuyer' => $calificationsbuyer,
            'calificationscomment' => $calificationscomment,
            'id' => $id                        
        ]);

         // pruebas uno

        // print_r($id);

        // extraemos el ultimo elemento
        // $url_id = substr($id, -1);
        // // $url_id = substr($id, -2, -3);

        // // $member = User::findOrFail($url_id);

        // $member = User::find($url_id);

        // // print_r($member['username']);

        // // exit;

        // $members = User::where('username', $member['username'])
        // ->where('id', $url_id)
        // ->first();

        // // print_r($url_id);

        // print_r($members);

        // prueba dos



     // return response()->json($id);
    }

    public function ignored($id)
    {

      // $id_user = Auth::user()->id;

      // // print_r($id_user);
      // // exit;

      // $userignored = new UserIgnored;

        // el usuario en session
      // $userignored->user_id = $id_user;
      //   // el usuario que se va a ignorar
      // $userignored->user_id_msg = $id;
      // $userignored->is_ignored = 1;     


      // $userignored->save();



      // // $user_ignored = true;

      // return back();

      $id_user = Auth::user()->id;

      // exit;

        // $user_ignored = DB::table('users')
        // ->where('id', $id)
        // ->update(['is_ignored' => 1 ]);

      $user_ignored = DB::table('messages_posts')
      ->where('user_id', $id_user)
      ->where('user_id_message', $id)
      ->update(['is_ignored' => 1 ]);

      return back();

      // return response()->json($id_user);

      // return response()->json($user_ignored);

  }



  public function dignored($id)
  {

     $id_user = Auth::user()->id;

   // $user_ignored = DB::table('users_ignoreds')
   // ->where('user_id', $id_user)
   // ->where('user_id_msg', $id)
   // ->update(['is_ignored' => 0 ]);

     $user_ignored = DB::table('messages_posts')
     ->where('user_id', $id_user)
     ->where('user_id_message', $id)
     ->update(['is_ignored' => 0 ]);

     return back();

      // return response()->json($user_ignored);

       // return response()->json('test');

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
