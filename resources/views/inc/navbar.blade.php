<nav class="navbar navbar-expand-md navbar-dark bg-dark">
 <div class="collapse navbar-collapse" id="navbarCollapse">
   <ul class="navbar-nav mr-auto">
     <li class="nav-item">
       <a class="nav-link {{ Request::is('/') ? 'active' : ''}}" href="/">Accueil <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item {{ Request::is('albums') ? 'active' : ''}}">
       <a class="nav-link" href="{{ route('albums') }}">Albums photos</a>
     </li>
     <li class="nav-item {{ Request::is('albums-videos') ? 'active' : ''}}">
       <a class="nav-link" href="{{ route('albums-videos') }}">Albums videos</a>
     </li>
     @if (Route::has('login'))
     <li class="nav-item {{ Request::is('albums/create') ? 'active' : ''}}">
       @auth
       <a class="nav-link" href="{{ route('album-create') }}">Créer un album</a>
       @endauth
     </li>
     @endif
   </ul>
   @if (Route::has('login'))
       <div class="top-right links">
           @auth
               <a href="{{ route('logout') }}">Logout</a>
           @else
               <a href="{{ route('login') }}">Login</a>

               @if (Route::has('register'))
                   <a href="{{ route('register') }}">Register</a>
               @endif
           @endauth
       </div>
   @endif
 </div>
</nav>
