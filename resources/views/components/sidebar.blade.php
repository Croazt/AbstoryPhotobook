<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="/dashboard">Abstory</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="#">A</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Menu</li>
      <li class="nav-item dropdown">
        <a href="http://127.0.0.1:8000/dashboard" class="nav-link"><i class="fas fa-square"></i><span>Dashboard</span></a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i><span>Produk</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('getProdukAdmin')}}">Daftar Produk</a></li>
          @if(auth()->user()->role == 'Admin')
          <li><a class="nav-link" href="{{route('addProdukAdmin')}}">Tambah Produk</a></li>
          @endif
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Customer</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="http://127.0.0.1:8000/customer">Daftar Customer</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Pesanan</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="http://127.0.0.1:8000/order">Daftar Pesanan</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Admin</span></a>
        <ul class="dropdown-menu">
          @if(auth()->user()->role == 'Admin')
          <li><a class="nav-link" href="{{route('profileAdmin')}}">Profil Admin</a></li>
          @endif
          <li><a class="nav-link" href="http://127.0.0.1:8000/admin">Daftar Admin</a></li>
          @if(auth()->user()->role == 'Bos')
          <li><a class="nav-link" href="http://127.0.0.1:8000/admin/add">Tambah Admin</a></li>
          @endif
        </ul>
      </li>

      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="http://127.0.0.1:8000/logout" class="btn btn-dark btn-lg btn-block btn-icon-split">
          Logout
        </a>
      </div>
  </aside>
</div>