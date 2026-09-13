<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SubCategoryFreeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;


use App\Http\Controllers\User\PostController;
use App\Http\Controllers\User\PostFreeController;
use App\Http\Controllers\User\MessageController;
use App\Http\Controllers\User\ReplyController;
use App\Http\Controllers\User\CalificationController;
use App\Http\Controllers\User\CommentController;
use App\Http\Controllers\User\CommentFreeController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\MembershipController;

// admin
use App\Http\Controllers\Admin\UserController as AdminController;
use App\Http\Controllers\Admin\StatusController;
use App\Http\Controllers\Admin\OrdersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
// 	// return view('welcome');

// 	return view('home');
// });

// Route::get('home', function () {
// 	return view('home');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/cursos', [HomeController::class, 'courses'])->name('courses');

Route::get('/cursos/{cursoname}', [HomeController::class, 'coursesall'])->name('cursosall');

Route::get('/curso/{cursoname}/{pensunname}', [HomeController::class, 'coursespensum'])->name('cursospensum');

// compras backlinks
Route::get('/complete', [SubCategoryFreeController::class, 'complete'])->name('complete');

Route::get('/abort', [SubCategoryFreeController::class, 'abort'])->name('abort');


Route::get('/reglas', [HomeController::class, 'rules'])->name('rules');

Route::get('/contacto', [HomeController::class, 'contact'])->name('contact');

Route::get('/sobre-nosotros', [HomeController::class, 'about'])->name('about');

Route::get('/politica-de-privacidad', [HomeController::class, 'priva'])->name('priva');

Route::get('/guest-post', [HomeController::class, 'guestpost'])->name('guestpost');

Route::get('login', [AuthenticatedSessionController::class, 'create'])
->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
->name('password.request');


Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
->name('password.email');

Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
->name('password.reset');

Route::post('reset-password', [NewPasswordController::class, 'store'])
->name('password.store');

// Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
// ->name('logout');

Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
->name('logout');

Route::get('register', [RegisteredUserController::class, 'create'])
->name('register');

Route::post('register', [RegisteredUserController::class, 'store']);

Route::get('/activation', [RegisteredUserController::class, 'activation'])
->name('msgactivation');

// esta ruta tiene problemas hay que declararla antes de la ruta show, si no no sirve por que trae error con username en la vista
Route::get('/members/ignored/{id}', [MemberController::class, 'ignored']);

Route::get('/members/dignored/{id}', [MemberController::class, 'dignored']);

Route::get('/members/{username}/{id}', [MemberController::class, 'show'])->name('show');


// Route::get('/members/{id}', [MemberController::class, 'show'])->name('show');

// Route::get('/members', [MemberController::class, 'show'])->name('show');


