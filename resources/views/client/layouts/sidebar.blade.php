<!-- Sidebar  -->
<nav id="sidebar">

    <div id="dismiss">
        <i class="fa fa-arrow-left"></i>
    </div>

    <ul class="list-unstyled components">

        <li class="active"> <a href="/">Trang chủ</a></li>
        <li> <a href="{{route('shop')}}">Cửa hàng</a></li>
        <li> <a href="{{route('about')}}">Giới thiệu</a></li>
        <li> <a href="{{route('contact')}}">Liên hệ</a></li>
        @if(auth()->check())
        <li> <a href="{{route('logout')}}">Đăng xuất</a></li>
        @endif

    </ul>

</nav>
</div>