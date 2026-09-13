<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// usar clase
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Category;
use App\Models\MainCategory;
use App\Models\Post;

use Illuminate\Support\Facades\DB;


class SubCategoryController extends Controller
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
      ->where('posts.site_id', 1)
      ->where('posts.publish', null)
     // ->where('mc.id', 8)
      // ->orderBy('mc.id', 'asc')
      // ->orderBy('posts.created_at', 'desc')
      ->orderBy('posts.updated_at', 'desc')     
     // ->first();
      // ->get()
      ->paginate(10);




     //   print_r($category);

     // dd($category);

     // exit;

      // esto sirve para lanzar la excepcion por categorua url
      // $mc_id = MainCategory::select('maincategorys.id')            
      // ->where('maincategorys.maincategory_url', $subcategory)      
      // // ->first();
      // ->firstOrFail();

      $mc_id = MainCategory::select('maincategorys.id','maincategorys.maincategory_url','maincategorys.maincategory_name')   
      ->where('maincategorys.maincategory_url', $subcategory)      
      // ->first();
      ->firstOrFail();


      return view('subcategory', [
        'categorys' => $category,
         'maincategorys' => $mc_id->id,
        'mmaincategorys' => $mc_id  
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

      $mc_id = MainCategory::select('maincategorys.id','maincategorys.maincategory_url','maincategorys.maincategory_name')   
      ->where('maincategorys.maincategory_url', $subcategory)      
      // ->first();
      ->firstOrFail();


      return view('subcategoryfree', [
        'categorys' => $category,
         'maincategorys' => $mc_id->id,
         'mmaincategorys' => $mc_id  
      // 'categoryslast' =>  $categorylast,
      // 'categorys1' => $category1,
      // 'subcategorys' => $subcategory,
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
