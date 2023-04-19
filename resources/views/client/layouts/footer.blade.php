<footer>
    <div class="footer" style="padding-top:0 ">
        {{-- <div class="container-fluid">
            <div class="border1">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">

                        <img class="logo1" src="{{asset('asset/images/logo.png')}}" />
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">


                        <ul class="lik">
                            <li> <a href="/">Trang chủ</a></li>
                            <li> <a href="{{route('about')}}">Giới thiệu</a></li>
                            <li> <a href="{{route('shop')}}">Cửa hàng</a></li>
                            <li> <a href="{{route('contact')}}">Liên hệ</a></li>
                            @if(auth()->check())
                            <li> <a href="{{route('logout')}}">Đăng xuất</a></li>
                            @endif
                        </ul>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                        <ul class="sociel">
                            <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>



            </div>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="new">
                        <h3>Nhập mail nhận thông tin</h3>
                        <form class="newtetter">
                            <input class="tetter" placeholder="Email của bạn.." type="text" name="email">
                            <button class="submit">Đăng kí</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="newtt">
                        <p>Chúng tôi sẽ gửi cho bạn những mẫu nhà đẹp hàng tuần và các chương trình khuyến mại. Đăng ký
                            ngay để nhận thông tin sớm nhất !</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="copyright">
            <p>Copyright 2023 All Right Reserved </p>
        </div>
    </div>

</footer>
<!-- end footer -->
</div>

</div>

<div class="overlay"></div>

<!-- Javascript files-->
<script src="{{asset('asset/js/jquery.min.js')}}"></script>
<script src="{{asset('asset/js/popper.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('asset/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('asset/js/plugin.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('asset/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('asset/js/custom.js')}}"></script>
<script src="{{asset('asset/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script type="text/javascript">
    $(document).ready(function() {
$("#sidebar").mCustomScrollbar({
    theme: "minimal"
});

$('#dismiss, .overlay').on('click', function() {
    $('#sidebar').removeClass('active');
    $('.overlay').removeClass('active');
});

$('#sidebarCollapse').on('click', function() {
    $('#sidebar').toggleClass('active');
    $('.overlay').addClass('active');
    $('.collapse.in').toggleClass('in');
    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
});
});
</script>


<script>
    $(document).ready(function() {
$(".fancybox").fancybox({
    openEffect: "none",
    closeEffect: "none"
});

$(".zoom").hover(function() {

    $(this).addClass('transition');
}, function() {

    $(this).removeClass('transition');
});
});
</script>
@stack('scripts')
<livewire:scripts />