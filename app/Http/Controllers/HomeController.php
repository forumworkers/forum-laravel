<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Repository\Post\PostRepository;
use App\Repository\PostFree\PostFreeRepository;
use App\Repository\Category\CategoryRepository;
use App\Repository\Message\MessageRepository;        

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

 // protected $posts;
 // protected $postsfree;
 // protected $categorys;


 public function __construct(PostRepository $post, PostFreeRepository $postfree,CategoryRepository $category, MessageRepository $message){

  $this->post = $post;

  $this->postfree = $postfree;

  $this->category = $category;

  $this->message = $message;


}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      // return redirect('https://www.youtube.com/watch?v=NrvRXrSo-yo');


      $categorylastnegocios = $this->post->getAllPosts(1);

      $categorylastservicios =  $this->post->getAllPosts(2);   

      $categorylastcomumidad =  $this->postfree->getAllPosts(3);

      $tablelast = array($categorylastnegocios,$categorylastservicios,$categorylastcomumidad);

      $category =  $this->category->getCategorys(1);

      $category1 =  $this->category->getCategorys(2);

      $category2 =  $this->category->getCategorys(3);

      $categorylast =  $this->post->getLastPosts(1);

      $categorylastser =  $this->post->getLastPosts(2);

      $categorylastcom =  $this->postfree->getLastPosts(3);    
      


      if (Auth::user()) {

        $id_user = Auth::user()->id;

        $replys =  $this->message->getAllReplysMessages($id_user);

        $replysnavbar =  $this->message->getLimitReplysMessages($id_user);

        $replysall =  $this->message->getAllReplys($id_user); 

        $messagesnavbar =  $this->message->getLimitMessages($id_user);     


        $sumreplys = count($replysall);

        $messages =  $this->message->getAllMessagesByUser($id_user);

        $mmessagesall =  $this->message->getAllMessages($id_user);


        $summessages = count($mmessagesall);


        return view('home', [
          'categorylastnegocios' =>  $categorylastnegocios,
          'categorylastservicios' =>   $categorylastservicios,
          'categorys' => $category,
          'categoryslast' =>  $categorylast,
          'categoryslastser' =>  $categorylastser,
          'categorys1' => $category1,
          'messagesnavbar' => $messagesnavbar,
          'summessages' => $summessages,
          'replys' => $replys,
          'replysnavbar' => $replysnavbar,
          'sumreplys' => $sumreplys,
          'categorys2' => $category2,
          'categoryslastcom' =>  $categorylastcom,
          'tablelast' =>  $tablelast     
        ]);

      } else {

       return view('home', [
        'categorylastnegocios' =>  $categorylastnegocios,
        'categorylastservicios' =>   $categorylastservicios,     
        'categorys' => $category,
        'categoryslast' =>  $categorylast,
        'categoryslastser' =>  $categorylastser,
        'categorys1' => $category1,
        'categorys2' => $category2,
        'categoryslastcom' =>  $categorylastcom,
        'tablelast' =>  $tablelast    
      ]);
     } 
   }

   public function rules()
   {

    return view('rules');

  }


  public function contact()
  {
   return view('contact');
 }

 public function about()
 {
   return view('about');
 }

 public function priva()
 {
   return view('priva');
 }

 public function guestpost()
 {
   return view('guestpost');
 } 

 public function findPost(Request $request)
 {

   $findpost = Post::select('posts.post_name','posts.url_name','posts.id as postid','mc.maincategory_name','mc.subcategory_id','u.id as userid', 'u.username','u.img','mc.id','mc.maincategory_url','t.type_name','posts.created_at','posts.updated_at','t.type_color','posts.views')    
   ->join('maincategorys as mc', 'mc.id', '=', 'posts.maincategory_id')
   ->join('types as t', 't.id', '=', 'posts.type_id')
     // ->join('users_posts as up', 'up.maincategory_id', '=', 'posts.maincategory_id')
   ->join('users_posts as up', 'up.post_id', '=', 'posts.id')
   ->join('users as u', 'u.id', '=', 'up.user_id')
     // ->join('subcategorys as sc', 'sc.category_id', '=', 'categorys.id')
     // ->join('maincategorys', 'mc.subcategory_id', '=', 'sc.id')
      // ->where('mc.maincategory_url', $subcategory)
      // ->where('posts.post_name','like','%'.'negocio'.'%')
   ->where('posts.post_name','like','%'.$request->post.'%')      
      // ->where('u.is_buyer', 1)
   ->where('posts.site_id', 1)
      // ->orWhere('posts.site_id', 2)
   ->where('posts.publish', null)
     // ->where('mc.id', 8)
      // ->orderBy('mc.id', 'asc')
      // ->orderBy('posts.created_at', 'desc')
   ->orderBy('posts.updated_at', 'desc')
   ->limit(10)     
     // ->first();
   ->get();
      // ->paginate(10);


   $findpostfree = PostFree::select('posts_free.post_name','posts_free.url_name','posts_free.id as postid','mc.maincategory_name','mc.subcategory_id','u.id as userid', 'u.username','u.img','mc.id','mc.maincategory_url','posts_free.created_at','posts_free.updated_at','posts_free.views')    
   ->join('maincategorys as mc', 'mc.id', '=', 'posts_free.maincategory_id')
      // ->join('types as t', 't.id', '=', 'posts.type_id')
     // ->join('users_posts as up', 'up.maincategory_id', '=', 'posts.maincategory_id')
   ->join('users_posts_free as up', 'up.post_id', '=', 'posts_free.id')
      // ->join('users_posts as up', 'up.maincategory_id', '=', 'posts_free.maincategory_id')
   ->join('users as u', 'u.id', '=', 'up.user_id')
     // ->join('subcategorys as sc', 'sc.category_id', '=', 'categorys.id')
     // ->join('maincategorys', 'mc.subcategory_id', '=', 'sc.id')
   ->where('posts_free.post_name','like','%'.$request->post.'%')  
      // ->where('mc.maincategory_url', $subcategory)
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
   ->limit(10)       
     // ->first();
   ->get();
      // ->paginate(10);

     // return response()->json($findpost);

      // return response()->json($findpostfree);

   


   if (!empty($request->post)) {

    $search = new StatisticsSearch;

    $search->keyword = $request->post;            

    $search->save();

  }

  return response()->json(
    [
     'findpost' => $findpost,
     'findpostfree' => $findpostfree
   ]
 );

    // return response()->json("ok");

}


}
