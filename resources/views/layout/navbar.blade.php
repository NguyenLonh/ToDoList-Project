
<link rel="stylesheet" href="{{URL('css/navbar.css')}}">

<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Todo Management System </a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
              <li class="nav-item">
                  <a class="nav-link" href="/todos">Todo List <span class="visually-hidden"></span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/todos/create">New Todo <span class="visually-hidden"></span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/persons">Person List<span class="visually-hidden"></span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/persons/create">New Person <span class="visually-hidden"></span></a>
              </li>
          </ul>
          <ul class="navbar-nav ml-auto">
              @if (Auth::check())
                  <li class="nav-item">
                      <a class="nav-link" href="#">{{ Auth::user()->name }} <span class="visually-hidden"></span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/logout">Logout <span class="visually-hidden"></span></a>
                  </li>
              @else
                  <li class="nav-item">
                      <a class="nav-link" href="/login">Login <span class="visually-hidden"></span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/register">Register <span class="visually-hidden"></span></a>
                  </li>
              @endif
          </ul>
      </div>
</div>
</nav>
