<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// usar clase
use Illuminate\Support\Facades\Auth;

use App\Repository\Post\PostRepository;
use App\Repository\PostFree\PostFreeRepository;
use App\Repository\Category\CategoryRepository;
use App\Repository\Category\MessageRepository;        

use App\Models\User;
// use App\Models\Category;
use App\Models\Post;
// use App\Models\Message;
use App\Models\Country;
use App\Models\PostFree;
use App\Models\StatisticsSearch;

use App\Models\Course;



use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

 // protected $posts;
 // protected $postsfree;
 // protected $categorys;


 public function __construct(PostRepository $post, PostFreeRepository $postfree,CategoryRepository $category,MessageRepository $message){

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


       // $id_user = Auth::user()->id;

       // $messagesnavbar = Message::select('messages.message')
       // ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
       // ->join('users as u', 'u.id', '=', 'mp.user_id')
       // ->join('posts as p', 'p.id', '=', 'mp.post_id')
       // ->where('u.id', $id_user)
       // ->orderBy('messages.created_at', 'desc')
       // ->limit(4)
       // ->get();

       // $mmessages = Message::select('messages.message')
       // ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')
       // ->join('users as u', 'u.id', '=', 'mp.user_id')
       // ->join('posts as p', 'p.id', '=', 'mp.post_id')
       // ->where('u.id', $id_user)
       // ->where('messages.read', 0)         
       // ->get();


       // $summessages = count($mmessages);

       // comentarios
     // $comments = Post::select('posts.post_name','posts.url_name','posts.id as postid','posts.post_content','u.id as userid', 'u.username','u.img','c.comment')
     // $replys = Message::select('u.id as userid', 'u.username','u.img','r.reply')        
     // ->join('replys as r', 'messages.id', '=', 'r.message_id')
     // ->join('users as u', 'u.id', '=', 'r.user_id')
     // // ->join('ranks as r', 'u.rank_id', '=', 'r.id')       
     // // ->where('posts.id', $postid)
     // // ->where('r.message_id', 1)
     // ->where('r.message_id', $message_id)
     //    // ->where('u.user_id', $postid)
     // // ->where('mc.id', 8)
     //    // ->orderBy('posts.id', 'asc')
     // // ->first();
     // // ->first();
     // ->get();

     // // dd($replys);

     // // exit;

     // // dd($postid);

     // $replysnavbar = Message::select('r.reply')
     // ->join('replys as r', 'messages.id', '=', 'r.message_id')
     // ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')    
     // ->join('posts as p', 'p.id', '=', 'mp.post_id')
     // ->join('users as u', 'u.id', '=', 'r.user_id')   
     // ->where('mp.user_id_message', $id_user)  
     //  // ->where('u.id', $id_user)
     // ->orWhere('mp.user_id','=',$id_user)
     // ->orderBy('r.created_at', 'desc')
     // ->limit(4)
     // ->get();

     // $replysall = Message::select('r.reply')  
     // ->join('replys as r', 'messages.id', '=', 'r.message_id')
     // ->join('messages_posts as mp', 'mp.message_id', '=', 'messages.id')    
     // ->join('posts as p', 'p.id', '=', 'mp.post_id')
     // ->join('users as u', 'u.id', '=', 'r.user_id')   
     // ->where('mp.user_id_message', $id_user) 
     //  // ->where('messages.read', 0)
     // ->orWhere('mp.user_id','=',$id_user)         
     // ->get();


     // $sumreplys = count($replysall);


        return view('home', [
          'categorylastnegocios' =>  $categorylastnegocios,
          'categorylastservicios' =>   $categorylastservicios,              
        // 'categorys' => $array,
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


      // 'subcategorys' => $subcategory,
        ]);

      } else {

       return view('home', [
        'categorylastnegocios' =>  $categorylastnegocios,
        'categorylastservicios' =>   $categorylastservicios,     
        // 'categorys' => $array,
        'categorys' => $category,
        'categoryslast' =>  $categorylast,
        'categoryslastser' =>  $categorylastser,
        'categorys1' => $category1,
        'categorys2' => $category2,
        'categoryslastcom' =>  $categorylastcom,
        'tablelast' =>  $tablelast       
      // 'subcategorys' => $subcategory,
      ]);
     }   


    //  return view('home', [
    //     // 'categorys' => $array,
    //   'categorys' => $category,
    //   'categoryslast' =>  $categorylast,
    //   'categorys1' => $category1,
    //   'messagesnavbar' => $messagesnavbar
    //   // 'subcategorys' => $subcategory,
    // ]);
   }

   public function rules()
   {

    return view('rules');

  }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function courses()
    {
     return view('courses');
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

   public function mapall()
   {


    // $usermap = User::select('c.country_name, c.lat, c.long')
    // ->join('countrys as c', 'c.id', '=', 'users.country_id')           
    // ->get();

    // $usermap = User::select('*')
     // $usermap = User::select('countrys.country_name as countryname, countrys.lat as latitude, countrys.long as longitude')
     // $usermap = Country::select('countrys.country_name, countrys.latitude, countrys.longitude')
     // // ->join('countrys', 'countrys.id', '=', 'users.country_id')
     // ->join('users', 'countrys.id', '=', 'users.country_id')             
     // ->get();

    // tube que hacer join de esta manera tiene problema con latitude y longitude
     $usermap = DB::table('countrys as c')
     // ->leftJoin('users as u', 'u.country_id', '=', 'c.id')
     // ->select('u.username, c.country_name')
     // ->where('p.id', $id)        
     ->get();
     // ->first();

     // dd($usermap);

     // exit;

     return response()->json($usermap);

    // return response()->json("ok");

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

  public function coursesall($coursename)
  {

    $apikey = 'AIzaSyCP7XXInsH6pmnrzhRCvucYueyc0XK4WPE';

    // $channelid = 'UCD1hK8-EgAnYA7oz4ggPTzg';

    $channelid = 'UCD1hK8-EgAnYA7oz4ggPTzg';

    $laravideo = 'X8bTrd0wgOo';

    //playlist de laravel por id
    $playlist = 'PLY0UhHKyZBT2y_Vejvf-Jihkm5AN4OgZw';

    // $playlist = 'PLY0UhHKyZBT0YdFNGFHejG9850rl-pd_1';

        // $endpoint = "https://api.tibiadata.com/v4/character/".'Issuex';

    // $endpoint = "https://www.googleapis.com/youtube/v3/videos?channelId={$channelid}&key={$apikey}";

     // $endpoint = "https://www.googleapis.com/youtube/v3/search?channelId={$channelid}&key={$apikey}";

      // mejor ejemplo
    // $endpoint = 'https://www.googleapis.com/youtube/v3/videos?id='.$channelid.'&key='.$apikey.'&part=snippet';

     // $endpoint = 'https://www.googleapis.com/youtube/v3/videos?id='.$channelid.'&key='.$apikey.'&part=snippet&channelId'.$channelid;

    //funciona video por id
    $endpoint = 'https://www.googleapis.com/youtube/v3/videos?'.'part=snippet&id='.$laravideo.'&key='.$apikey;

      //tratar de obtener todos los videos
      // $endpoint = 'https://www.googleapis.com/youtube/v3/videos?'.'part=snippet'.'&key='.$apikey;

      //playlist cuando pones id y cannel id es imcompatibles
      // $endpoint = 'https://www.googleapis.com/youtube/v3/playlists?'.'part=snippet&id='.$playlist.'&channelId='.$channelid.'&key='.$apikey;

       //playlist funciona, pero no devuelve los videos
       // $endpoint = 'https://www.googleapis.com/youtube/v3/playlists?'.'part=snippet&id='.$playlist.'&key='.$apikey;




     // https://www.googleapis.com/youtube/v3/videos?part=snippet&id=xE_rMj35BIM&key=YOUR_KEY

    //funciona pero muestra videos de todo el mundo
    // $endpoint = 'https://www.googleapis.com/youtube/v3/search?id='.$channelid.'&key='.$apikey.'&part=snippet';


    //channelId se pode en snippet para filtrar por canal 
    // $endpoint = 'https://www.googleapis.com/youtube/v3/search?key='.$apikey.'&part=snippet&channelId'.$channelid;



      // $endpoint = 'https://www.googleapis.com/youtube/v3/videos?id={$channelid}&key={$apikey}&part=snippet';



    // $endpoint = "https://api.tibiadata.com/v4/character/".$player1->player_name;

    $client = new \GuzzleHttp\Client(); 

    $response = $client->request('GET', $endpoint);


    // json decode convirete json a objeto
    $contents = json_decode($response->getBody()->getContents());

    // foreach ($contents  as $data) {

    //   print_r($data->id);

    //   exit;

    // }

    // return response()->json($contents);



    $course = Course::select('courses.id','courses.course_url','courses.course_name','pensums.pensum_name','pensums.pensum_video','pensums.id as pensum_id','courses.course_img','courses.course_icon','courses.course_body','courses.course_content')
    ->join('pensums', 'pensums.course_id', '=', 'courses.id')
    ->join('users_califications_courses', 'users_califications_courses.course_id', '=', 'courses.id')
    // ->join('contents as cont', 'cont.id', '=', 'posts_free.content_id')   
    ->where('courses.course_url', $coursename)    
    ->firstOrFail();

    $pensum = Course::select('courses.id','courses.course_url','courses.course_name','pensums.pensum_name','pensums.pensum_url','pensums.pensum_video','pensums.id as pensum_id','courses.course_img','courses.course_icon','courses.course_body')
    ->join('pensums', 'pensums.course_id', '=', 'courses.id')
    ->join('users_califications_courses', 'users_califications_courses.course_id', '=', 'courses.id')
    // ->join('contents as cont', 'cont.id', '=', 'posts_free.content_id')   
    ->where('courses.course_url', $coursename)    
    ->get();

     // return view('coursesall');

    return view('coursesall', [
      'courses' => $course,
      'pensums' => $pensum
        // 'backlinks' => $backlink,
        // 'maincategorys' => $mc_id->id,
        // 'mmaincategorys' => $mc_id    

    ]);
  }

  public function coursespensum($coursename,$pensunname)
  {

   $course = Course::select('courses.id','courses.course_url','courses.course_name','pensums.pensum_name','pensums.pensum_video','pensums.id as pensum_id','courses.course_img','courses.course_icon','courses.course_body','pensums.pensum_kwone','pensums.pensum_kwtwo','pensums.pensum_kwthree','pensums.pensum_url')
   ->join('pensums', 'pensums.course_id', '=', 'courses.id')
   ->join('users_califications_courses', 'users_califications_courses.course_id', '=', 'courses.id')
    // ->join('contents as cont', 'cont.id', '=', 'posts_free.content_id')   
   ->where('courses.course_url', $coursename)
   ->where('pensums.pensum_url', $pensunname)        
   ->firstOrFail();

   $pensum = Course::select('courses.id','courses.course_url','courses.course_name','pensums.pensum_name','pensums.pensum_url','pensums.pensum_video','pensums.id as pensum_id','courses.course_img','courses.course_icon','courses.course_body')
   ->join('pensums', 'pensums.course_id', '=', 'courses.id')
   ->join('users_califications_courses', 'users_califications_courses.course_id', '=', 'courses.id')
    // ->join('contents as cont', 'cont.id', '=', 'posts_free.content_id')   
   ->where('courses.course_url', $coursename)    
   ->get();

   return view('cursospensum', [
    'courses' => $course,
    'pensums' => $pensum
        // 'backlinks' => $backlink,
        // 'maincategorys' => $mc_id->id,
        // 'mmaincategorys' => $mc_id    

  ]);

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
