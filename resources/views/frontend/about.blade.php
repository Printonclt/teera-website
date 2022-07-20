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

            <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus iste nemo, fugit
                alias voluptate
                neque error aliquid saepe accusantium corporis aliquam, labore culpa ea quidem aut temporibus
                corrupti, nihil veritatis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus iste nemo,
                fugit alias voluptate
                neque error aliquid saepe accusantium corporis aliquam, labore culpa ea quidem aut temporibus
                corrupti, nihil veritatis!</p>

        </div>

    </div>
 </section>

 <section id="about-vision">
    <div class="container p-5">

        <div class="row align-items-center">

            <div class="col-md-6">
                <div class="vision-img" data-aos="fade-right">
                    <img src="{{ asset('/images/banner/plate.png') }}" alt="" srcset="">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column align-items-end" data-aos="fade-left">

                <img src="{{ asset('/images/icons/vision.png') }}" alt="" srcset="" class="vision-svg">
                <h4>Vision</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus iste nemo, fugit alias voluptate
                    neque error aliquid saepe accusantium corporis aliquam, labore culpa ea quidem aut temporibus
                    corrupti, nihil veritatis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus iste
                    nemo, fugit alias voluptate
                    neque error aliquid saepe accusantium corporis aliquam, labore culpa ea quidem aut temporibus
                    corrupti, nihil veritatis!</p>
            </div>

        </div>

    </div>
</section>
<section id="about-mission">
    <div class="container p-5">

        <div class="row align-items-center justify-content-between">

            <div class="col-md-6" data-aos="fade-left">
                <img src="{{ asset('/images/icons/mission.png') }}" alt="" srcset="" class="mission-svg">
                <h4>MISSION</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus iste nemo, fugit alias voluptate
                    neque error aliquid saepe accusantium corporis aliquam, labore culpa ea quidem aut temporibus
                    corrupti, nihil veritatis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus iste
                    nemo, fugit alias voluptate
                    neque error aliquid saepe accusantium corporis aliquam, labore culpa ea quidem aut temporibus
                    corrupti, nihil veritatis!</p>
            </div>

            <div class="col-md-6">
                <div class="vision-img" data-aos="fade-right">
                    <img src="{{ asset('/images/banner/plate.png') }}" alt="" srcset="">
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