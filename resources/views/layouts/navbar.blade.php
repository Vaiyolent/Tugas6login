<nav class="navbar navbar-expand-lg shadow" data-bs-theme="dark" style="background-color: #539165">
    <div class="container">
      <a class="navbar-brand" href="#">Tugas 6</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('product')?'active':'' }}" href="{{ url('/product') }}">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('category')?'active':'' }}" href="{{ url('/category') }}">Categories</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('logout') }}">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav>
