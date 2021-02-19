

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>blog</title>
   </head>
   <body>
     <h1>create post</h1>
     <a href="/">home</a>
     <a href="/about">about</a>
     <a href="/blog">blog</a>






 {{ Form::open(array('url' => 'blog')) }}
 {{Form::label('titolo', 'titolo')}}
 {{Form::text('titolo')}}
 {{Form::label('contenuto', 'contenuto')}}
 {{Form::text('contenuto')}}
 {{Form::submit('Click Me!')}}
 {{ Form::close() }}





   </body>
 </html>
