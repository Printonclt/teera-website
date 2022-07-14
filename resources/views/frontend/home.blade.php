@extends('frontend.layouts.app')
@section('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endsection
@section('content')
    <div class="hero">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="hero-content">
                        <h2 class="hero-heading white-color">Lorem Ipsum Dolersit Amet</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's</p>
                        <div class="btn-wrapper">
                            <a href="Read More" class="primary-button">Read More</a>
                        </div>
                    </div>
                    <img src="{{ asset('images/banner/banner.jpg') }}" alt="" srcset="">
                </div>
                <div class="swiper-slide">
                    <div class="hero-content">
                        <h2 class="hero-heading white-color">Lorem Ipsum Dolersit Amet</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's</p>
                        <div class="btn-wrapper">
                            <a href="Read More" class="primary-button">Read More</a>
                        </div>
                    </div>
                    <img src="{{ asset('images/banner/banner.jpg') }}" alt="" srcset="">
                </div>
                <div class="swiper-slide">
                    <div class="hero-content">
                        <h2 class="hero-heading white-color">Lorem Ipsum Dolersit Amet</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's</p>
                        <div class="btn-wrapper">
                            <a href="Read More" class="primary-button">Read More</a>
                        </div>
                    </div>
                    <img src="{{ asset('images/banner/banner.jpg') }}" alt="" srcset="">
                </div>



            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>


        </div>
    </div>
    <!-- Slider main container -->

    <section id="vision">
        <div class="container p-5">

            <div class="row align-items-center">

                <div class="col-md-6">
                    <div class="vision-img">
                        <img src="{{ asset('/images/banner/b1.png') }}" alt="" srcset="">
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column align-items-end">
                    <h4>Vision</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus iste nemo, fugit alias voluptate
                        neque error aliquid saepe accusantium corporis aliquam, labore culpa ea quidem aut temporibus
                        corrupti, nihil veritatis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus iste nemo, fugit alias voluptate
                        neque error aliquid saepe accusantium corporis aliquam, labore culpa ea quidem aut temporibus
                        corrupti, nihil veritatis!</p>
                </div>

            </div>

        </div>
    </section>
@endsection

@section('script')
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },



        });
    </script>
@endsection
