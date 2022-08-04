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
                <div class="swiper-slide slide-1">
                    <div class="hero-content">
                        <h2 class="hero-heading white-color">We think for tomorrow,<br><span style="color: #9c8253"> Not
                                today</span></h2>
                        <p>Teera is an off-spring of super galant general trading LLC. Started as a trading company in the
                            year 2003 and serves the community of UAE</p>
                        <div class="btn-wrapper">
                            <a href="/about" class="primary-button">Read More</a>
                        </div>
                    </div>
                    <img src="{{ asset('images/banner/slide02.jpg') }}" alt="" srcset="">
                </div>
                <div class="swiper-slide slide-2">
                    <div class="hero-content">
                        <h2 class="hero-heading white-color">Lorem Ipsum Dolersit Amet</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's</p>
                        <div class="btn-wrapper">
                            <a href="Read More" class="primary-button">Read More</a>
                        </div>
                    </div>
                    <img src="{{ asset('images/banner/slide01.jpg') }}" alt="" srcset="">
                </div>
                <div class="swiper-slide slide-3">
                    <div class="hero-content">
                        <h2 class="hero-heading white-color">Lorem Ipsum Dolersit Amet</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's</p>
                        <div class="btn-wrapper">
                            <a href="Read More" class="primary-button">Read More</a>
                        </div>
                    </div>
                    <img src="{{ asset('images/banner/slide03.jpg') }}" alt="" srcset="">
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
                    <div class="vision-img" data-aos="fade-right">
                        <img src="{{ asset('/images/banner/b1.png') }}" alt="" srcset="">
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column align-items-end" data-aos="fade-left">
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

    <section id="whyus">

        <div class="container">

            <div class="whyus-content">

                <h4 data-aos="fade-up">Why Us</h4>

                <p class="content-width" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Accusamus iste nemo, fugit
                    alias voluptate
                    neque error aliquid saepe accusantium corporis aliquam, labore culpa ea quidem aut temporibus
                    corrupti, nihil veritatis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus iste nemo,
                    fugit alias voluptate
                    neque error aliquid saepe accusantium corporis aliquam, labore culpa ea quidem aut temporibus
                    corrupti, nihil veritatis!</p>

            </div>

            <div class="whyus-icons">

                <div class="row-wrapper">


                    <div class="row">

                        <div class="col-md-4 col-sm-6">

                            <div class="ind-icon" data-aos="fade-up">
                                <img src="{{ asset('/images/icons/increadient.png') }}" alt="">
                                <p>made With natural ingredients</p>
                            </div>

                        </div>
                        <div class="col-md-4 col-sm-6 " data-aos="fade-up">

                            <div class="ind-icon">
                                <img src="{{ asset('/images/icons/blodgredable.png') }}" alt="">
                                <p>blodgredable</p>
                            </div>

                        </div>
                        <div class="col-md-4 col-sm-6" data-aos="fade-up">
                            <div class="ind-icon">
                                <img src="{{ asset('/images/icons/sustainable.png') }}" alt="">
                                <p>sustainable</p>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="ind-icon" data-aos="fade-up">
                                <img src="{{ asset('/images/icons/gluten-free.png') }}" alt="">
                                <p>gluten-free</p>

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="ind-icon" data-aos="fade-up">
                                <img src="{{ asset('/images/icons/vegan.png') }}" alt="">
                                <p>vegan</p>

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="ind-icon" data-aos="fade-up">
                                <img src="{{ asset('/images/icons/zerowaste.png') }}" alt="">
                                <p>zero waste</p>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="ind-icon" data-aos="fade-up">
                                <img src="{{ asset('/images/icons/eco-friendly.png') }}" alt="">
                                <p>eco-friendly</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="ind-icon" data-aos="fade-up">
                                <img src="{{ asset('/images/icons/decomposes.png') }}" alt="">
                                <p>decomposes within 6-90 days</p>

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="ind-icon" data-aos="fade-up">
                                <img src="{{ asset('/images/icons/cruelty-free.png') }}" alt="">
                                <p>cruelty-free</p>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="ind-icon" data-aos="fade-up">
                                <img src="{{ asset('/images/icons/notaste.png') }}" alt="">
                                <p>no taste or smell that onterferes with the drink</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="ind-icon" data-aos="fade-up">
                                <img src="{{ asset('/images/icons/bleed.png') }}" alt="">
                                <p>does not bleed colour in the drink</p>

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="ind-icon" data-aos="fade-up">
                                <img src="{{ asset('/images/icons/zoggy.png') }}" alt="">
                                <p>does not get soggy in the drink</p>

                            </div>
                        </div>



                    </div>

                </div>



            </div>

        </div>

    </section>
    <section id="certificate">


        <div class="container">
            
            <div class="row">
                <h4 data-aos="fade-up">Certified and Approved By</h4>

                <div class="col-md-2 cert-img">
                    <img src="{{ asset('/images/icons/haccp.png') }}" alt="">
                </div>
                <div class="col-md-2 cert-img">
                    <img src="{{ asset('/images/icons/fda.png') }}" alt="">
                </div>
                <div class="col-md-2 cert-img">
                    <img src="{{ asset('/images/icons/HALAL.jpg') }}" alt="">
                </div>
                <div class="col-md-2 cert-img">
                    <img src="{{ asset('/images/icons/kosher.png') }}" alt="">
                </div>
                <div class="col-md-2 cert-img">
                    <img src="{{ asset('/images/icons/fssai.png') }}" alt="">
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
            autoplay: true,
            autoplay: {
                delay: 3000,
            },

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },



        });
    </script>
@endsection
