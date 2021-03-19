<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KHYBER PASS</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style-starter.css')}}">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon/180x180.png">
    <link rel="icon" href="img/apple-touch-icon/180x180.png">
  <!-- new heads -->
    <script src="https://js.stripe.com/v3/"></script>
    <link rel="stylesheet" href="{{asset('assets/css/card.css')}}">

  
 
  
  
  
    <style>
   
    </style>
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
                <h1>
                    <a class="navbar-brand" href="index.html">
                        KHYBER PASS
                    </a>
                </h1>

                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mx-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="newmenu">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ContactUs&me">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sign">Login</a>
                        </li>
                    </ul>
                </div>
                <div class="search-right">
                    <a href="./r" title="search">Refer A Friend</a>


                </div>

                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
            </nav>
        </div>
    </header>
    <br><br><br><br><br>
    <section id="home" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 text-center ">
                    <h3 style="font-weight: 600;">CHECKOUT</h3>

                </div>
                <div class="col-md-4 text-center ">
                    <p>Help available 7am-1am EST <span>877-755-9348</span></p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-8">
            

                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 100%; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);">

                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: 700;">ORDER SUMMARY</h5>
                            <div class="mainDiv">
                                <div class="left">
                                    <p>Subtotal</p>
                                </div>
                                <div class="right">
                                    <p>$4.00</p>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="mainDiv">
                                <div class="left">
                                    <p>Shipping (3-5 Business Days)</p>
                                </div>
                                <div class="right">
                                    <p>$7.00</p>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="mainDiv">
                                <div class="left">
                                    <p>My Savings</p>
                                </div>
                                <div class="right">
                                    <p>$2.03</p>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="mainDiv">
                                <div class="left">
                                    <p>Est.Tax</p>
                                </div>
                                <div class="right">
                                    <p>$0.74</p>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <hr>
                            <div class="mainDiv">
                                <div class="left">
                                    <p style="font-size: 20px; font-weight: 700;">Total</p>
                                </div>
                                <div class="right">
                                    <p style="font-size: 20px; font-weight: 700;">$9.71</p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card" style="width: 100%; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);">

                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: 700;">PAYMENT METHOD</h5>
                            <div class="globalContent">
                                <main>
                            
                                <section class="container-lg">
                                  <!--Intro-->
                              
                            
                            
                                  <!--Example 5-->
                                  <div class="cell example example5" id="example-5">
                                    <form>
                                      <div id="example5-paymentRequest">
                                        <!--Stripe paymentRequestButton Element inserted here-->
                                      </div>
                                      <fieldset>
                                        <legend class="payment-request-available" data-tid="elements_examples.form.enter_card_manually">Or enter card details</legend>
                                        <div class="row">
                                          <div class="field">
                                            <label for="example5-name" data-tid="elements_examples.form.name_label">Name</label>
                                            <input id="example5-name" data-tid="elements_examples.form.name_placeholder" class="input" autocomplete="OFF" type="text" placeholder="Jane Doe" required="" >
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="field">
                                            <label for="example5-email" data-tid="elements_examples.form.email_label">Email</label>
                                            <input id="example5-email" data-tid="elements_examples.form.email_placeholder" class="input" autocomplete="OFF" type="text" placeholder="janedoe@gmail.com" required="" >
                                          </div>
                                          <div class="field">
                                            <label for="example5-phone" data-tid="elements_examples.form.phone_label">Phone</label>
                                            <input id="example5-phone" data-tid="elements_examples.form.phone_placeholder" class="input" autocomplete="OFF" type="text" placeholder="(941) 555-0123" required="" >
                                          </div>
                                        </div>
                                        <div data-locale-reversible>
                                          <div class="row">
                                            <div class="field">
                                              <label for="example5-address" data-tid="elements_examples.form.address_label">Address</label>
                                              <input id="example5-address" data-tid="elements_examples.form.address_placeholder" class="input" autocomplete="OFF" type="text" placeholder="185 Berry St" required="" >
                                            </div>
                                          </div>
                                          <div class="row" data-locale-reversible>
                                            <div class="field">
                                              <label for="example5-city" data-tid="elements_examples.form.city_label">City</label>
                                              <input id="example5-city" data-tid="elements_examples.form.city_placeholder" class="input" type="text" autocomplete="OFF" placeholder="San Francisco" required="" >
                                            </div>
                                            <div class="field">
                                              <label for="example5-state" data-tid="elements_examples.form.state_label">State</label>
                                              <input id="example5-state" data-tid="elements_examples.form.state_placeholder" class="input empty" type="text" autocomplete="OFF" placeholder="CA" required="" >
                                            </div>
                                            <div class="field">
                                              <label for="example5-zip" data-tid="elements_examples.form.postal_code_label">ZIP</label>
                                              <input id="example5-zip" data-tid="elements_examples.form.postal_code_placeholder" class="input empty" type="text" autocomplete="OFF" placeholder="94107" required="" >
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="field">
                                            <label for="example5-card" data-tid="elements_examples.form.card_label">Card</label>
                                            <div id="example5-card" class="input"></div>
                                          </div>
                                        </div>
                                        <button type="submit" data-tid="elements_examples.form.pay_button">Pay $25</button>
                                      </fieldset>
                                      <div class="error" role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
                                          <path class="base" fill="#000" d="M8.5,17 C3.80557963,17 0,13.1944204 0,8.5 C0,3.80557963 3.80557963,0 8.5,0 C13.1944204,0 17,3.80557963 17,8.5 C17,13.1944204 13.1944204,17 8.5,17 Z"></path>
                                          <path class="glyph" fill="#FFF" d="M8.5,7.29791847 L6.12604076,4.92395924 C5.79409512,4.59201359 5.25590488,4.59201359 4.92395924,4.92395924 C4.59201359,5.25590488 4.59201359,5.79409512 4.92395924,6.12604076 L7.29791847,8.5 L4.92395924,10.8739592 C4.59201359,11.2059049 4.59201359,11.7440951 4.92395924,12.0760408 C5.25590488,12.4079864 5.79409512,12.4079864 6.12604076,12.0760408 L8.5,9.70208153 L10.8739592,12.0760408 C11.2059049,12.4079864 11.7440951,12.4079864 12.0760408,12.0760408 C12.4079864,11.7440951 12.4079864,11.2059049 12.0760408,10.8739592 L9.70208153,8.5 L12.0760408,6.12604076 C12.4079864,5.79409512 12.4079864,5.25590488 12.0760408,4.92395924 C11.7440951,4.59201359 11.2059049,4.59201359 10.8739592,4.92395924 L8.5,7.29791847 L8.5,7.29791847 Z"></path>
                                        </svg>
                                        <span class="message"></span></div>
                                    </form>
                                    <div class="success">
                                      <div class="icon">
                                        <svg width="84px" height="84px" viewBox="0 0 84 84" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                          <circle class="border" cx="42" cy="42" r="40" stroke-linecap="round" stroke-width="4" stroke="#000" fill="none"></circle>
                                          <path class="checkmark" stroke-linecap="round" stroke-linejoin="round" d="M23.375 42.5488281 36.8840688 56.0578969 64.891932 28.0500338" stroke-width="4" stroke="#000" fill="none"></path>
                                        </svg>
                                      </div>
                                      <h3 class="title" data-tid="elements_examples.success.title">Payment successful</h3>
                                      <p class="message"><span data-tid="elements_examples.success.message">Thanks for trying Stripe Elements. No money was charged, but we generated a token: </span><span class="token">tok_189gMN2eZvKYlo2CwTBv9KKh</span></p>
                                      <a class="reset" href="#">
                                        <svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                          <path fill="#000000" d="M15,7.05492878 C10.5000495,7.55237307 7,11.3674463 7,16 C7,20.9705627 11.0294373,25 16,25 C20.9705627,25 25,20.9705627 25,16 C25,15.3627484 24.4834055,14.8461538 23.8461538,14.8461538 C23.2089022,14.8461538 22.6923077,15.3627484 22.6923077,16 C22.6923077,19.6960595 19.6960595,22.6923077 16,22.6923077 C12.3039405,22.6923077 9.30769231,19.6960595 9.30769231,16 C9.30769231,12.3039405 12.3039405,9.30769231 16,9.30769231 L16,12.0841673 C16,12.1800431 16.0275652,12.2738974 16.0794108,12.354546 C16.2287368,12.5868311 16.5380938,12.6540826 16.7703788,12.5047565 L22.3457501,8.92058924 L22.3457501,8.92058924 C22.4060014,8.88185624 22.4572275,8.83063012 22.4959605,8.7703788 C22.6452866,8.53809377 22.5780351,8.22873685 22.3457501,8.07941076 L22.3457501,8.07941076 L16.7703788,4.49524351 C16.6897301,4.44339794 16.5958758,4.41583275 16.5,4.41583275 C16.2238576,4.41583275 16,4.63969037 16,4.91583275 L16,7 L15,7 L15,7.05492878 Z M16,32 C7.163444,32 0,24.836556 0,16 C0,7.163444 7.163444,0 16,0 C24.836556,0 32,7.163444 32,16 C32,24.836556 24.836556,32 16,32 Z"></path>
                                        </svg>
                                      </a>
                                    </div>
                         
                                  </div>
                                </section>
                                </main>
                              </div>
                        
                        </div>
                    </div>
                    <br>
                    <div style="text-align: center;">
                        <button class="btn"
                            style="background-color: #fec73f; color: #fff; padding: 10px 20px; font-size: 20px; font-weight: 600;width: 100%; ">PLACE
                            ORDER</button>

                    </div>
                    <div>
                        <p style="font-size: 13px;">By Placing this order, you agree to our <span style="color: blue;">Privacy Policy</span> and <span style="color: blue;">Terms and
                                Conditions</span>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>

    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>

    <script src="{{asset('assets/js/theme-change.js')}}"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {

            autoType(".type-js", 200);
        });

    </script>

    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });

    </script>

    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>

    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });

    </script>

    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>


    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Order Now";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }

    </script>
    
  <!-- Simple localization script for Stripe's examples page. -->

  <script src="{{asset('assets/js/card.js')}}"></script>

</body>

</html>

