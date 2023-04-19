@extends('layouts.app')
@section('content')
<div class="contactus">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="title">
                    <h2>Giới thiệu</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="aboutimg">
                    <h3 style="padding-top:0;">Về chúng tôi</h3>
                    <p>Là những Kiến Trúc Sư, Họa Sỹ Thiết Kế tốt nghiệp từ trường Đại Học Kiến Trúc, Đại Học Mỹ Thuật
                        Công Nghiệp Hà Nội chúng tôi luôn khao khát được kiến tạo ra những công trình với cấu trúc mới
                        lạ – đẹp mắt, nhằm đáp ứng tối đa nhu cầu công năng sử dụng và nhu cầu thưởng thức thẩm mỹ giữa
                        người sử dụng với công trình kiến trúc. Chúng tôi xây dựng nên hệ thống nhân sự hoạt động hiệu
                        quả và tâm huyết với nghề để thực hiện lý tưởng mang lại chất lượng và hệu quả thật tốt cho công
                        trình nhà ở phục vụ cộng đồng.</p>
                    <a href="#">Đọc thêm</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="aboutimg">
                    <figure><img src="{{asset('asset/images/about.jpg')}}" /></figure>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection