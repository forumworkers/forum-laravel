<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

// use App\Http\Controllers\Controller;
// use App\Http\Requests\Auth\LoginRequest;
// use App\Providers\RouteServiceProvider;

// usar clase
use Illuminate\Support\Facades\Auth;

use App\Models\User;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

use App\Models\Rank;
use App\Models\Country;
use App\Models\Calification;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // ejemplos relaciones
    // public function index()
    // {

    //     $user = User::find(1);  

    //     // dd($user);

    //     // dd($user->products);   

    //     dd($user->products()->sync(1));

    //     $user = Auth::user();

    //  // $email = Auth::user()->email;
    //  // $id = Auth::user()->id;

    //     return response()->json($user);
    // }
    public function index()
    {

      $user = Auth::user();       

      $email = Auth::user()->email;


      return view('user.settings');
    }

    public function info()
    {

      $user = Auth::user();       

      $user_id = Auth::user()->id;

      $user = User::select('users.img','users.username','users.id as userid','users.email','users.country_id','users.theme_color','c.country_name','r.rank_name','users.url_patreon')
      ->join('ranks as r', 'r.id', '=', 'users.rank_id')
      ->join('countrys as c', 'c.id', '=', 'users.country_id')          
     // ->join('users_memberships as um', 'um.membership_id', '=', 'memberships.id')
     // ->join('users as u', 'um.user_id', '=', 'u.id')       
      // ->where('mc.subcategory_id', 1)
     // ->join('subcategorys as sc', 'sc.category_id', '=', 'categorys.id')
     // ->join('maincategorys', 'mc.subcategory_id', '=', 'sc.id')
      // ->where('mc.maincategory_url', 1)
      ->where('users.id', $user_id)
      // ->where('posts.site_id', 1)
      // ->where('u.id', $id_user)
      // ->orderBy('mc.id', 'asc')
      // ->orderBy('posts.created_at', 'desc')
      // ->orderBy('posts.updated_at', 'desc')     
      ->first();


      $ranks = Rank::select('ranks.rank_name') 
      ->get();

      $countrys = Country::select('countrys.country_name','countrys.id') 
      ->get();



      // return view('user.info');

      return view('user.info', [       
        'user' => $user,
        'ranks' => $ranks,
        'countrys' => $countrys
      ]);
    }


    public function store(Request $request)
    {


      $user_id = Auth::user()->id;

      // $file = $request->file('img');

      $file = $request->file('img');

      if (empty($file)) {
        // dd($file);
      // exit;

      // $random_number_img =  $file.rand(1,10000);       

      // $fileName = $file->getClientOriginalName();

      // $random_number_img = rand(1,10000).$fileName; 

      // $random_number_img =  $fileName.rand(1,10000);

      // $random_number_img =  $file.rand(1,10000);      

      // las imagenes se guardan en storage/app/public/uploads
      //uploads es la carpeta que se añade, puede ser cualquiera
      // $filePath = $request->file('img')->storeAs('uploads', $random_number_img , 'public');

       // $user_id = Auth::user()->id;

       $user = User::select('users.img','users.username','users.id as userid','users.email','users.country_id','users.theme_color','c.country_name','r.rank_name','users.url_patreon')
       ->join('ranks as r', 'r.id', '=', 'users.rank_id')
       ->join('countrys as c', 'c.id', '=', 'users.country_id')          
     // ->join('users_memberships as um', 'um.membership_id', '=', 'memberships.id')
     // ->join('users as u', 'um.user_id', '=', 'u.id')       
      // ->where('mc.subcategory_id', 1)
     // ->join('subcategorys as sc', 'sc.category_id', '=', 'categorys.id')
     // ->join('maincategorys', 'mc.subcategory_id', '=', 'sc.id')
      // ->where('mc.maincategory_url', 1)
       ->where('users.id', $user_id)
      // ->where('posts.site_id', 1)
      // ->where('u.id', $id_user)
      // ->orderBy('mc.id', 'asc')
      // ->orderBy('posts.created_at', 'desc')
      // ->orderBy('posts.updated_at', 'desc')     
       ->first();


       // $update_info = DB::table('users')
       // ->where('id', $user_id)
       // ->update(['img' => $user->img ,'country_id' => $request->country_id,'theme_color' =>  $request->theme_color,'rank_id' => $request->rank_id ]);

       $update_info = DB::table('users')
       ->where('id', $user_id)
       ->update(['img' => $user->img ,'theme_color' =>  $request->theme_color,'rank_id' => $request->rank_id,'url_patreon' => $request->url_patreon ]);
     }

     if (!empty($file)) {


      $fileName = $file->getClientOriginalName();

      $random_number_img = rand(1,10000).$fileName; 



      // las imagenes se guardan en storage/app/public/uploads
      //uploads es la carpeta que se añade, puede ser cualquiera
      $filePath = $request->file('img')->storeAs('uploads', $random_number_img , 'public');


      // $update_info = DB::table('users')
      // ->where('id', $user_id)
      // ->update(['img' => $random_number_img ,'country_id' => $request->country_id,'theme_color' =>  $request->theme_color,'rank_id' => $request->rank_id ]);

       $update_info = DB::table('users')
      ->where('id', $user_id)
      ->update(['img' => $random_number_img ,'theme_color' =>  $request->theme_color,'rank_id' => $request->rank_id,'url_patreon' => $request->url_patreon ]);
    }



    return back(); 


  }


  public function waycalifications()
  {


    $user_id = Auth::user()->id;

    $califications = User::select('c.id','uc.user_id_client')
    ->join('users_califications as uc', 'uc.user_id', '=', 'users.id')
    ->join('califications as c', 'uc.calification_id', '=', 'c.id')
    ->where('users.id', $user_id)
    ->where('uc.accept', 0)
    ->get();

      // dd($califications);

      // $user_send = $califications[0]->user_id_client;

      // $califications_users_recibied = User::select('users.username')
      // // ->join('users_califications as uc', 'uc.user_id', '=', 'users.id')
      // // ->join('califications as c', 'uc.calification_id', '=', 'c.id')
      // ->where('users.id', $user_send)
      // // ->where('uc.accept', 0)
      // ->get();

      // dd($califications_users_recibied);

      // exit;



    return view('user.waycalifications', [
        // 'categoryid' => $id,
        // 'username' => $username,
        // 'post' => $post,
      'califications' => $califications
        // 'user' => $califications_users_recibied

    ]);


  }

  public function viewcalifications($calificationid)
  {


    $user_id = Auth::user()->id;

    $califications = User::select('c.id','uc.user_id_client','p.post_name')
    ->join('users_califications as uc', 'uc.user_id', '=', 'users.id')
    ->join('califications as c', 'uc.calification_id', '=', 'c.id')
    ->join('posts as p', 'p.id', '=', 'uc.post_id')  
    ->where('users.id', $user_id)
    ->where('uc.accept', 0)
    ->where('uc.calification_id', $calificationid)
    ->first();

      // dd($califications);


    if (!empty($califications)) {

      $user_send = $califications->user_id_client;

      // dd($user_send);

      $califications_users_recibied = User::select('users.username')
      // ->join('users_califications as uc', 'uc.user_id', '=', 'users.id')
      // ->join('califications as c', 'uc.calification_id', '=', 'c.id')
      ->where('users.id', $user_send)
      // ->where('uc.accept', 0)
      ->first();

      // dd($califications_users_recibied);

      // exit;



      return view('user.viewcalifications', [
        // 'categoryid' => $id,
        // 'username' => $username,
        // 'post' => $post,
        'califications' => $califications,
        'calificationid' => $calificationid,
        'user' => $califications_users_recibied
      ]);

    }

      // $user_send = $califications->user_id_client;

      // // dd($user_send);

      // $califications_users_recibied = User::select('users.username')
      // // ->join('users_califications as uc', 'uc.user_id', '=', 'users.id')
      // // ->join('califications as c', 'uc.calification_id', '=', 'c.id')
      // ->where('users.id', $user_send)
      // // ->where('uc.accept', 0)
      // ->first();

      // // dd($califications_users_recibied);

      // // exit;



      // return view('user.viewcalifications', [
      //   // 'categoryid' => $id,
      //   // 'username' => $username,
      //   // 'post' => $post,
      //   'califications' => $califications,
      //   'calificationid' => $calificationid,
      //   'user' => $califications_users_recibied
      // ]);


  }

  public function storecalifications(Request $request)
  {


    $user_id = Auth::user()->id;
    $username_post = Auth::user()->username;

    // $updatereview = DB::table('users_califications')
    // ->where('user_id', $user_id)
    // ->where('calification_id', $request->calification_id)
    // ->update(['review_back' => $request->review_back,'accept' =>  1 ]);

     $updatereview = DB::table('users_califications')
    ->where('user_id', $user_id)
    ->where('calification_id', $request->calification_id)
    ->update(['review_back' => $request->review_back,'accept' =>  1, 'username_post' =>  $username_post ]);

      // return back(); 

    return redirect()->to('users/califications');



  }

  public function recover()
  {

      // $user = Auth::user();       

      // $email = Auth::user()->email;


    return view('user.setting_recover');
  }


  public function change(Request $request)
  {

      // $user = Auth::user();       

    $email = Auth::user()->email;

      // $user_id = Auth::user()->id;

    $request->validate([
      'password' => ['required', 'max:255']        
    ]);

    $password = $request->password;

    $pass_hash = password_hash($password ,PASSWORD_BCRYPT);

    $updatepassword = DB::table('users')
    ->where('email', $email)
      // ->where('password', $request->password)
    ->update(['password' =>  $pass_hash ]);


      // return view('user.setting_recover');

    return redirect()->to('/settings');
  }




  //   public function store(Request $request)
  //   {

  //    $file = $request->file('passport_number');   

  //    $fileName = $file->getClientOriginalName();  

  //    $filePath = $request->file('passport_number')->storeAs('uploads', $fileName, 'public');


  //      // var_dump($request);

  //    $validator = Validator::make($request->all(), [       
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
  //   ]);

  //    if ($validator->fails()) {

  //     return response()->json('conflict error validation',409);

  //   }

  //   $vendor = new Vendor;

  //   $vendor->country_nat = $request->country_nat;
  //   $vendor->country = $request->country;
  //   $vendor->birthdate = $request->birthdate;
  //   $vendor->ident_doc = $request->ident_doc;
  //   $vendor->passport_number = $file->getClientOriginalName();
  //   $vendor->date_exp = $request->date_exp;
  //   $vendor->country_offi = $request->country_offi;
  //   $vendor->postal_code = $request->postal_code;
  //   $vendor->address_primary = $request->address_primary;
  //   $vendor->address_secondary = $request->address_secondary;
  //   $vendor->city = $request->city;
  //   $vendor->state = $request->state;
  //   $vendor->phone_number = $request->phone_number;

  //   $vendor->save();

  //   return back();

  //    // var_dump($request->all());    


  // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     return response()->json($id);
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
