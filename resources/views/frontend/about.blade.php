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

            <h4>About</h4>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus iste nemo, fugit
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
                <div class="vision-img">
                    <img src="{{ asset('/images/banner/plate.png') }}" alt="" srcset="">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column align-items-end">
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

            <div class="col-md-6">
                <h4>MISSION</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus iste nemo, fugit alias voluptate
                    neque error aliquid saepe accusantium corporis aliquam, labore culpa ea quidem aut temporibus
                    corrupti, nihil veritatis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus iste
                    nemo, fugit alias voluptate
                    neque error aliquid saepe accusantium corporis aliquam, labore culpa ea quidem aut temporibus
                    corrupti, nihil veritatis!</p>
            </div>

            <div class="col-md-6">
                <div class="vision-img">
                    <img src="{{ asset('/images/banner/plate.png') }}" alt="" srcset="">
                </div>
            </div>
           

        </div>

    </div>
</section>
@endsection