@extends('layouts.master')

@section('content')

<div class="about_section layout_padding" style="margin-bottom:10%">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1 class="about_taital">About Us <span class="border_0"></span></h1>
               <p class="about_text">It is a long established fact that a reader will be distracted by the readable content of a page when</p>
            </div>
         </div>
         <div class="about_section_2">
            <div class="row">
               <div class="col-md-6">
                  <div class="blog_img"><img src="{{ asset('images/left-col.jpg') }}"></div>
               </div>
               <div class="col-md-6">
                  <div class="blog_taital_main">
                     <h1 class="blog_taital">Guided valet services and management</h1>
                     <p class="blog_text">As a premier parking and hospitality services provider, our commitment extends beyond excellence to becoming a true authority in aviation auxiliary services. We are dedicated to elevating the standards of customer experience and providing a comprehensive suite of capabilities that go beyond the ordinary.</p>
                     <div class="readmore_bt_1"><a href="#">Read More</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
 </div>


@endsection