Route::middleware('auth')->group(function () {

	Route::get('/admin/users', [AdminController::class, 'index'])->name('admin.users');

	Route::get('/admin/users/{userid}', [AdminController::class, 'update'])->name('admin.update');

	Route::get('/admin/updatethree/{userid}', [AdminController::class, 'updatethree'])->name('admin.updatethree');

	Route::get('/admin/updateyear/{userid}', [AdminController::class, 'updateyear'])->name('admin.updateyear');

	Route::get('/admin/buyers/{userid}', [AdminController::class, 'buyers'])->name('admin.buyers');

	// para los baneos
	Route::get('/users/status', [StatusController::class, 'index'])->name('admin.userstatus');

	Route::get('/users/statu/change/{userid}', [StatusController::class, 'statuchange'])->name('admin.statuchange');

	Route::get('/users/statu/ban/{userid}', [StatusController::class, 'statuban'])->name('admin.statuban');

	Route::get('/users/statu/desban/{userid}', [StatusController::class, 'statudesban'])->name('admin.statudesban');

		// ordenes
	Route::get('/users/orders', [OrdersController::class, 'index'])->name('admin.usersorders');




	// user normal en general
	Route::get('/settings', [UserController::class, 'index'])->name('settings');

	Route::get('/info', [UserController::class, 'info'])->name('info');

	Route::post('setting/post', [UserController::class, 'store'])->name('setting.store');

	Route::get('/setting/recover', [UserController::class, 'recover'])->name('setting.recover');

	// para cambiar password
	Route::post('setting/change', [UserController::class, 'change'])->name('setting.change');

	Route::get('/users/califications', [UserController::class, 'waycalifications'])->name('waycalifications');

	Route::get('/users/califications/accept/{calificationid}', [UserController::class, 'viewcalifications'])->name('viewcalifications');


	Route::post('/users/califications/post', [UserController::class, 'storecalifications'])->name('storecalifications');

	Route::get('/membership/details', [MembershipController::class, 'index'])->name('membership');

	Route::get('/checkout/{membershipid}', [MembershipController::class, 'checkout'])->name('checkout');

	Route::get('/success', [MembershipController::class, 'success'])->name('success');

	Route::get('/cancel', [MembershipController::class, 'cancel'])->name('cancel');


	// esta ruta tiene problemas hay que declararla antes de la ruta show, si no no sirve
	// Route::get('/members/ignored/{id}', [MemberController::class, 'ignored'])->name('ignored');
	// Route::get('/members/ignored/{id}', [MemberController::class, 'ignored']);

	// Route::get('/members/dignored/{id}', [MemberController::class, 'dignored']);

	// Route::get('/members/{username}/{id}', [MemberController::class, 'show'])->name('show');

	// Route::get('/members/ignored/{id}', [MemberController::class, 'ignored'])->name('ignored');

	// Route::get('/members/ignored/{id}', [MemberController::class, 'ignored']);


// postear
	Route::get('/forum/{subcategory}/{id}/post-thread', [PostController::class, 'index'])->name('post');

	// comentarios
	Route::post('comment/post/store', [CommentController::class, 'store'])->name('comment.store');

// postear comunidad
	Route::get('/comunidad/{subcategory}/{id}/post-thread', [PostFreeController::class, 'index'])->name('postfree');

	// cuando dice ruta no definida es por que no empieza con el nombre de ruta y controlador 
	// ejemplo comunidad y el controlador se llama comment
	// si dejo comment deja de funcionar el otro comment de commencontrolador
	Route::post('commentfree/post', [CommentFreeController::class, 'store'])->name('comment.storefree');

// conversation
	Route::get('/conversation/{username}/{postid}/message-thread', [MessageController::class, 'index'])->name('message');

	Route::post('conversation/post', [MessageController::class, 'store'])->name('message.store');

	Route::get('/conversations', [MessageController::class, 'inbox'])->name('message.inbox');

	// Route::get('/conversations/{userid}', [MessageController::class, 'converusers'])->name('message.converusers');

	// Route::get('/conversations/{userid}/{useridmessage}', [MessageController::class, 'converusers'])->name('message.converusers');

	Route::get('/conversations/{userid}/{useridmessage}/{postid}', [MessageController::class, 'converusers'])->name('message.converusers');

	// replica mensajes
	Route::get('/replys', [ReplyController::class, 'index'])->name('reply.index');

	Route::post('reply/message', [ReplyController::class, 'store'])->name('reply.store');

	Route::post('forum/post', [PostController::class, 'store'])->name('post.store');

	// post comunidad send
	Route::post('comunidad/post', [PostFreeController::class, 'store'])->name('postfree.store');

	// moderar post
	Route::get('postunpublish/{postid}', [PostController::class, 'unpublish'])->name('unpublish');

	// moderar comment
	Route::get('comentunpublish/{postid}', [PostController::class, 'commentunpublish']);

	// mensajes y replicas con ajax navbar
	Route::get('/msgfront', [MessageController::class, 'msgfront']);

	// calificar
	Route::get('/calification/{username}/{postid}/calification-thread', [CalificationController::class, 'index'])->name('calification');

	Route::post('calification/post', [CalificationController::class, 'store'])->name('calification.store');

	Route::get('/calification/{userid}', [CalificationController::class, 'show'])->name('calification.calificationusers');

});

// seccion premium y free

Route::get('/forum/{subcategory}', [SubCategoryController::class, 'index'])->name('subcategory');

Route::get('/forum/ofertas/{subcategory}', [SubCategoryController::class, 'free'])->name('subcategoryfree');

// seccion 3 de comunidad no negocios
Route::get('/comunidad/{subcategory}', [SubCategoryFreeController::class, 'index'])->name('subcategoryfree');

// Route::get('/comunidad/{tema}/{id}/{postid}', [PostFreeController::class, 'show'])->name('post.showcom');


// colocar el id desde que empieza y cuando son 2 parametros poner muchos numeros
// Route::get('/comunidad/tema/{tema}.{id}{postid}', [PostFreeController::class, 'show'])->name('post.showcom')->where(['id' => '[42-90000000]+', 'postid' => '[1-900000]+']);

Route::get('/{scurl}/{mcurl}/tema/{tema}.{id}{postid}', [PostFreeController::class, 'show'])->name('post.showcom')->where(['id' => '[1-10000000000000]+', 'postid' => '[1-100000000000]+']);


// Route::get('/forum/{subcategory}/{postid}', [SubCategoryController::class, 'index'])->name('subcategory');


//
// Route::get('/forum/{subcategory}/{id}/post-thread', [PostController::class, 'index'])->name('post');

// Route::post('forum/post', [PostController::class, 'store'])->name('post.store');

// el orden de los parametros debe ser igual en el controlador, ejemplo 1,2,3

// id es el parametro de la maincategory
Route::get('/temas/{tema}/{id}/{postid}', [PostController::class, 'show'])->name('post.show');



// Route::post('/conversation/{username}/{postid}', [MessageController::class, 'show'])->name('post.show');

//
// Route::get('/conversation/{username}/{postid}/message-thread', [MessageController::class, 'index'])->name('message');

// Route::post('conversation/post', [MessageController::class, 'store'])->name('message.store');

// Route::get('/conversations', [MessageController::class, 'inbox'])->name('message.inbox');

// Route::get('/conversation/{tema}/{id}/{postid}', [MessageController::class, 'show'])->name('message.show');






 // post-thread

