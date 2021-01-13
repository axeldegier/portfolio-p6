<!DOCTYPE html>
<html>
   <head>
       <title>@yield('title', 'Laravel pagina')</title>
       <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
   </head>
   
   <body>
       @yield('content')
       <ul>
           <li><a href="/">Home</a></li>
           <li><a href="/overons">Over ons</a></li>
           <li><a href="/contact">Contact</a></li>
           <li><a href="/login">login</a></li>
           
       </ul>
   </body>
</html>