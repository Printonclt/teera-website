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
            <form method="POST" id="submit-form" action="">
            <div class="row mt-3 small-container">
              
                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for=""></label>
                        <input type="text" class="form-control" name="name" placeholder="First Name *" name="first_name">
                    </div>
                </div>
                <div class="col-md-6 mt-2   ">
                    <div class="form-group">
                        <label for=""></label>
                        <input type="text" class="form-control" name="lname" placeholder="Last Name *" name="last_name">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for=""></label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number *" name="mobile">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for=""></label>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email *" name="email">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="How Can we help" name="message"></textarea>
                      </div>
                </div>
                <button class="btn primary-button mt-3 submit-button" type="submit">Submit</button>
               
            </div>
        </form>
        </div>
 </section>
 <section class="has-padding mt-5">
    <div class="small-container">
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.0035505901883!2d55.302527!3d25.270465999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f436110002ee5%3A0x5c1f2f90a553cb3f!2sSuper%20Galant%20General%20Trading%20LLC!5e0!3m2!1sen!2sin!4v1658584965482!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>
 </section>
@endsection

@section('script')

<script>
    $("#submit-form").submit((e)=>{
        e.preventDefault()
        $.ajax({
            url:"https://script.google.com/macros/s/AKfycbz3rvoMU_0GQcPqBoMcFiLlelbqHL1i9JKilyZVzAncRvzM2rShOP7oX6mcEnuUvcx3Zw/exec",
            data:$("#submit-form").serialize(),
            method:"post",
            beforeSend:function(){
                    $('.submit-button').attr('disabled',true);
                    $('.submit-button').html('Loading...');

            },
            success:function (response){
                
                window.location.reload()
                //window.location.href="https://google.com"
            },
            error:function (err){
                alert("Something Error")

            }
        })
    })
</script>
@endsection

