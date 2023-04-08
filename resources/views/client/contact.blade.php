@extends('layouts.app')
@section('content')
<div class="contactus">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-8 offset-md-2">
            <div class="title">
               <h2>Contact Us</h2>

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
                  width="750" height="480" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
            <form class="main_form">
               <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <input class="form-control" placeholder="Name" type="text" name="Name">
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <input class="form-control" placeholder="Email" type="text" name="Email">
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <input class="form-control" placeholder="Phone" type="text" name="Phone">
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <button class="send">Send</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection