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
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/adminpage.css') }}" rel="stylesheet">
</head>
<body>
  <div class="s-layout">
    <!-- Sidebar -->
    @auth
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
            @auth
            
            @endauth
            <li>
               <a class="s-sidebar__nav-link btn btn-outline text-light" href="#0">
                  <i class="fa fa-camera"></i><em>Camera</em>
               </a>
            </li>

            <li class="dropdown">
               
                  <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     <i class="fa fa-user mx-2"></i><em class="mx-2">Profile</em> 
                  </a> 
               
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <li>
                  <li>
                     <form class="dropdown-item" method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <input class="btn btn-warning" type="submit" value="Logout">
                     </form>
                  </li>
                 </li>
                 <li><a class="dropdown-item" href="#">Another action</a></li>
                 <li><hr class="dropdown-divider"></li>
                 <li><a class="dropdown-item" href="#">Something else here</a></li>
               </ul>
             </li>
     
         </ul>
      </nav>
    </div>
    @endauth
   
    
    <!-- Content -->
    <main class="s-layout__content">
      @yield('content')
    </main>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
