<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;

use Mail;
use App\Mail\WelcomeEmail;

// use App\Models\User;

use Illuminate\Support\Facades\DB;

use Session;

use App\Models\Country;

// use App\Http\Controllers\Auth\Session;

// no sirvio
// use Mail;


// use App\Mail\Notification;
// use Illuminate\Support\Facades\Mail;

// use Illuminate\Bus\Queueable;
// use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Mail\Mailable;
// use Illuminate\Mail\Mailables\Content;
// use Illuminate\Mail\Mailables\Envelope;
// use Illuminate\Queue\SerializesModels;

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {

      //  echo "Proximamente";
      // exit;

      $numberone = rand(1,100);
      $numbertwo = rand(1,100);

      $totalsum = $numberone + $numbertwo;
       // $total = session('totalsum', $totalsum);
      Session::put('totalsum', $totalsum);
      // Session::set('totalsum', $totalsum);

      // $user_id = Auth::user()->id;

        // $total = Auth::totalsum();

       // $total1 = $request->session()->get('totalsum');

       // $total1 = Session::get('totalsum');

       // $data = $request->session()->all();

        // echo $data;
        // print_r($data);
        // echo $total1;

        // exit;

      //   echo $numberone;
      // echo $numberone + $numbertwo;

      // exit;

      // $mailData = [
      //   'title' => 'Mail from ItSolutionStuff.com',
      //   'body' => 'This is for testing email using smtp.'
      // ];

      // Mail::to('testemail@gmail.com')->send(new WelcomeEmail($mailData));

        // dd("Email is sent successfully.");

     //    $data = array('name'=>"Virat Gandhi");

     //   //  Mail::send(['text'=>'mail'], $data, function($message) {
     //   //     $message->to('abc@gmail.com', 'Tutorials Point')->subject
     //   //     ('Laravel Basic Testing Mail');
     //   //     $message->from('xyz@gmail.com','Virat Gandhi');
     //   // });

     //    Mail::to('demo@mail.com')->send(new WelcomeMail([
     //      'name' => 'Demo',
     // ]));


        // Mail::to('demo@mail.com')->send(new Notification("juan"));

       //   Mail::to('demo@mail.com')->send(['text'=>'mail'], $data, function($message) {
       //     $message->to('abc@gmail.com', 'Tutorials Point')->subject
       //     ('Laravel Basic Testing Mail');
       //     $message->from('xyz@gmail.com','Virat Gandhi');
       // });


      // pruebas con php mailer
        // require base_path("vendor/autoload.php");

        // $mail = new PHPMailer(true);

        // print_r($mail);

        // exit;

        // $mail->SMTPDebug = 0;
        // // $mail->isSMTP();
        //     $mail->Host = 'smtp.example.com';             //  smtp host
        //     $mail->SMTPAuth = true;
        //     $mail->Username = 'user@example.com';   //  sender username
        //     $mail->Password = '**********';       // sender password
        //     $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
        //     $mail->Port = 587; 




            // $mail->Subject = "Estimado/a Cliente"; 

        // print_r($mail->Subject);

        // exit;

        // $mail->Subject = $title; 

            // $mail->SetFrom('contacto-abc@abctelefonos.com', 'ABCtelefonos.com ');

        // $mail->addAddress($usuarioEmail, 'ABCtelefonos.com');


            // $mail->addAddress('test@gmail.com', 'ABCtelefonos.com');

            // $mail->addAddress('test@gmail.com');

            // $mail->Encoding = 'base64';

            // $mail->CharSet = 'UTF-8';

    // $mail->CharSet = 'iso-8859-1';

        // $change_body = utf8_encode($body);

         // $mail->isHTML(true);                // Set email content format to HTML

         // $mail->Subject = $request->emailSubject;
         // $mail->Body    = $request->emailBody;

            // $mail->Body = 'prueba mensaje'; 


        // $mail->MsgHTML($change_body);

            // $mail->MsgHTML($mail->Body);

    // $mail->CharSet = 'UTF-8';

            // $mail->Send();



      // return view('auth.register');

      return view('auth.register', [
        'numberone' => $numberone,
        'numbertwo' => $numbertwo
      ]);

    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

      // dd($_SERVER['REMOTE_ADDR']);

      // exit;

      $request->validate([
        // 'username' => ['required', 'string', 'min:10', 'max:30', 'unique:'.User::class],
        'email' => ['required', 'string', 'email', 'min:8', 'max:35', 'unique:'.User::class],
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
        'password' => ['required','min:8', 'max:35'],
        'totalsum' => ['required'],
        'terms' => ['required'],
      ]);

      // $usernamelower = strtolower($request->username);

      $user_email = $request->email;

      $username_start = substr($user_email, 0, 2);

      $username_final = 'user'.rand(1,100).$username_start;



      $emaillower = strtolower($request->email);

      $random_token = password_hash($request->email.rand(10,100),PASSWORD_BCRYPT);

      $ip_user = $_SERVER['REMOTE_ADDR'];

      $ip_country = Country::select('id')            
        // ->whereBetween('ip_min', [$ageFrom, $ageTo])
      ->whereBetween('ip_max', ['0', $ip_user])            
      ->first();

        // if (empty($ip_country)) {
        //   print_r('desconocido');

        //   exit;
        // }

        // print_r($ip_country->id);

          // 127.0.0.1
          // print_r($ip_user);



        // exit;


      $total1 = Session::get('totalsum');



      if ($total1 == $request->totalsum) {

          //1 es desconocido si la ip devuelve nulo
       if (empty($ip_country)) {

       // contacto@opengiscrm.com 
       // 12345678
        $user = User::create([
          'img' => 'user.png',
          'banner' => 'userbanner.png',
        // 'username' => $request->username,
          // 'username' => $usernamelower,
          'username' => $username_final,
        // 'email' => $request->email,
          'email' => $emaillower,
          'email_verified_at' => now(),         
          'password' => Hash::make($request->password),
          'token' =>  $random_token,
          'role_id' => 2,
          'country_id' => 1, 
          'statu_id' => 0,
          'is_buyer' => 0,
        // 'theme_color' => 'white',
          'theme_color' => 'gray',
          'rank_id' => 1,
          'membership_start' => null,
          'membership_end' => null,
          'remember_token' => Str::random(10),
          'terms' => 1,
          'is_verified' => 0,
        // 'is_ignored' => 0,
          'is_banned' => 0,
          'reason_id' => 1,
          'url_profile' => null,
          'url_patreon' => null,
          'ip_adress' => $_SERVER['REMOTE_ADDR'],
        ]);

      }else{

        $user = User::create([
          'img' => 'user.png',
          'banner' => 'userbanner.png',
        // 'username' => $request->username,
          // 'username' => $usernamelower,
          'username' => $username_final,
        // 'email' => $request->email,
          'email' => $emaillower,
          'email_verified_at' => now(),         
          'password' => Hash::make($request->password),
          'token' =>  $random_token,
          'role_id' => 2,
          'country_id' => $ip_country->id, 
          'statu_id' => 0,
          'is_buyer' => 0,
        // 'theme_color' => 'white',
          'theme_color' => 'gray',
          'rank_id' => 1,
          'membership_start' => null,
          'membership_end' => null,
          'remember_token' => Str::random(10),
          'terms' => 1,
          'is_verified' => 0,
        // 'is_ignored' => 0,
          'is_banned' => 0,
          'reason_id' => 1,
          'url_profile' => null,
          'url_patreon' => null,
          'ip_adress' => $_SERVER['REMOTE_ADDR'],
        ]);


      }

      



      event(new Registered($user));

      Auth::login($user);

      // $random_token = password_hash($request->email.rand(10,100),PASSWORD_BCRYPT);


      $mailData = [
        'title' => 'Verificar Email',
        'body' => 'Necesitamos asegurarnos de que seas humano. Verifique su correo electrónico y comience a utilizar su cuenta del sitio web.',
        'token' =>  $random_token
      ];



      // Mail::to('testemail@gmail.com')->send(new WelcomeEmail($mailData));

      Mail::to($request->email)->send(new WelcomeEmail($mailData));


      return redirect(RouteServiceProvider::HOME);

    }else{

      // echo "No coincide";
     return back()->with('msg_exception', 'Realice la suma para verificar que no es un Robot!!');
   }


 }


 public function activation()
 {



  if (!empty($_GET['token']) && isset($_GET['token'])) {

    $token = $_GET['token'];

    $useremail = User::select('email')    
    ->where('token', $token)    
    ->first();

        // $useremail->email;


        // verificacion de email
        // $readmessages = DB::table('users')
        // ->where('email', $useremail->email)
        // ->update(['statu_id' => 1]);

         // verificacion de email y zona negocios
    $readmessages = DB::table('users')
    ->where('email', $useremail->email)
    ->update([
      'statu_id' => 1,
      'is_verified' => 1
    ]);


        // return view('msgactivation');

    return view('auth.msg_activation');




  }else{
    throw new \Exception('Page not Found');
        // throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
  }


}
}
