@extends('frontend.layouts.app')
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endsection
@section('content')
 <div class="inner-hero">
    <img src="{{asset('images/banner/banner.jpg')}}" alt="" srcset="">
    <div class="inner-hero-content">
        <h2>Contact Us</h2>
    </div>
 </div>

 <section class="has-padding mt-5">
        <div class="container">
            <h2 class="main-heading mt-5 contact-heading">
                Business Enquiries
            </h2>
            <form>
            <div class="row mt-3 small-container">
              
                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for=""></label>
                        <input type="text" class="form-control" name="name" placeholder="First Name *">
                    </div>
                </div>
                <div class="col-md-6 mt-2   ">
                    <div class="form-group">
                        <label for=""></label>
                        <input type="text" class="form-control" name="lname" placeholder="Last Name *">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for=""></label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number *">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for=""></label>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email *">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="How Can we help"></textarea>
                      </div>
                </div>
                <button class="btn primary-button mt-3">Submit</button>
               
            </div>
        </form>
        </div>
 </section>
 <section class="has-padding mt-5">
    <div class="small-container">
        <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125199.87432665714!2d75.85136639999999!3d11.2984064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba65ea4832526ad%3A0xc5e33869a5762c2b!2sIQRAA%20International%20Hospital%20%26%20Research%20Centre!5e0!3m2!1sen!2sin!4v1657901796957!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>
 </section>
@endsection

