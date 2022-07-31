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
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/products">Products</a></li>
                        {{-- <li><a href="">Garments</a></li> --}}
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>


                </div>

                <div class="hamberger" id="hamberger">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
            </div>

        </div>

    </header>

    <div class="mobile-menu">
        <ul >
            <li><a href="/">HOME</a></li>
            <li><a href="/about">ABOUT</a></li>
            <li><a href="/products">PRODUCTS</a></li>
            <li><a href="/contact">CONTACT US</a></li>
        </ul>
    </div>

    @yield('content')


    <footer class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 foot mb-5">
                    <div class="footer-logo">
                        <img src="{{ asset('/images/logo/footerlogo.png') }}" alt="">
                    </div>

                    {{-- <p class="p-2">Teera is an off-spring of super galant general trading LLC. Started as a trading company in the year 2003 and serves the community of UAE ever since, Over time we transformed ourselves in line with market trends and showed great enthusiasm and eagerness to introduce quality products to the Arab world. </p> --}}

                </div>
                <div class="col-md-2 quick-links mb-5">
                    <h4>Quick Links</h4>
                    <p><a href="">Home</a></p>
                    <p><a href="">About</a></p>
                    <p><a href="">Products</a></p>
                    {{-- <p><a href="">Garments</a></p> --}}
                    <p><a href="">Contact Us</a></p>

                </div>
                <div class="col-md-4 mb-5">
                    <h4>Address</h4>

                    <p>Super Galant General Trading LLC</p>
                    <p>M- Floor, Beauty Tex building, Near Sabkha Bus Station, Deira, Dubai - UAE<br>
                    PO Box : 42750, </p>

                </div>
                <div class="col-md-3 enquiry">

                    <div class="mb-5">

                        <h4>For Enquiry</h4>
                        {{-- <p> <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>&nbsp;&nbsp; Lorem ipsum</p> --}}
                        <p><span><i class="fa fa-envelope" aria-hidden="true"></i></span>&nbsp;&nbsp;teera@gmail.com</p>
                        <p><span><i class="fa fa-phone" aria-hidden="true"></i></span>&nbsp;&nbsp;+971 558818237,<br> &nbsp;&nbsp;+971 55 265 5788</p>

                    </div>
                    <div>
                        <h4>Follow Us On</h4>
                        <ul>
                            <li><a href="https://instagram.com/teeraglobal?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/teeraglobal/"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-skype"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-google-plus-g"></i></a></li>


                        </ul>


                    </div>
                </div>

            </div>
        </div>


        <script  type="text/javascript">
            var config = {
              phone :" 971552655788",
              call :"Message Us",
              position :"ww-right",
              size : "ww-normal",
              text : "",
              type: "ww-standard",
              brand: "Teera",
              subtitle: "",
              welcome: "Hi,ThereHow can i help you"
            };
            var proto = 'https:',host = "cloudfront.net", url = proto + "//d3kzab8jj16n2f." + host;
              var s = document.createElement("script"); s.type = "text/javascript"; s.async = true; s.src = url + "/v2/main.js";
          
              s.onload = function () { tmWidgetInit(config) };
              var x = document.getElementsByTagName("script")[0]; x.parentNode.insertBefore(s, x);
          </script>0

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
