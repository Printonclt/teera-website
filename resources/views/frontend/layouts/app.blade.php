<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/common/bootstrap/bootstrap.min.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
</head>

<body>

    <header class="p-2">
        <div class="container">

            <div class="header-wrapper">
                <div class="header-logo">
                    <img src="{{ asset('/images/logo/teera.png') }}" alt="">
                </div>
                <div class="header-menu-items">

                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Products</a></li>
                        <li><a href="">Garments</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>


                </div>

                <div class="hamberger" id="hamberger">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
            </div>

        </div>

    </header>

    <div class="mobile-menu">
        <ul class="d-flex flex-column align-items-center pt-3">
            <li class="m-3"><a href="">HOME</a></li>
            <li class="m-3"><a href="">ABOUT</a></li>
            <li class="m-3"><a href="">PRODUCTS</a></li>
            <li class="m-3"><a href="">GARMENTS</a></li>
            <li class="m-3"><a href="">CONTACT US</a></li>
        </ul>
    </div>

    @yield('content')


    <footer class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 foot">
                    <div class="footer-logo">
                        <img src="{{ asset('/images/logo/footerlogo.png') }}" alt="">
                    </div>

                    {{-- <p class="p-2">Teera is an off-spring of super galant general trading LLC. Started as a trading company in the year 2003 and serves the community of UAE ever since, Over time we transformed ourselves in line with market trends and showed great enthusiasm and eagerness to introduce quality products to the Arab world. </p> --}}

                </div>
                <div class="col-md-2 quick-links">
                    <h4>Quick Links</h4>
                    <p><a href="">Home</a></p>
                    <p><a href="">About</a></p>
                    <p><a href="">Products</a></p>
                    <p><a href="">Garments</a></p>
                    <p><a href="">Contact Us</a></p>

                </div>
                <div class="col-md-3">
                    <h4>Address</h4>

                    <p>Lorem Ipsumlorem Ipsum</p>
                    <p>Lorem Ipsumlorem Ipsum</p>
                    <p>Lorem Ipsumlorem Ipsum</p>

                </div>
                <div class="col-md-3 enquiry">

                    <div>

                        <h4>For Enquiry</h4>
                        <p> <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>&nbsp;&nbsp; Lorem ipsum</p>
                        <p><span><i class="fa fa-envelope" aria-hidden="true"></i></span>&nbsp;&nbsp;teera@gmail.com</p>
                        <p><span><i class="fa fa-phone" aria-hidden="true"></i></span>&nbsp;&nbsp;+00000 000 00</p>

                    </div>
                    <div>
                        <h4>Follow Us On</h4>
                        <ul>
                            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-skype"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-google-plus-g"></i></a></li>


                        </ul>


                    </div>
                </div>

            </div>
        </div>
    </footer>

    <script src="{{ asset('css/common/bootstrap/bootstrap.min.css') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('script')
</body>

</html>
