<script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@type": "WebPage",
  "headline": "{{ $post->post_name }}",
  "text": "{!! $post->post_content !!}",
  "url": "https://foroworkers.com/comunidad/{{$post->url_name}}/{{$post->maincategory_id}}/{{$post->postid}}}",
  "datePublished": "{{ date('d-m-Y',strtotime($post->created_at)) }}",
  "author": {
        "@type": "Person",
        "name": "{{$post->username}}",
        "url": "https://foroworkers.com/members/{{$post->username}}/{{$post->userid}}"
        {{-- "agentInteractionStatistic": {
          "@type": "InteractionCounter",
          "interactionType": "https://schema.org/WriteAction",
          "userInteractionCount": 8
        } --}}
      },
  "mainEntity": {
    "@type": "DiscussionForumPosting"    
  },
{{--   @foreach($comments as $comment) --}}
  "comment": [{
  {{-- @foreach($comments as $comment) --}}
    "@type": "Comment",
    @foreach($comments as $comment)
    "name": "{{$comment->username}}",
   {{--   @foreach($comments as $comment) --}}
    "text": "{!! $comment->comment !!}",
   {{--   @endforeach    --}}
   @endforeach 
  }]
   {{-- @endforeach   --}}     
    }
    </script>

   

    

@if(!empty($comment->comment))
    <script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@type": "WebPage",
  "headline": "{{ $post->post_name }}",
  "text": "{!! $post->post_content !!}",
  "url": "https://foroworkers.com/comunidad/{{$post->url_name}}/{{$post->maincategory_id}}/{{$post->postid}}",  
  "author":
   {
        "@type": "Person",
        "name": "{{$post->username}}",
        "url": "https://foroworkers.com/members/{{$post->username}}/{{$post->userid}}",
        "datePublished": "{{ date('d-m-Y',strtotime($post->created_at)) }}"
        {{-- "agentInteractionStatistic": {
          "@type": "InteractionCounter",
          "interactionType": "https://schema.org/WriteAction",
          "userInteractionCount": 8
        } --}}
      },
{{--       "datePublished": "{{ date('d-m-Y',strtotime($post->created_at)) }}", --}}
  "mainEntity": {
    "@type": "DiscussionForumPosting"    
  },
  "comment": [{
      {{-- @foreach($comments as $comment) --}}
        "@type": "Comment",
        "text": "{!! $comment->comment !!}",
        "author": {
          "@type": "Person",
          "name": "{{$comment->username}}",
          "url": "https://foroworkers.com/members/{{$comment->username}}/{{$comment->userid}}"
          {{-- "agentInteractionStatistic": {
            "@type": "InteractionCounter",
            "interactionType": "https://schema.org/WriteAction",
            "userInteractionCount": 167
          } --}}
        },
        "datePublished": "{{ date('d-m-Y',strtotime($comment->created_at)) }}"
      {{--    @endforeach   --}}     
      }]
   
    }
    </script>

{{-- fase 1 --}}
    <script type="application/ld+json">
    {
"@context": "https://schema.org",
  "@type": "DiscussionForumPosting",
  "headline": "{{ $post->post_name }}",
"author": {
"@type": "Person",
"name": "{{$post->username}}",
"url": "https://foroworkers.com/members/{{$post->username}}/{{$post->userid}}"
},
"datePublished": "{{ $post->created_at }}",
"sharedContent": "{!! $post->post_content !!}",
"url": "https://foroworkers.com/comunidad/{{$post->url_name}}/{{$post->maincategory_id}}/{{$post->postid}}"
}
    </script>

{{-- fase 2 --}}

 <script type="application/ld+json">
    {
"@context": "https://schema.org",
  "@type": "DiscussionForumPosting",
  "headline": "{{ $post->post_name }}",
"author": {
"@type": "Person",
"name": "{{$post->username}}",
"url": "https://foroworkers.com/members/{{$post->username}}/{{$post->userid}}"
},
"datePublished": "{{ $post->created_at }}",
"sharedContent": "{!! $post->post_content !!}",
"url": "https://foroworkers.com/comunidad/{{$post->url_name}}/{{$post->maincategory_id}}/{{$post->postid}}"
},
"interactionStatistic": {
    "@type": "InteractionCounter",
    "interactionType": "https://schema.org/ReplyAction",
    "userInteractionCount": "{{$sumpostcomment}}"
  }
    </script>

{{-- ejempo forocoches --}}
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"DiscussionForumPosting",
  "@id":"https://forocoches.com/foro/showthread.php?t=1361420",
  "articleSection": "General",
  "headline": "Cu\u00c3\u00a1l crees que es LA PEOR temporada de LOST? (SIN SPOILERS)",
  "datePublished":"2009-06-24T01:15:15+00:00",
  "dateModified":"2009-08-07T15:44:33+00:00",
  "image": "/image/top_c2_fcs_hd4s.png",
  "author": {
    "@type": "Person",
    "name": "Schei\u00c3\u009fe"
  },
