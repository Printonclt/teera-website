@extends('frontend.layouts.app')
@section('content')
<div class="inner-hero">
    <img src="{{asset('images/banner/banner.jpg')}}" alt="" srcset="">
    <div class="inner-hero-content">
        <h2>About</h2>
    </div>
 </div>

 <section id="about">
    <div class="container">
        <div class="about-content">

            <h4 data-aos="fade-up">About</h4>

            <p data-aos="fade-up">Teera is an off-spring of super galant general trading LLC. Started as a trading company in the year 2003 and serves the community of UAE ever since, Over time we transformed ourselves in line with market trends and showed great enthusiasm and eagerness to introduce quality products to the Arab world. <br>

                
         Teera came into existence intending to provide a replacement for plastic and provide eco-friendly alternatives. Our mission is to provide products that are safe for the environment and helps in creating a better tomorrow. Teera makes a range of straws, spoons, forks, knives and utensils made from natural wheat and rice bran.</p>

        </div>

    </div>
 </section>

 <section id="about-vision">
    <div class="container p-5">

        <div class="row align-items-center">

            <div class="col-md-6">
                <div class="vision-img" data-aos="fade-right">
                    <img src="{{ asset('/images/banner/vision.png') }}" alt="" srcset="">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column align-items-end" data-aos="fade-left">

                <img src="{{ asset('/images/icons/vision.png') }}" alt="" srcset="" class="vision-svg">
                <h4>Vision</h4>
                <p> Teera have been designed with one goal – reducing global plastic waste. It can be used across a broad spectrum of industries and venues, including F&B outlets, the hospitality industry such as at events, sporting venues, coffee shop, and even your home! Wherever you have food, your decision to use teera products will be a step forward in our effort to save Mother Nature! Together we can make that difference. Make the switch without affecting your experience!</p>
            </div>

        </div>

    </div>
</section>
<section id="about-mission">
    <div class="container p-5">

        <div class="row align-items-center justify-content-between">

            <div class="col-md-6" data-aos="fade-left">
                <img src="{{ asset('/images/icons/vision.png') }}" alt="" srcset="" class="mission-svg">
                <h4>MISSION</h4>
                <p>Teera came into existence intending to provide a replacement for plastic and provide eco-friendly alternatives. Our mission is to provide products that are safe for the environment and helps in creating a better tomorrow. Teera makes a range of straws, spoons, forks, knives and utensils made from natural wheat and rice bran.</p>
            </div>

            <div class="col-md-6">
                <div class="vision-img" data-aos="fade-right">
                    <img src="{{ asset('/images/banner/mision.png') }}" alt="" srcset="">
                </div>
            </div>
           

        </div>

    </div>
</section>

<section id="icons">
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col">
            <img src="{{ asset('/images/icons/1.png') }}" alt="" data-aos="fade-up">
        </div>
        <div class="col">
            <img src="{{ asset('/images/icons/2.png') }}" alt="" data-aos="fade-up">
        </div>
        <div class="col">
            <img src="{{ asset('/images/icons/3.png') }}" alt="" data-aos="fade-up">
        </div>
        <div class="col">
            <img src="{{ asset('/images/icons/4.png') }}" alt="" data-aos="fade-up">
        </div>
        <div class="col">
            <img src="{{ asset('/images/icons/5.png') }}" alt="" data-aos="fade-up">
        </div>
        <div class="col">
            <img src="{{ asset('/images/icons/6.png') }}" alt="" data-aos="fade-up">
        </div>
        <div class="col">
            <img src="{{ asset('/images/icons/7.png') }}" alt="" data-aos="fade-up">
        </div>
        <div class="col">
            <img src="{{ asset('/images/icons/8.png') }}" alt="" data-aos="fade-up">
        </div>
        <div class="col">
            <img src="{{ asset('/images/icons/9.png') }}" alt="" data-aos="fade-up">
        </div>
        <div class="col">
            <img src="{{ asset('/images/icons/10.png') }}" alt="" data-aos="fade-up">
        </div>
        <div class="col">
            <img src="{{ asset('/images/icons/11.png') }}" alt="" data-aos="fade-up">
        </div>
        <div class="col">
            <img src="{{ asset('/images/icons/12.png') }}" alt="" data-aos="fade-up">
        </div>
        <div class="col">
            <img src="{{ asset('/images/icons/13.png') }}" alt="" data-aos="fade-up">
        </div>
    
    </div>
</div>
    
</section>
@endsection