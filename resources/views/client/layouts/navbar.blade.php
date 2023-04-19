<div class="container-fluid">

    <div class="row">
        <div class="col-lg-3 logo_section">
            <div class="full">
                <div class="center-desk">
                    <div class="logo">
                        <a href="/"><img src="{{asset('asset/images/logo.png')}}" alt="#"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="right_header_info">
                <ul>
                    <li>
                        <a href="{{route('login')}}">
                            <img style="margin-right: 15px;" src="{{asset('asset/images/icon/1.png')}}" alt="#" />
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#">
                            <img style="margin-right: 15px;" src="{{asset('asset/images/icon/2.png')}}" alt="#" />
                        </a>
                    </li> --}}
                    <li>
                        <a href="{{route('cart')}}">
                            <img style="margin-right: 15px;" src="{{asset('asset/images/icon/3.png')}}" alt="#" />
                        </a>
                    </li>

                    <li>
                        <button type="button" id="sidebarCollapse">
                            <img src="{{asset('asset/images/menu_icon.png')}}" alt="#" />
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>