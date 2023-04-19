@extends('layouts.app')
@section('content')
<div class="contactus">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-8 offset-md-2">
            <div class="title">
               <h2>Liên hệ chúng tôi</h2>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- map -->
<div class="contact">
   <div class="container-fluid padddd">

      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
            <div class="map_section">
               {{-- <div id="map">
               </div> --}}
               <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15673.793524467084!2d106.61907337500924!3d10.853461153649729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528dfcf546de7%3A0xf872809fb8deded!2zVHLGsMahzIBuZyBDYW8gxJDEg8yJbmcgRlBUIFBvbHl0ZWNobmljIEjhu5MgQ2jDrSBNaW5o!5e0!3m2!1svi!2s!4v1680608180864!5m2!1svi!2s"
                  width="780" height="480" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
            <form action="{{route('store-contact')}}" class="main_form" method="POST">
               @csrf
               <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     @error('name')
                     <small class="text-danger">{{$message}}</small>
                     @enderror
                     <input class="form-control" placeholder="Tên của bạn" type="text" name="name">
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     @error('email')
                     <small class="text-danger">{{$message}}</small>
                     @enderror
                     <input class="form-control" placeholder="Email" type="text" name="email">
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     @error('phone')
                     <small class="text-danger">{{$message}}</small>
                     @enderror
                     <input class="form-control" placeholder="Số điện thoại" type="text" name="phone">
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     @error('message')
                     <small class="text-danger">{{$message}}</small>
                     @enderror
                     <textarea class="textarea" placeholder="Nội dung" type="text" name="message"></textarea>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <button type="submit" class="send">Gửi</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection