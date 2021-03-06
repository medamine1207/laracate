<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <a class="navbar-brand mr-auto mr-lg-0" href="#">{{config('app.name')}}</a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{set_active_route('root_path')}}">
          <a class="nav-link" href="{{ route('root_path') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{set_active_route('about_path')}}">
          <a class="nav-link" href="{{ route('about_path') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Artisans</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Laravel.com</a>
            <a class="dropdown-item" href="#">Laravel.io</a>
            <a class="dropdown-item" href="#">Laracasts</a>
            <a class="dropdown-item" href="#">Larajobs</a>
            <a class="dropdown-item" href="#">Lara News</a>
            <a class="dropdown-item" href="#">Larachat</a>
          </div>
        </li>
        <li class="nav-item {{set_active_route('contact_path')}}">
          <a class="nav-link " href="{{route('contact_path')}}">Contact</a>
        </li>
      </ul>
       <ul class="navbar-nav navbar-right">
          <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
       </ul>
      
    </div>
</nav>