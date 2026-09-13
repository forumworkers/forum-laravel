<?php

namespace App\Http\Controllers\Admin;

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

// use App\Models\Vendor;
use App\Models\Membership;
use App\Models\Price;
use App\Models\Order;
use App\Models\UserMembership;

use App\Models\Ranks;

// use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends Controller
{

  public function __construct()
  {

      // el auth no sirve en el constructor

      // return NotFoundHttpException();

      // if (!Auth::user()->role_id == 1) {

      //  return redirec()->to('/');
      // }

      // print_r(Auth::user());

  }

  public function index()
  {

   if (Auth::user()->role_id == 2) {

     return redirect()->to('/');
   }


       // print_r(Auth::user());

   $user = Auth::user();       

   $email = Auth::user()->email;


   $users = Membership::select('memberships.id as membership_id','memberships.membership','p.price','um.created_at','u.username','u.id as userid','u.email','u.membership_start','u.membership_end','u.is_buyer')
   ->join('prices as p', 'p.id', '=', 'memberships.price_id')        
   ->join('users_memberships as um', 'um.membership_id', '=', 'memberships.id')
   ->join('users as u', 'um.user_id', '=', 'u.id')       
      // ->where('mc.subcategory_id', 1)
     // ->join('subcategorys as sc', 'sc.category_id', '=', 'categorys.id')
     // ->join('maincategorys', 'mc.subcategory_id', '=', 'sc.id')
      // ->where('mc.maincategory_url', 1)
      // ->where('u.is_buyer', 1)
      // ->where('posts.site_id', 1)
      // ->where('u.id', $id_user)
      // ->orderBy('mc.id', 'asc')
      // ->orderBy('posts.created_at', 'desc')
      // ->orderBy('posts.updated_at', 'desc')     
     // ->first();
      // ->get()
      // ->paginate(10);
      // ->limit(5)
   ->get();

      // dd($users);

      // exit;


      // return view('admin.users');

   return view('admin.users', [
        // 'memberships' =>  $memberships,
    'users' =>  $users                 
  ]);
 }


 public function update($userid)
 {

   if (Auth::user()->role_id == 2) {

     return redirect()->to('/');
   }


   $users = User::select('username','id as userid','email','membership_start','membership_end','is_buyer')
     // ->join('prices as p', 'p.id', '=', 'memberships.price_id')        
     // ->join('users_memberships as um', 'um.membership_id', '=', 'memberships.id')
     // ->join('users as u', 'um.user_id', '=', 'u.id')       
      // ->where('mc.subcategory_id', 1)
     // ->join('subcategorys as sc', 'sc.category_id', '=', 'categorys.id')
     // ->join('maincategorys', 'mc.subcategory_id', '=', 'sc.id')
      // ->where('mc.maincategory_url', 1)
   ->where('id', $userid)
      // ->where('posts.site_id', 1)
      // ->where('u.id', $id_user)
      // ->orderBy('mc.id', 'asc')
      // ->orderBy('posts.created_at', 'desc')
      // ->orderBy('posts.updated_at', 'desc')     
   ->first();
      // ->get()
      // ->paginate(10);
      // ->limit(5)
     // ->get();

   $memstart = $users->membership_start;
     // $memconvert = date('d-m-Y',strtotime($memstart));
   $memconvert = date('y-m-d',strtotime($memstart));


   $fecha_actual = date("y-m-d");

   $addonemonth = date("y-m-d",strtotime($fecha_actual."+ 1 month")); 

     // echo $fecha_actual; 
//sumo 1 mes
     // echo date("y-m-d",strtotime($fecha_actual."+ 2 month")); 
//resto 1 mes
     // echo date("d-m-Y",strtotime($fecha_actual."- 1 month"));

   $readmessages = DB::table('users')
   ->where('id', $userid)
   ->update(['membership_start' => $fecha_actual,'membership_end' =>  $addonemonth  ]);
     // ->update(['membership_start' => DATE(DATE_ADD($memstart, INTERVAL 1 MONTH))]);
     // ->update(['membership_start' => (DATE_ADD($memconvert, INTERVAL 1 MONTH)]);

     // exit;

     // dd(now());

     // print_r(now('y-m-d'));

     // dd(DATE_ADD(now(),  interval 364 day));


     // $startmenbership = now();
     // $startmenbership = date('y-m-d');
     // $year = date('y');
     // $month = date('m');
     // $day = date('d');

     // $memplan1 = date('d')+30;
     // $memplan2 = date('d')+60;

     // // dd( $startmenbership + $memplan1);

     // dd(date('y-m-{$memplan2}'));
     // dd(date('y-m-d'));

     // dd(date('d')+30);



     // exit;

     // dd($memstart);

     // DATE(DATE_ADD($memstart, INTERVAL 1 MONTH))

     // dd(DATE_ADD(now(),  interval 364 day));

     // dd(date_sub('2018-01-01', INTERVAL 7 day));

     // dd(date_sub($memconvert, INTERVAL 7 day));

      // DATE_ADD($memstart, INTERVAL 1 MONTH);

        // dd($memconvert);

     // select DATE_ADD(now(),  INTERVAL 364 DAY);


     // exit;

     // $readmessages = DB::table('users')
     // ->where('id', $userid)
     // ->update(['membership_start' => 1]);
     // ->update(['membership_start' => DATE(DATE_ADD($memstart, INTERVAL 1 MONTH))]);
     // ->update(['membership_start' => (DATE_ADD($memconvert, INTERVAL 1 MONTH)]);

     // DATE(DATE_ADD(now(), INTERVAL 1 MONTH))

     // DATE(DATE_ADD($memstart, INTERVAL 1 MONTH))

       // exit;

   return back();

 }


 public function updatethree($userid)
 {

   if (Auth::user()->role_id == 2) {

     return redirect()->to('/');
   }


   $users = User::select('username','id as userid','email','membership_start','membership_end','is_buyer')  
   ->where('id', $userid)      
   ->first();


   $memstart = $users->membership_start;
     // $memconvert = date('d-m-Y',strtotime($memstart));
   $memconvert = date('y-m-d',strtotime($memstart));


   $fecha_actual = date("y-m-d");

   $addonemonth = date("y-m-d",strtotime($fecha_actual."+ 3 month")); 



   $readmessages = DB::table('users')
   ->where('id', $userid)
   ->update(['membership_start' => $fecha_actual,'membership_end' =>  $addonemonth  ]);
     // ->update(['membership_start' => DATE(DATE_ADD($memstart, INTERVAL 1 MONTH))]);
     // ->update(['membership_start' => (DATE_ADD($memconvert, INTERVAL 1 MONTH)]);

   

   return back();

 }


 public function updateyear($userid)
 {

   if (Auth::user()->role_id == 2) {

     return redirect()->to('/');
   }


   $users = User::select('username','id as userid','email','membership_start','membership_end','is_buyer')  
   ->where('id', $userid)      
   ->first();


   $memstart = $users->membership_start;
     // $memconvert = date('d-m-Y',strtotime($memstart));
   $memconvert = date('y-m-d',strtotime($memstart));


   $fecha_actual = date("y-m-d");

   $addonemonth = date("y-m-d",strtotime($fecha_actual."+ 1 year")); 



   $readmessages = DB::table('users')
   ->where('id', $userid)
   ->update(['membership_start' => $fecha_actual,'membership_end' =>  $addonemonth  ]);
     // ->update(['membership_start' => DATE(DATE_ADD($memstart, INTERVAL 1 MONTH))]);
     // ->update(['membership_start' => (DATE_ADD($memconvert, INTERVAL 1 MONTH)]);

   

   return back();

 }

 public function buyers($userid)
 {

   if (Auth::user()->role_id == 2) {

     return redirect()->to('/');
   }


   // $users = User::select('username','id as userid','email','membership_start','membership_end','is_buyer')  
   // ->where('id', $userid)      
   // ->first();





   $readmessages = DB::table('users')
   ->where('id', $userid)
   ->update(['is_buyer' => 1]);
     // ->update(['membership_start' => DATE(DATE_ADD($memstart, INTERVAL 1 MONTH))]);
     // ->update(['membership_start' => (DATE_ADD($memconvert, INTERVAL 1 MONTH)]);

   

   return back();

 }





 public function checkout($id)
 {

   $email = Auth::user()->email;

   $product_all = DB::table('products as p')
   ->leftJoin('prices as pr', 'pr.id', '=', 'p.price_id')
   ->where('p.id', $id)        
     // ->get();
   ->first();

     // print_r($product_all);

     // exit;

   return view('products.checkout', [
        // 'products' => $users,
    'products_sell' => $product_all
  ]);

      // return view('products.checkout')->with(['products_sell'=>$product_all]);
 }

 public function success()
 {
  return view('products.success');
}

public function cancel()
{
 return view('products.cancel');
}

public function notify()
{

}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     $file = $request->file('passport_number');   

     $fileName = $file->getClientOriginalName();  

     $filePath = $request->file('passport_number')->storeAs('uploads', $fileName, 'public');


       // var_dump($request);

     $validator = Validator::make($request->all(), [       
      'country_nat' => 'required',
      'country' => 'required',
      'birthdate' => 'required',
      'ident_doc' => 'required',
      'passport_number' => 'required',
      'date_exp' => 'required',
      'country_offi' => 'required',
      'postal_code' => 'required',
      'address_primary' => 'required',
      'address_secondary' => 'required',
      'city' => 'required',
      'state' => 'required',
      'phone_number' => 'required',        
    ]);

     if ($validator->fails()) {

      return response()->json('conflict error validation',409);

    }

    $vendor = new Vendor;

    $vendor->country_nat = $request->country_nat;
    $vendor->country = $request->country;
    $vendor->birthdate = $request->birthdate;
    $vendor->ident_doc = $request->ident_doc;
    $vendor->passport_number = $file->getClientOriginalName();
    $vendor->date_exp = $request->date_exp;
    $vendor->country_offi = $request->country_offi;
    $vendor->postal_code = $request->postal_code;
    $vendor->address_primary = $request->address_primary;
    $vendor->address_secondary = $request->address_secondary;
    $vendor->city = $request->city;
    $vendor->state = $request->state;
    $vendor->phone_number = $request->phone_number;

    $vendor->save();

    return back();

     // var_dump($request->all());    


  }

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
    // public function update(Request $request, $id)
    // {
    //     //
    // }

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
