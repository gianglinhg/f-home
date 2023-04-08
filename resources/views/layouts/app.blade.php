<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.layouts.head')
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{asset('asset/images/loading.gif')}}" alt="#" /></div>
    </div>

    <!-- end loader -->
    <div class="wrapper">

        <div class="sidebar">
            <!-- Sidebar  -->
            @include('client.layouts.sidebar')
        </div>

        <div id="content">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="header">
                    @include('client.layouts.navbar')
                </div>

                <!-- end header inner -->
            </header>
            <!-- end header -->
            @yield('content')
            @if(isset($slot)) {{$slot}} @endif
        </div>
    </div>
    @include('client.layouts.footer')
</body>

</html>