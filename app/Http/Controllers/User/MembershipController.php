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

use App\Models\Membership;
use App\Models\Price;
use App\Models\Order;
use App\Models\UserMembership;

class MembershipController extends Controller
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

      // $user = Auth::user();       

      // $email = Auth::user()->email;

    	$id_user = Auth::user()->id;

    	$memberships = Membership::select('memberships.id as membership_id','memberships.membership','p.price')    
    	->join('prices as p', 'p.id', '=', 'memberships.price_id')    
    	// ->where('mc.subcategory_id', 1)
     // ->join('subcategorys as sc', 'sc.category_id', '=', 'categorys.id')
     // ->join('maincategorys', 'mc.subcategory_id', '=', 'sc.id')
      // ->where('mc.maincategory_url', 1)
      // ->where('u.is_buyer', 1)
      // ->where('posts.site_id', 1)
     // ->where('mc.id', 8)
      // ->orderBy('mc.id', 'asc')
      // ->orderBy('posts.created_at', 'desc')
    	// ->orderBy('posts.updated_at', 'desc')     
     // ->first();
      // ->get()
      // ->paginate(10);
    	// ->limit(5)
    	->get();

    	// dd($memberships);

    	// exit;


    	$membershipsusers = Membership::select('memberships.id as membership_id','memberships.membership','p.price','um.created_at')
    	->join('prices as p', 'p.id', '=', 'memberships.price_id')        
    	->join('users_memberships as um', 'um.membership_id', '=', 'memberships.id')
    	->join('users as u', 'um.user_id', '=', 'u.id')       
    	// ->where('mc.subcategory_id', 1)
     // ->join('subcategorys as sc', 'sc.category_id', '=', 'categorys.id')
     // ->join('maincategorys', 'mc.subcategory_id', '=', 'sc.id')
      // ->where('mc.maincategory_url', 1)
      // ->where('u.is_buyer', 1)
      // ->where('posts.site_id', 1)
    	->where('u.id', $id_user)
      // ->orderBy('mc.id', 'asc')
      // ->orderBy('posts.created_at', 'desc')
    	// ->orderBy('posts.updated_at', 'desc')     
     // ->first();
      // ->get()
      // ->paginate(10);
    	// ->limit(5)
    	->get();

    	// dd($membershipsusers);

    	// exit;

      $membershipsuserstime = Membership::select('memberships.id as membership_id','memberships.membership','p.price','um.created_at','u.membership_start','u.membership_end')
      ->join('prices as p', 'p.id', '=', 'memberships.price_id')        
      ->join('users_memberships as um', 'um.membership_id', '=', 'memberships.id')
      ->join('users as u', 'um.user_id', '=', 'u.id')     
      ->where('u.id', $id_user)
      // ->orderBy('mc.id', 'asc')
      // ->orderBy('posts.created_at', 'desc')
      // ->orderBy('posts.updated_at', 'desc')     
      ->first();

      // $membershipsuserstime->membership_start;
      // $membershipsuserstime->membership_end;

      if ($membershipsuserstime) {



        $start = date('y-m-d',strtotime($membershipsuserstime->membership_start));
        $end = date('y-m-d',strtotime($membershipsuserstime->membership_end));

      // echo $start;

      // exit;

      // $date1=date_create("2013-03-15");
        $date1=date_create($start);
      // $date2=date_create("2013-12-12");
        $date2=date_create($end);
        $diff=date_diff($date1,$date2);
      // echo $diff->format("%R%a days");
        $memtime = $diff->format("%R%a dias");

        $memtimeleft = $diff->format("%d%");

        // print_r($diff);
        // print_r( $memtimeleft );

        // exit;

        if ($memtimeleft <= 0) {

          $updatemem = DB::table('users')
          ->where('id', $id_user)
          ->update(['is_buyer' => 0 ]);
        }


        return view('user.membership_details', [
          'memberships' =>  $memberships,
          'membershipsusers' =>  $membershipsusers,
          'memtime' =>  $memtime                   
        ]);

      }

      // $timemem = date("d-m-y",strtotime( $membershipsuserstime->membership_end."- 1 month ")); 

    	// $fechacompra = $membershipsusers[0]->created_at;


    	// dd( $timemem );

      // exit;


    	// DATE(DATE_ADD(now(), INTERVAL 1 MONTH))


    	// return view('user.membership_details');

      return view('user.membership_details', [
        'memberships' =>  $memberships,
        'membershipsusers' =>  $membershipsusers,
        // 'memtime' =>  $memtime           		     
      ]);
    }



   //     return view('vendors.index', [
   //      'products' => $users,
   //      'products_sell' => $product_all,
   //  ]);
   // }

    public function checkout($id)
    {

		 // $email = Auth::user()->email;

    	$membership = Membership::select('memberships.id as membership_id','memberships.membership','p.price')    
    	->join('prices as p', 'p.id', '=', 'memberships.price_id')   
    	->where('memberships.id', $id)
      // ->orderBy('mc.id', 'asc')
      // ->orderBy('posts.created_at', 'desc')
    	// ->orderBy('posts.updated_at', 'desc')     
     // ->first();
      // ->get()
      // ->paginate(10);
    	// ->limit(5)
    	// ->get();
    	->first();

    	// dd($memberships);

    	// exit;

    	

    	if ($id > 3) {
    		throw new \Exception('This membership is not available');
    	}

   //  	if ($data['users_courses_exists']) {
			// // var_dump($data['users_courses_exists']->id_course );
			// // var_dump($result2[0]->id_course);
   //  		throw new \Exception('You have already purchased this course');
   //  	}else{

   //  		return view('user/courses/checkout',$data);

   //  	}


    	return view('user.checkout', [
    		'membership' =>  $membership       
    	]);

    }


    public function success()
    {

    	
    	// $_GET['membership_id'];

    	// print_r($_GET['membership_id']);

    	// exit;

    	if (!empty($_GET['PayerID']) && isset($_GET['PayerID']) && !empty($_GET['tx']) && isset($_GET['tx'])) {

			// var_dump($_GET['PayerID']);

			//tx es el id la factura
    		$txn_id = $_GET['tx'];
			// el monto
    		$payment_gross = $_GET['amt'];

			//la moneda
			// $currency_code = $_GET['cc'];
			//el estatus
    		$payment_status = $_GET['st'];

    		$membership_id = $_GET['membership_id'];
		// $id_course = $_GET['item_number'];

    		$payer_email = $_GET['payer_email'];
    		$payer_id = $_GET['PayerID'];

			// var_dump($payment_status);

    		// $email = $this->session->get('email');
    		$email = Auth::user()->email;

		// var_dump($_GET['tx'].$email.$_GET['payer_email'].$_GET['item_number'].$_GET['PayerID']);

		//order es palabra reservada de mysql trae conflictos, usar orders
    		// $query1= "INSERT INTO orders(orders, email, payer_email, id_course, payer_id) VALUES ('{$txn_id}','{$email}','{$payer_email}','{$id_course}','{$payer_id}')";

    		$order = new Order;
    		$order->order = $txn_id;
    		$order->email = $email;
    		$order->payer_email = $payer_email;
    		$order->membership_id = $membership_id;
    		$order->payer_id = $payer_id;                   
    		$order->save();



		// $query1= "INSERT INTO orders(order, email, payer_email, id_course, payer_id) VALUES ('{$_GET['tx']}','{$email}','{$_GET['payer_email']}','{$_GET['item_number']}','{$_GET['PayerID']}')";

    		// $result1 = $this->db->query($query1);


    		// $id_user = $this->session->get('id_user');

    		$id_user = Auth::user()->id;

    		// $query2= "INSERT INTO users_courses(id_user,id_course) VALUES ('{$id_user}','{$id_course}')";

    		$usermem = new UserMembership;
    		$usermem->user_id = $id_user;
    		$usermem->membership_id = $membership_id;                     
    		$usermem->save();

    		// $result2 = $this->db->query($query2);


    		// $query3 = "UPDATE users SET is_buyer = 1
    		// where email = '{$email}'";

    		// $result3 = $this->db->query($query3);


		//insert certificados
    		// $created_at = date('y-m-d');

    		// $updated_at = date('y-m-d');

    		// $querycert= "INSERT INTO certificates(id_course,id_user,created_at,updated_at) VALUES ('{$id_course}','{$id_user}','{$created_at}','{$updated_at}')";

    		// $resultcert = $this->db->query($querycert);


    		// $data['tittle'] = 'Success';

    		// $data['session'] = $this->session;

    		// return view('user/courses/success',$data);

    		return view('user.success', [
    		// 'membership' =>  $membership       
    		]);
    	}

    	return view('user.success');

    	// return redirect()->to('/courses');

		// echo "nada";
		// $data = $this->request->getPost();
// $_GET['PayerID']
		// var_dump($_GET['PayerID']);

		// var_dump($_GET['payer_email']);




    }

    // public function success()
    // {
    // 	return view('products.success');
    // }

    public function cancel()
    {
    	return view('user.cancel');
    	
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
