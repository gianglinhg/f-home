<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
    <div class="sidebar-brand-icon rotate-n-15 d-sm-none">
      <img src="{{asset('asset/images/f-home-favicon-white.svg')}}" alt="#" style=" width: 40px;
      transform: rotate(15deg);">
    </div>
    <div class="sidebar-brand-text mx-3">
      <img src="{{asset('asset/images/logo-white.png')}}" alt="#" style="width:16rem;">
    </div>

  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('product') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Sản phẩm</span></a>
  </li>


  <li class="nav-item">
    <a class="nav-link" href="/category">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Danh Mục</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="admin/orders/index">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Đơn Hàng</span></a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

  <!-- Sidebar Message -->
  <div class="sidebar-card d-none d-lg-flex">
    <img class="sidebar-card-illustration mb-2"
      src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_rocket.svg" alt="...">
    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
  </div>

</ul>