"publisher": {
    "@type": "Organization",
    "name": "ForoCoches",
    "logo": {
        "@type": "ImageObject",
        "url": "/image/top_c2_fcs_hd4s.png"
    }
},
"mainEntityOfPage": {
    "@type": "DiscussionForumPosting",
    "@id": "https://forocoches.com/foro/showthread.php?t=1361420"
},
  "interactionStatistic": {
    "@type": "InteractionCounter",
    "interactionType": "https://schema.org/ReplyAction",
    "userInteractionCount": "97"
  }
}
</script>

{{-- ehemplo --}}
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "QAPage",
  "mainEntity": {
    "@type": "Question",
    "name": "¿Qué diferencia hay entre haya o haiga?",
    "text": "¿Cuál palabra es la correcta y recomendada por la RAE?",
    "answerCount": 59,
    "dateCreated": "2018-11-28T20:44Z",
    "author": {
      "@type": "Person",
      "name": "David Riascos"
    },
    "suggestedAnswer": [
      {
        "@type": "Answer",
        "text": "No existen diferencias, sencillamente haya es lo correcto.",
        "dateCreated": "2018-11-29T08:43Z",
        "author": {
          "@type": "Person",
          "name": "Pedro Alfaro"
        }
      },
      {
        "@type": "Answer",
        "text": "Haya es la primera/tercera persona del subjuntivo del verbo haber; cuando haya hecho los deberes podré salir.\nHaiga no existe ni está admitido por la RAE, por más que aún escuches a algunas personas usarlo erróneamente.",
        "dateCreated": "2018-11-29T09:06Z",
        "author": {
          "@type": "Person",
          "name": "Manuela Ponce Martínez"
        }
      },
      {
        "@type": "Answer",
        "text": "Hola David, de acuerdo con la Real Academia de la Lengua, la palabra \"haya\" efectivamente corresponde a la conjugación del verbo \"haber\" tanto en primera (yo) como tercera (él/ella) persona del singular, expresadas en modo subjuntivo. \"Haiga\" por otra parte, es una acepción de la forma verbal anteriormente mencionada, tratada en muchas partes de América Latina, debido a mecanismos de conjugación verbal similares (ejemplo, caer -> caiga); y a la par tiene relación con una manifestación barroca española que refiere a \"coche grande y ostentoso\".\nLo mejor que puedes hacer para referirte a la conjugación de dicho verbo es hacer uso de la forma \"HAYA\". \nSaludos :) ",
        "dateCreated": "2018-11-29T11:37Z",
        "author": {
          "@type": "Person",
          "name": "Diego Fernando Ovalle Aldana"
        }
      },

    @endif

    

    



    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "QAPage",
      "mainEntity": {
        "@type": "Question",
        "name": "{{ $post->post_name }}",
        "text": "{!! $post->post_content !!}",
        "answerCount": 3,
        "upvoteCount": 26,
        "datePublished": "{{$post->created_at}}",
        "author": {
          "@type": "Person",
          "name": "Mary Stone",
          "url": "https://example.com/profiles/mary-stone"
        },
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "1 pound (lb) is equal to 16 ounces (oz).",
          "image": "https://example.com/images/conversion-chart.jpg",
          "upvoteCount": 1337,
          "url": "https://example.com/question1#acceptedAnswer",
          "datePublished": "2024-02-14T16:34-05:00",
          "author": {
            "@type": "Person",
            "name": "Julius Fernandez",
            "url": "https://example.com/profiles/julius-fernandez"
          }
        },
        "suggestedAnswer": [
          {
            "@type": "Answer",
            "text": "Are you looking for ounces or fluid ounces? If you are looking for fluid ounces there are 15.34 fluid ounces in a pound of water.",
            "upvoteCount": 42,
            "url": "https://example.com/question1#suggestedAnswer1",
            "datePublished": "2024-02-14T15:39-05:00",
            "author": {
              "@type": "Person",
              "name": "Kara Weber",
              "url": "https://example.com/profiles/kara-weber"
            },
            "comment": {
              "@type": "Comment",
              "text": "I'm looking for ounces, not fluid ounces.",
              "datePublished": "2024-02-14T15:40-05:00",
              "author": {
                "@type": "Person",
                "name": "Mary Stone",
                "url": "https://example.com/profiles/mary-stone"
              }
            }
          }, {
            "@type": "Answer",
            "text": " I can't remember exactly, but I think 18 ounces in a lb. You might want to double check that.",
            "upvoteCount": 0,
            "url": "https://example.com/question1#suggestedAnswer2",
            "datePublished": "2024-02-14T16:02-05:00",
            "author": {
              "@type": "Person",
              "name": "Joe Cobb",
              "url": "https://example.com/profiles/joe-cobb"
            }
          }
        ]
      }
    }
    </script>