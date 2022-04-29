<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="https://kit.fontawesome.com/c83b429d08.js" crossorigin="anonymous"></script>
    {{-- <script src="js/adminpage.js"></script> --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/adminpage.css') }}" rel="stylesheet">
</head>
<body>
  <div class="s-layout">
    <!-- Sidebar -->
    <div class="s-layout__sidebar">
      <a class="s-sidebar__trigger" href="#0">
         <i class="fa fa-bars"></i>
      </a>
    
      <nav class="s-sidebar__nav">
         <ul>
            <li>
               <a class="s-sidebar__nav-link" href="#0">
                  <i class="fa fa-home"></i><em>Home</em>
               </a>
            </li>
            <li>
               <a class="s-sidebar__nav-link" href="#0">
                 <i class="fa fa-user"></i><em>My Profile</em>
               </a>
            </li>
            <li>
               <a class="s-sidebar__nav-link" href="#0">
                  <i class="fa fa-camera"></i><em>Camera</em>
               </a>
            </li>
         </ul>
      </nav>
    </div>
    
    <!-- Content -->
    <main class="s-layout__content">
      <h1>Full View, Please!</h1>
    </main>
    </div>
</body>
</html>
