<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// usar clase
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Category;
use App\Models\MainCategory;
use App\Models\Post;
use App\Models\PostFree;
use App\Models\Backlink;
use App\Models\BacklinkOrder;
use App\Models\MainCategoryBacklink;


use Illuminate\Support\Facades\DB;


class SubCategoryFreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($subcategory)
    {




     // $category = Category::select('categorys.category_name','sc.subcategory_name','mc.maincategory_name')
     // ->join('subcategorys as sc', 'sc.category_id', '=', 'categorys.id')
     // ->join('maincategorys as mc', 'mc.subcategory_id', '=', 'sc.id')
     // ->where('mc.subcategory_id', 1)   
     // ->get();

      // $category = MainCategory::select('maincategorys.id','maincategorys.maincategory_name')
      // ->where('maincategorys.maincategory_name',$subcategory)   
      // ->get();

     //  $category = Post::select('posts.post_name','posts.url_name','mc.maincategory_name','u.id', 'u.username')    
     //  ->join('maincategorys as mc', 'mc.id', '=', 'posts.maincategory_id')
     // // ->join('users_posts as up', 'up.maincategory_id', '=', 'posts.maincategory_id')
     //  ->join('users_posts as up', 'up.post_id', '=', 'posts.id')
     //  ->join('users as u', 'u.id', '=', 'up.user_id')
     // // ->join('subcategorys as sc', 'sc.category_id', '=', 'categorys.id')
     // // ->join('maincategorys', 'mc.subcategory_id', '=', 'sc.id')
     //  // ->where('mc.maincategory_name', $subcategory)
     //  ->where('mc.id', 1)
     //  // ->orderBy('mc.id', 'desc')
     //  // ->first();
     //  ->get();

      $category = PostFree::select('posts_free.post_name','posts_free.url_name','posts_free.id as postid','mc.maincategory_name','mc.subcategory_id','u.id as userid', 'u.username','u.img','mc.id','mc.maincategory_url','posts_free.created_at','posts_free.updated_at','posts_free.views','mc.promo_video','cont.content_name','cont.content_color')    
      ->join('maincategorys as mc', 'mc.id', '=', 'posts_free.maincategory_id')
      ->join('contents as cont', 'cont.id', '=', 'posts_free.content_id')
      // ->join('types as t', 't.id', '=', 'posts.type_id')
     // ->join('users_posts as up', 'up.maincategory_id', '=', 'posts.maincategory_id')
      ->join('users_posts_free as up', 'up.post_id', '=', 'posts_free.id')
      // ->join('users_posts as up', 'up.maincategory_id', '=', 'posts_free.maincategory_id')
      ->join('users as u', 'u.id', '=', 'up.user_id')
     // ->join('subcategorys as sc', 'sc.category_id', '=', 'categorys.id')
     // ->join('maincategorys', 'mc.subcategory_id', '=', 'sc.id')
      ->where('mc.maincategory_url', $subcategory)
       // ->where('mc.id', 41)
      // ->where('u.is_buyer', 1)
      // ->where('posts.site_id', 1)
      ->where('posts_free.publish', null)
      // asi es mejorar pero cambiaria las url amigables
       // ->where('up.maincategory_id', 42)
     // ->where('mc.id', 8)
      // ->orderBy('mc.id', 'asc')
      // ->orderBy('posts.created_at', 'desc')
      ->orderBy('posts_free.updated_at', 'desc')     
     // ->first();
      // ->get();
      ->paginate(10);




     //   print_r($category);

        // dd($category);

     // dd($subcategory);

     // exit;

      // puede a ver un duplicado por url, revisar despues, es mejor pasar id directo en controlador
      // $mc_id = MainCategory::select('maincategorys.id')
      $mc_id = MainCategory::select('maincategorys.id','maincategorys.maincategory_url','maincategorys.maincategory_name')   
      ->where('maincategorys.maincategory_url', $subcategory)      
      // ->first();
      ->firstOrFail();
      // ->find(2);
      // ->take(2)->get();
      // ->findOrFail($id);
      // ->latest();

      // print_r($mc_id->id);

      // exit;

      // $main_id;

      // if ($mc_id->id == 41) {

      //   $main_id = 41;

      // }else{

      //   $main_id = $mc_id->id;
      // }

      // print_r($main_id);

      // exit;

      $backlink = Backlink::select('backlinks.backlink_url')
      ->join('maincategorys_backlinks as mcb', 'mcb.backlink_id', '=', 'backlinks.id')
      ->join('maincategorys', 'mcb.maincategory_id', '=', 'maincategorys.id')      
      ->where('maincategorys.id', $mc_id->id)
      // ->where('maincategorys.id', $main_id)        
      ->where('backlinks.is_buyer', 1)      
      ->orderBy('backlinks.created_at', 'desc')   
      ->get();
      // ->paginate(10);

       // print_r($backlink);

      // print_r($subcategory);

      // exit;


      return view('subcategorycom', [
        'categorys' => $category,
        'backlinks' => $backlink,
        'maincategorys' => $mc_id->id,
        'mmaincategorys' => $mc_id    
        // 'maincategorys' => $main_id      
      // 'categoryslast' =>  $categorylast,
      // 'categorys1' => $category1,
      // 'subcategorys' => $subcategory,
      ]);
    }

    public function free($subcategory)
    {

      $category = Post::select('posts.post_name','posts.url_name','posts.id as postid','mc.maincategory_name','mc.subcategory_id','u.id as userid', 'u.username','u.img','mc.id','mc.maincategory_url','t.type_name','posts.created_at','posts.updated_at','t.type_color','posts.views')   
      ->join('maincategorys as mc', 'mc.id', '=', 'posts.maincategory_id')
      ->join('types as t', 't.id', '=', 'posts.type_id')
     // ->join('users_posts as up', 'up.maincategory_id', '=', 'posts.maincategory_id')
      ->join('users_posts as up', 'up.post_id', '=', 'posts.id')
      ->join('users as u', 'u.id', '=', 'up.user_id')
     // ->join('subcategorys as sc', 'sc.category_id', '=', 'categorys.id')
     // ->join('maincategorys', 'mc.subcategory_id', '=', 'sc.id')
      ->where('mc.maincategory_url', $subcategory)
      // ->where('u.is_buyer', 1)
      ->where('posts.site_id', 2)
     // ->where('mc.id', 8)
      // ->orderBy('mc.id', 'asc')
      // ->orderBy('posts.created_at', 'desc')
      ->orderBy('posts.updated_at', 'desc')   
     // ->first();
      // ->get();
      ->paginate(10);




     //   print_r($category);

     // dd($category);

     // exit;


      return view('subcategoryfree', [
        'categorys' => $category
      // 'categoryslast' =>  $categorylast,
      // 'categorys1' => $category1,
      // 'subcategorys' => $subcategory,
      ]);
    }



    public function complete()
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

        // $membership_id = $_GET['membership_id'];
        $maincategory_id = $_GET['maincategory_id'];
    // $id_course = $_GET['item_number'];

        $payer_email = $_GET['payer_email'];
        $payer_id = $_GET['PayerID'];

        $item_name = $_GET['item_name'];        


        $backlink = new Backlink;
        $backlink->backlink_url = $item_name;
        $backlink->backlink_email = $payer_email;
        $backlink->is_buyer = 1;                      
        $backlink->save();



        $order = new BacklinkOrder;
        $order->order = $txn_id;
        // $order->email = $email;
        $order->payer_email = $payer_email;
        // $order->membership_id = $membership_id;
        $order->maincategory_id = $maincategory_id;
        $order->payer_id = $payer_id;                   
        $order->save();



        $mcb = new MainCategoryBacklink;
        $mcb->maincategory_id = $maincategory_id;
        $mcb->backlink_id = $backlink->id;                     
        $mcb->save();

        
        return view('complete', [
        // 'membership' =>  $membership       
        ]);
      }

      return view('complete');



    }

    public function abort()
    {
      return view('abort');
      
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
