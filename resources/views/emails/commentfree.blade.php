<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Nuevos Comentarios</title>
    <style>
        /* Inline styles for simplicity, consider using CSS classes for larger templates */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f1f1f1;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 200px;
        }

        .message {
            padding: 20px;
            background-color: #ffffff;
        }

        .message p {
            margin-bottom: 10px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        
        <div class="message">
           {{--  <p>Dear {{ $mailData['name'] }},</p>
           <p>Thank you for providing your details Your Company Name. --}}
            <h1>{{ $mailData['title'] }}</h1>
            <p>{{ $mailData['body'] }}</p>
           {{--  <a href="http://127.0.0.1:8000/activation?token={{$mailData['token']}}">Verificar Email</a> --}}
            <a href="https://foroworkers.com/comunidad/{{$mailData['url_name']}}/{{$mailData['maincategory_id']}}/{{$mailData['post_id']}}">{{$mailData['url_name']}}/{{$mailData['maincategory_id']}}/{{$mailData['post_id']}}</a> 

           
            
            <p>Gracias</p>
        </div>
        
    </div>
</body>

</html>