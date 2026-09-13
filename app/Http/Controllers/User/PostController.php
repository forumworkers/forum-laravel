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
use App\Models\UserCalification;
use App\Models\Calification;
use App\Models\Type;
use App\Models\Site;
use App\Models\Comition;
use App\Models\Payment;
use App\Models\Revition;


use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($subcategory, $id)
    {

      // $searchString = " ";
      // $replaceString = "-";
      // $originalString = "This is a programming tutorial"; 

      // $outputString = str_replace($searchString, $replaceString, $originalString); 
      // echo("The original string is: $originalString \n");  
      // echo("The string without spaces is: $outputString");

      // exit; 



     //   print_r($subcategory.$id);

     // // dd($category);

     // exit;

      $types = Type::select('types.id','types.type_name')        
      ->get();

      $sites = Site::select('sites.id','sites.site')        
      ->get();

      $comitions = Comition::select('comitions.id','comitions.comition_name')        
      ->get();

      $payments = Payment::select('payments.id','payments.payment_name')        
      ->get();

      $revitions = Revition::select('revitions.id','revitions.revition')        
      ->get();

      $subid = MainCategory::select('maincategorys.subcategory_id')
      ->where('maincategorys.id', $id)        
      ->first();

      // dd($subid);
      // exit;





      return view('user.post', [
        'categoryid' => $id,
        'types' => $types,
        'sites' => $sites,
        'comitions' => $comitions,
        'payments' => $payments,
        'revitions' => $revitions,
        'subid' =>  $subid
      ]);
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
        'post_name' => ['required', 'max:120'],
        'price' => ['required'],
        'post_content' => ['required', 'max:1500'],              
      ]);



      // los espacios en blanco se reconocen
      $searchString = " ";

      $searchStringCara = "";

      $searchStringCaraFinal = "-";

      $cara1 = ",";

      $cara2 = ".";

      $cara3 = "/";

      $cara4 = "+";

      $cara5 = "#";

      $cara6 = "$";

      $cara7 = "%";

      $cara8 = "&";

      $cara9 = "(";

      $cara10 = ")";

      $cara11 = "=";

      $cara12 = "?";

      $cara13 = "¿";

      $cara14 = "!";

      $cara15 = "¡";

      $cara16 = "{";

      $cara17 = "}";

      $cara18 = "@";



      // $caraspecial = "/^[a-zA-Z0-()9ñÑáéíóúÁÉÍÓÚ ]+$/";


      // reemplazamos los espacios en blanco por guion
      $replaceString = "-";
      $originalString = $request->post_name; 

      //validar caracteres en minuscula
      $replacelower = strtolower($originalString);

      // $convert_url = str_replace($searchString, $replaceString, $originalString);

      // original
      $convert_url = str_replace($searchString, $replaceString, $replacelower);

      // $data = array(
      //   '' => " ",

      //    );

      // dd($convert_url);

      // print_r($convert_url);

      $data = array($searchString, $cara1,$cara2,$cara3,$cara4,$cara5,$cara6,$cara7,$cara8,$cara9,$cara10,$cara11,$cara12,$cara13,$cara14,$cara15,$cara16,$cara17,$cara18);

      $convert_url2 = str_replace($data, $searchStringCara, $convert_url);

      // dd($convert_url2);

      // print_r($convert_url2);

      $convert_url3 = str_replace("--", $searchStringCaraFinal, $convert_url2); 

      // print_r($convert_url3);   


      // exit;

      $post_user_free = Post::select('up.post_id')   
      ->join('users_posts as up', 'up.post_id', '=', 'posts.id')
      ->join('users as u', 'u.id', '=', 'up.user_id')    
      ->where('u.id', $user_id)
      ->where('u.is_buyer', 0)
      ->where('posts.publish', null)  
      ->get();

      $totalpostfree = count($post_user_free);

      $post_user_premium = Post::select('up.post_id')   
      ->join('users_posts as up', 'up.post_id', '=', 'posts.id')
      ->join('users as u', 'u.id', '=', 'up.user_id')    
      ->where('u.id', $user_id)
      ->where('u.is_buyer', 1)
      ->where('posts.publish', null)  
      ->get();

      $totalpostpremium = count($post_user_premium);


      if ( $totalpostfree >= 5) {

        throw new \Exception('Ya superaste los 5 post');
      }

      if ( $totalpostpremium >= 20) {

        throw new \Exception('Ya superaste los 20 post');
      }


     // insert post

      $post = new Post;

      $post->post_name = $request->post_name;
      // $post->url_name = $request->url_name;
      $post->url_name = $convert_url3;
      $post->post_content = $request->post_content;
      $post->maincategory_id = $request->maincategory_id;
      $post->type_id = $request->type_id;
      $post->site_id = $request->site_id;
      $post->price = $request->price;
      $post->comition_id = $request->comition_id;
      $post->payment_id = $request->payment_id;  
      $post->revition_id = $request->revition_id;                  

      $post->save();

      $userpost = new UserPost;

      $userpost->user_id = $user_id ;
      $userpost->post_id = $post->id ;
      $userpost->maincategory_id  = $request->maincategory_id;


      $userpost->save();

      return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tema,$subcategoryid,$postid)
    {


        // $category = Post::select('posts.post_name','posts.url_name','posts.id as postid','mc.maincategory_name','u.id as userid', 'u.username','u.img','mc.id','mc.maincategory_url')
     $category = Post::select('posts.post_name','posts.url_name','posts.id as postid','posts.post_content','posts.price','u.id as userid', 'u.username','u.img','r.rank_name','c.comition_name','p.payment_name','re.revition','t.type_name','t.type_color','u.is_banned','co.country_name','posts.views','mc.maincategory_name','mc.subcategory_id','mc.maincategory_url','posts.created_at','co.country_flag','posts.type_id')    
        // ->join('maincategorys as mc', 'mc.id', '=', 'posts.maincategory_id')
        // ->join('maincategorys as mc', 'mc.id', '=', 'posts.maincategory_id')
     // ->join('users_posts as up', 'up.maincategory_id', '=', 'posts.maincategory_id')
     ->join('users_posts as up', 'up.post_id', '=', 'posts.id')
     ->join('users as u', 'u.id', '=', 'up.user_id')
     ->join('ranks as r', 'u.rank_id', '=', 'r.id')
     ->join('comitions as c', 'c.id', '=', 'posts.comition_id')
     ->join('payments as p', 'p.id', '=', 'posts.payment_id')
     ->join('revitions as re', 're.id', '=', 'posts.revition_id')
     ->join('types as t', 't.id', '=', 'posts.type_id')
     ->join('countrys as co', 'u.country_id', '=', 'co.id') 
     ->join('maincategorys as mc', 'mc.id', '=', 'posts.maincategory_id')        
     // ->join('subcategorys as sc', 'sc.category_id', '=', 'categorys.id')
     // ->join('maincategorys', 'mc.subcategory_id', '=', 'sc.id')
        // ->where('mc.subcategory_id', $subcategoryid)
        // ->where('up.maincategory_id', $subcategoryid)
     ->where('posts.id', $postid)
     ->where('posts.maincategory_id', $subcategoryid)
     ->where('posts.url_name', $tema)
     ->where('posts.publish', null)
        // ->where('u.user_id', $postid)
     // ->where('mc.id', 8)
        // ->orderBy('posts.id', 'asc')
     // ->first()
     // ->count('up.user_id AS totalpost')
     // ->first();
     ->firstOrFail();
        // ->get();

     // dd($category);

     // dd($postid);

     // exit;

     $post_view_number = $category->views;

     $post_sum = $post_view_number + 1;

     // dd($post_sum);
     // exit;

     $sumviews = DB::table('posts')
     ->where('id', $postid)
     ->update(['views' => $post_sum  ]);

     //

     $user_id = $category->userid;

     // para el total post
     $totalpost = Post::select('up.user_id')   
     ->join('users_posts as up', 'up.post_id', '=', 'posts.id')
     ->join('users as u', 'u.id', '=', 'up.user_id')    
     ->where('up.user_id', $user_id)
     // ->count('up.user_id AS totalpost')
     ->get();

     // dd($totalpost);

     $sumpost = count($totalpost);

     //   dd($sumpost);
     // exit;




     // comentarios
     // $comments = Post::select('posts.post_name','posts.url_name','posts.id as postid','posts.post_content','u.id as userid', 'u.username','u.img','c.comment')
     $comments = Post::select('u.id as userid', 'u.username','u.img','c.comment','r.rank_name','co.country_name','c.created_at','co.country_flag')         
     ->join('comments as c', 'posts.id', '=', 'c.post_id')
     ->join('users as u', 'u.id', '=', 'c.user_id')
     ->join('ranks as r', 'u.rank_id', '=', 'r.id')
     // ->join('comitions as c', 'c.id', '=', 'posts.comition_id')
     // ->join('payments as p', 'p.id', '=', 'posts.payment_id')
     // ->join('revitions as re', 're.id', '=', 'posts.revition_id')
     // ->join('types as t', 't.id', '=', 'posts.type_id')
     ->join('countrys as co', 'u.country_id', '=', 'co.id') 
     // ->join('ranks as r', 'u.rank_id', '=', 'r.id')       
     // ->where('posts.id', $postid)
     ->where('c.post_id', $postid)
     ->where('c.publish', null)
        // ->where('u.user_id', $postid)
     // ->where('mc.id', 8)
        // ->orderBy('posts.id', 'asc')
     // ->first();
     // ->first();
     ->get();     
     // ->get()
     // ->count('c.comment');

     // dd($comments);

     // dd($postid);

     // exit;

     // https://stackoverflow.com/questions/45308267/how-can-i-get-query-result-id-in-controller-from-laravel


     // $user_id_comment = $comments[0]->userid;

     // $user_id_comment = $comments->userid;


     $user_id_comment = 0;

     //funciona
     foreach ($comments  as $comment) {
     // foreach ($user_id_comment   as $comment) {
       # code...
        // dd($comment);
           // dd($comment->userid);
         // var_dump($comment->userid);


            // aqui es para sumar a la variable
            // $user_id_comment  += $comment->userid;

             //aqui es para asignar valor 
       $user_id_comment = $comment->userid;

           //exit no funciona adentro de foreach
        // exit;
     //   $totalpostcomment = Post::select('up.user_id')   
     //   ->join('users_posts as up', 'up.post_id', '=', 'posts.id')
     //   ->join('users as u', 'u.id', '=', 'up.user_id')    
     //   ->where('up.user_id', $user_id_comment)
     // // ->count('up.user_id AS totalpost')
     //   ->get();

     // // dd($totalpost);

     //   $sumpostcomment = count($totalpostcomment);

     //   dd($sumpostcomment);
     }

      // dd($user_id_comment);

     //       // dd($comments[0]);

           // var_dump($user_id_comment);

     // exit;

     // para el total post comentarios
     $totalpostcomment = Post::select('up.user_id')   
     ->join('users_posts as up', 'up.post_id', '=', 'posts.id')
     ->join('users as u', 'u.id', '=', 'up.user_id')    
     ->where('up.user_id', $user_id_comment)
     // ->count('up.user_id AS totalpost')
     ->get();

     // dd($totalpost);

     $sumpostcomment = count($totalpostcomment);

     //   dd($sumpostcomment);
     // exit;

      // para post commentado

     $calificationspositivecomment = Calification::select('califications.calification_name','califications.calification_icon','califications.calification_color','uc.calification_id')
     ->join('users_califications as uc', 'uc.calification_id', '=', 'califications.id')
     ->join('users as u', 'u.id', '=', 'uc.user_id')
     ->where('u.id',  $user_id_comment )
     ->where('uc.calification_id', 1)
     ->where('uc.accept', 1)
      // ->where('uc.calification_id', 2)
     ->get();

     $sumcalificationcomment = count($calificationspositivecomment);

     $calificationsnegativecomment = Calification::select('califications.calification_name','califications.calification_icon','califications.calification_color','uc.calification_id')
     ->join('users_califications as uc', 'uc.calification_id', '=', 'califications.id')
     ->join('users as u', 'u.id', '=', 'uc.user_id')
     ->where('u.id',  $user_id_comment )     
     ->where('uc.calification_id', 2)
     ->where('uc.accept', 1)     
     ->get();

     $restcalificationcomment = count($calificationsnegativecomment);


     if (!empty($calificationspositivecomment[0])) {


       $iconposicolorcomment = $calificationspositivecomment[0]->calification_color;
       $iconposicomment = $calificationspositivecomment[0]->calification_icon;

     }

     if (empty($calificationspositivecomment[0])) {


       $iconposicolorcomment = 'bg-success';
       $iconposicomment = 'fa-solid fa-thumbs-up';

     }

     if (empty($calificationsnegativecomment[0])) {

      $iconnegacolorcomment = 'bg-danger';
      $iconnegacomment = 'fa-solid fa-thumbs-down';
    }

    if (!empty($calificationsnegativecomment[0])) {

      $iconnegacolorcomment = $calificationsnegativecomment[0]->calification_color;
      $iconnegacomment = $calificationsnegativecomment[0]->calification_icon;
    }

     // join general
     // $califications = Calification::select('califications.calification_name','califications.calification_icon','califications.calification_color','uc.calification_id')
     // ->join('users_califications as uc', 'uc.calification_id', '=', 'califications.id')
     // ->join('users as u', 'u.id', '=', 'uc.user_id')
     // ->where('u.id',  $user_id )
     // // ->where('uc.calification_id', 1)
     //  ->where('uc.calification_id', 2)
     // ->get();


     // para post publicado

    $calificationspositive = Calification::select('califications.calification_name','califications.calification_icon','califications.calification_color','uc.calification_id')
    ->join('users_califications as uc', 'uc.calification_id', '=', 'califications.id')
    ->join('users as u', 'u.id', '=', 'uc.user_id')
    ->where('u.id',  $user_id )
    ->where('uc.calification_id', 1)
    ->where('uc.accept', 1)
      // ->where('uc.calification_id', 2)
    ->get();

    $sumcalification = count($calificationspositive);

    $calificationsnegative = Calification::select('califications.calification_name','califications.calification_icon','califications.calification_color','uc.calification_id')
    ->join('users_califications as uc', 'uc.calification_id', '=', 'califications.id')
    ->join('users as u', 'u.id', '=', 'uc.user_id')
    ->where('u.id',  $user_id )     
    ->where('uc.calification_id', 2)
    ->where('uc.accept', 1)     
    ->get();

    $restcalification = count($calificationsnegative);

     // dd($calificationspositive);
     // exit;

    if (!empty($calificationspositive[0])) {


     $iconposicolor = $calificationspositive[0]->calification_color;
     $iconposi = $calificationspositive[0]->calification_icon;

   }

   if (empty($calificationspositive[0])) {


     $iconposicolor = 'bg-success';
     $iconposi = 'fa-solid fa-thumbs-up';

   }

   if (empty($calificationsnegative[0])) {

    $iconnegacolor = 'bg-danger';
    $iconnega = 'fa-solid fa-thumbs-down';
  }

  if (!empty($calificationsnegative[0])) {

    $iconnegacolor = $calificationsnegative[0]->calification_color;
    $iconnega = $calificationsnegative[0]->calification_icon;
  }

     // $iconposicolor = $calificationspositive[0]->calification_color;
     // $iconnegacolor = $calificationsnegative[0]->calification_color;
    // $iconposi = $calificationspositive[0]->calification_icon;
    // $iconnega = $calificationsnegative[0]->calification_icon;

     // dd($calificationsnegative[0]->calification_icon);

     // dd($sumcalification);
     // dd($restcalification);
     // // dd($califications->calification_id);

     // exit;

     // $calification_positive = 0;
     // foreach ($califications  as $calification) {

     //   // dd($calification->calification_id);

     //   var_dump($calification->calification_name);

     //   exit;

     //   // $sumTokens  += $paymentToken->mytoken;
     // }

     // var_dump($sumTokens);

     // if (condition) {
     //   # code...
     // }

     // if (condition) {
     //   # code...
     // }

     // if (condition) {
     //   # code...
     // }

//total de reseñas del servicios positivas y negativas
  $caliserv = UserCalification::select('users_califications.calification_id')
  ->where('users_califications.post_id',  $postid )  
  // ->where('users_califications.calification_id', 1)
  // ->where('users_califications.calification_id', 2)
  ->where('users_califications.accept', 1)     
  ->get();


  if (!empty($caliserv[0])) {

   $tcaliserv = count($caliserv);

 }

 if (empty($caliserv[0])) {


   $tcaliserv = 0;

 }

  // $tcaliserv = count($caliserv);

  // print_r($tcaliserv);

  // exit;

 $calipos = UserCalification::select('users_califications.calification_id')
 ->where('users_califications.post_id',  $postid )  
 ->where('users_califications.calification_id', 1)
 ->where('users_califications.accept', 1)     
 ->get();

 if (!empty($calipos[0])) {

   $tcalipos = count($calipos);

          // $tcalculres = 5 / $tcalipos;

   $tcalculres = 5 * $tcalipos / $tcaliserv;


 }

 if (empty($calipos[0])) {


   $tcalipos = 0;

   $tcalculres = 0; 

 }

  // $tcalipos = count($calipos);

  // print_r($tcalipos);

 $calineg = UserCalification::select('users_califications.calification_id')
 ->where('users_califications.post_id',  $postid )  
 ->where('users_califications.calification_id', 2)
 ->where('users_califications.accept', 1)     
 ->get();


 if (!empty($calineg[0])) {

  $tcalineg = count($calineg);

}

if (empty($calineg[0])) {


 $tcalineg = 0;

}




  // $tcalineg = count($calineg);

  // print_r($tcalineg);

  // $calcul = $tcalipos / $tcalineg;

  // mientras tanto
  // $tcalculres = 5 / $tcalipos; 

// $tcalculres = $tcaliserv / $tcalipos / 5 * 10;

// se acerca a la formula
// $tcalculres = 100 * 5 / $tcaliserv;

// $tcalculres = 100 * 5 / $tcalipos / 100;

// $tcalculres = $tcaliserv * 5 / $tcalipos;     

// $tcalculres = 100 * 5 / $tcaliserv / $tcalipos / 100;       

  // print_r($tcalculres);

  // exit;



return view('post', [
  'post' => $category,
  'sumpost' =>  $sumpost,
  'sumcalification' =>  $sumcalification,
  'restcalification' =>   $restcalification,
  'iconposi' =>  $iconposi,
  'iconnega' => $iconnega,
  'iconposicolor' => $iconposicolor,
  'iconnegacolor' => $iconnegacolor,
  'comments' => $comments,
  'sumpostcomment' =>  $sumpostcomment,
  'sumcalificationcomment' =>  $sumcalificationcomment,
  'restcalificationcomment' =>   $restcalificationcomment,
  'iconposicomment' =>  $iconposicomment,
  'iconnegacomment' => $iconnegacomment,
  'iconposicolorcomment' => $iconposicolorcomment,
  'iconnegacolorcomment' => $iconnegacolorcomment,
  'urluserid' => $subcategoryid,
  'urlpostid' => $postid,
  'tcalculres' => $tcalculres,
  'tcaliserv' => $tcaliserv


      // 'califications' =>  $califications    

]);





}


public function unpublish($postid)
{

 if (Auth::user()->role_id == 2) {

   return redirect()->to('/');
 }




 $data = DB::table('posts')
 ->where('id', $postid)
 ->update(['publish' => 1]);


   // return redirect()->to('/');

 return response()->json($data);

}

public function commentunpublish($postid)
{

 if (Auth::user()->role_id == 2) {

   return redirect()->to('/');
 }




 $data = DB::table('comments')
 ->where('post_id', $postid)
 ->update(['publish' => 1]);


   // return redirect()->to('/');

 return response()->json($data);

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
