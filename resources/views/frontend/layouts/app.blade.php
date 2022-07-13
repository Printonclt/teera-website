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
                <div class="col-md foot">
                    <div class="footer-logo">
                        <img src="{{ asset('/images/logo/footerlogo.png') }}" alt="">
                    </div>

                    <p class="p-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled</p>

                </div>
                <div class="col-md quick-links">
                    <h4>Quick Links</h4>
                    <p><a href="">Home</a></p>
                    <p><a href="">About</a></p>
                    <p><a href="">Products</a></p>
                    <p><a href="">Garments</a></p>
                    <p><a href="">Contact Us</a></p>

                </div>
                <div class="col-md">
                    <h4>Address</h4>

                    <p>Lorem Ipsumlorem Ipsum</p>
                    <p>Lorem Ipsumlorem Ipsum</p>
                    <p>Lorem Ipsumlorem Ipsum</p>

                </div>
                <div class="col-md">
                    <h4>For Enquiry</h4>
                    <p>Lorem ipsum</p>
                    <p>teera@gmail.com</p>
                    <p>+00000 000 00</p>
                </div>

            </div>
        </div>
    </footer>

    <script src="{{ asset('css/common/bootstrap/bootstrap.min.css') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('script')
</body>

</html>
