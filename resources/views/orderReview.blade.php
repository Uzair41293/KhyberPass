<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style-starter.css')}}">



    <script src="https://js.stripe.com/v3/"></script>
    <script src="js/index.js" data-rel-js></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
    <script>
        'use strict';

        var stripe = Stripe('pk_test_6pRNASCoBOKtIshFeQd4XMUh');

        function registerElements(elements, exampleName) {
            var formClass = '.' + exampleName;
            var example = document.querySelector(formClass);

            var form = example.querySelector('form');
            var resetButton = example.querySelector('a.reset');
            var error = form.querySelector('.error');
            var errorMessage = error.querySelector('.message');

            function enableInputs() {
                Array.prototype.forEach.call(
                    form.querySelectorAll(
                        "input[type='text'], input[type='email'], input[type='tel']"
                    ),
                    function (input) {
                        input.removeAttribute('disabled');
                    }
                );
            }

            function disableInputs() {
                Array.prototype.forEach.call(
                    form.querySelectorAll(
                        "input[type='text'], input[type='email'], input[type='tel']"
                    ),
                    function (input) {
                        input.setAttribute('disabled', 'true');
                    }
                );
            }

            function triggerBrowserValidation() {
                // The only way to trigger HTML5 form validation UI is to fake a user submit
                // event.
                var submit = document.createElement('input');
                submit.type = 'submit';
                submit.style.display = 'none';
                form.appendChild(submit);
                submit.click();
                submit.remove();
            }

            // Listen for errors from each Element, and show error messages in the UI.
            var savedErrors = {};
            elements.forEach(function (element, idx) {
                element.on('change', function (event) {
                    if (event.error) {
                        error.classList.add('visible');
                        savedErrors[idx] = event.error.message;
                        errorMessage.innerText = event.error.message;
                    } else {
                        savedErrors[idx] = null;

                        // Loop over the saved errors and find the first one, if any.
                        var nextError = Object.keys(savedErrors)
                            .sort()
                            .reduce(function (maybeFoundError, key) {
                                return maybeFoundError || savedErrors[key];
                            }, null);

                        if (nextError) {
                            // Now that they've fixed the current error, show another one.
                            errorMessage.innerText = nextError;
                        } else {
                            // The user fixed the last error; no more errors.
                            error.classList.remove('visible');
                        }
                    }
                });
            });

            // Listen on the form's 'submit' handler...
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                // Trigger HTML5 validation UI on the form if any of the inputs fail
                // validation.
                var plainInputsValid = true;
                Array.prototype.forEach.call(form.querySelectorAll('input'), function (
                    input
                ) {
                    if (input.checkValidity && !input.checkValidity()) {
                        plainInputsValid = false;
                        return;
                    }
                });
                if (!plainInputsValid) {
                    triggerBrowserValidation();
                    return;
                }

                // Show a loading screen...
                example.classList.add('submitting');

                // Disable all inputs.
                disableInputs();

                // Gather additional customer data we may have collected in our form.
                var name = form.querySelector('#' + exampleName + '-name');
                var address1 = form.querySelector('#' + exampleName + '-address');
                var city = form.querySelector('#' + exampleName + '-city');
                var state = form.querySelector('#' + exampleName + '-state');
                var zip = form.querySelector('#' + exampleName + '-zip');
                var additionalData = {
                    name: name ? name.value : undefined,
                    address_line1: address1 ? address1.value : undefined,
                    address_city: city ? city.value : undefined,
                    address_state: state ? state.value : undefined,
                    address_zip: zip ? zip.value : undefined,
                };

                // Use Stripe.js to create a token. We only need to pass in one Element
                // from the Element group in order to create a token. We can also pass
                // in the additional customer data we collected in our form.
                stripe.createToken(elements[0], additionalData).then(function (result) {
                    // Stop loading!
                    example.classList.remove('submitting');

                    if (result.token) {
                        // If we received a token, show the token ID.
                        example.querySelector('.token').innerText = result.token.id;
                        example.classList.add('submitted');
                    } else {
                        // Otherwise, un-disable inputs.
                        enableInputs();
                    }
                });
            });

            
        }

    </script>

    <!-- new heads -->
    <script src="https://js.stripe.com/v3/"></script>




    <title>Order Review </title>
    <style>
        @media only screen and (max-width: 480px) {
            .navbar .navbar-brand {
                font-size: 19px !important;
                font-weight: 700;
            }
        }

        .example.example2 {
            background-color: #fff;
        }

        .example.example2 * {
            font-family: Source Code Pro, Consolas, Menlo, monospace;
            font-size: 16px;
            font-weight: 500;
        }

        .example.example2 .row {
            display: -ms-flexbox;
            display: flex;
            margin: 0 5px 10px;
        }

        .example.example2 .field {
            position: relative;
            width: 100%;
            height: 50px;
            margin: 0 10px;
        }

        .example.example2 .field.half-width {
            width: 50%;
        }

        .example.example2 .field.quarter-width {
            width: calc(25% - 10px);
        }

        .example.example2 .baseline {
            position: absolute;
            width: 100%;
            height: 1px;
            left: 0;
            bottom: 0;
            background-color: #cfd7df;
            transition: background-color 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .example.example2 label {
            position: absolute;
            width: 100%;
            left: 0;
            bottom: 8px;
            color: #cfd7df;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            transform-origin: 0 50%;
            cursor: text;
            pointer-events: none;
            transition-property: color, transform;
            transition-duration: 0.3s;
            transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .example.example2 .input {
            position: absolute;
            width: 100%;
            left: 0;
            bottom: 0;
            padding-bottom: 7px;
            color: #32325d;
            background-color: transparent;
        }

        .example.example2 .input::-webkit-input-placeholder {
            color: transparent;
            transition: color 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .example.example2 .input::-moz-placeholder {
            color: transparent;
            transition: color 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .example.example2 .input:-ms-input-placeholder {
            color: transparent;
            transition: color 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .example.example2 .input.StripeElement {
            opacity: 0;
            transition: opacity 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
            will-change: opacity;
        }

        .example.example2 .input.focused,
        .example.example2 .input:not(.empty) {
            opacity: 1;
        }

        .example.example2 .input.focused::-webkit-input-placeholder,
        .example.example2 .input:not(.empty)::-webkit-input-placeholder {
            color: #cfd7df;
        }

        .example.example2 .input.focused::-moz-placeholder,
        .example.example2 .input:not(.empty)::-moz-placeholder {
            color: #cfd7df;
        }

        .example.example2 .input.focused:-ms-input-placeholder,
        .example.example2 .input:not(.empty):-ms-input-placeholder {
            color: #cfd7df;
        }

        .example.example2 .input.focused+label,
        .example.example2 .input:not(.empty)+label {
            color: #aab7c4;
            transform: scale(0.85) translateY(-25px);
            cursor: default;
        }

        .example.example2 .input.focused+label {
            color: #24b47e;
        }

        .example.example2 .input.invalid+label {
            color: #ffa27b;
        }

        .example.example2 .input.focused+label+.baseline {
            background-color: #24b47e;
        }

        .example.example2 .input.focused.invalid+label+.baseline {
            background-color: #e25950;
        }

        .example.example2 input,
        .example.example2 button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
            border-style: none;
        }

        .example.example2 input:-webkit-autofill {
            -webkit-text-fill-color: #e39f48;
            transition: background-color 100000000s;
            -webkit-animation: 1ms void-animation-out;
        }

        .example.example2 .StripeElement--webkit-autofill {
            background: transparent !important;
        }

        .example.example2 input,
        .example.example2 button {
            -webkit-animation: 1ms void-animation-out;
        }

        .example.example2 button {
            display: block;
            width: calc(100% - 30px);
            height: 40px;
            margin: 40px 15px 0;
            background-color: #24b47e;
            border-radius: 4px;
            color: #fff;
            text-transform: uppercase;
            font-weight: 600;
            cursor: pointer;
        }

        .example.example2 .error svg {
            margin-top: 0 !important;
        }

        .example.example2 .error svg .base {
            fill: #e25950;
        }

        .example.example2 .error svg .glyph {
            fill: #fff;
        }

        .example.example2 .error .message {
            color: #e25950;
        }

        .example.example2 .success .icon .border {
            stroke: #abe9d2;
        }

        .example.example2 .success .icon .checkmark {
            stroke: #24b47e;
        }

        .example.example2 .success .title {
            color: #32325d;
            font-size: 16px !important;
        }

        .example.example2 .success .message {
            color: #8898aa;
            font-size: 13px !important;
        }

        .example.example2 .success .reset path {
            fill: #24b47e;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
        }

        header {
            background-color: #aaaaaa;
            padding: 20px 0px !important;
        }

        .breadcrumb {
            background-color: none !important;
            background: none !important;
            padding: 0;
            margin: 0;
        }

        header {
            background-color: transparent;
            padding: 0px;
            transition: all 0.4s ease 0s;
            height: auto !important;
            display: grid;
            align-items: center;
            padding: 0px !important;
            /* box-shadow: 0 3px 9px rgb(0 0 0 / 5%); */
        }

        .navbar .navbar-brand {
            margin: 0;
            padding: 0;
            font-size: 22px !important;
            color: var(--heading-color);
        }

        a {
            text-decoration: none !important;
        }

        .cardButtons a {
            display: block;
        }

        .cardPricing span {
            display: block;
        }

        .cardPricing {
            margin-left: 15px;
        }

        .card {
            padding: 10px;
        }

        .myCard {
            display: flex;
            justify-content: safe;



        }

        .totalHead span {
            display: block;

        }

        .mainPrice {
            font-size: 50px;
        }

        .totalField {
            font-size: 20px;
        }

        .mainCyber {
            font-weight: 700;
            font-size: 25px;

        }

        .ownCardsClass .card {
            margin: 10px 0px;
        }

        .times {
            font-size: 20px;

        }

        .applied {
            line-height: 25px;
        }

        .breadcrumb-item {
            color: #ffffff !important;
        }

        .cardContent {
            flex-grow: 4;
        }

        .cardImg {
            flex-grow: 1;
            /* display: none; */

        }

        .cardButtons {
            flex-grow: 7;


        }

        .cardPricing {
            flex-grow: 5;
        }

        .itemPrice {
            font-weight: 600;
            color: red;
        }

        .checkOut button {
            padding: 20px;
            background-color: rgb(255, 174, 0);

            font-size: 25px;
            color: #ffffff;
        }

        .checkOut button:hover {

            color: #ffffff;

        }




        @media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {
            .cardContent h6 {
                font-size: 12px !important;
            }

            .cardContent p {
                font-size: 12px !important;
            }

            .later {
                display: none;
            }

            .wishList {

                display: none;
            }



        }

        .coupon label {
            width: 140px;
        }

        .cyberWeek h6 {
            font-size: 20px;
        }

        .discount {
            font-size: 28px;
            font-family: 'Nerko One', cursive;
        }

        .referme button {
            /* font-family: 'Nerko One', cursive; */
            font-size: 20px;
        }

        ul {
            list-style: none;
        }

        ul li {
            display: inline-block;
        }

        ul li:nth-child(2) {
            float: right;
        }

        .page-item input {
            width: 50px !important;
            text-align: center;
        }

        .cardContent h6 {
            padding-left: 10px;

        }

        .cardContent p {
            width: 320px;
            padding-left: 10px;
        }

        .itemPrice {
            margin-top: 49px !important;
        }

        .cardButtons {
            margin-top: 40px !important;
        }

        .cardMainPrice {
        
display:flex;
        }
        .cardMainPrice input{
padding: 0px !important;
height: 37px;
margin: 2px 3px;
        }
        body{
            background-color: #f1f1f1;
        }
  


        .cardPricing h1 {
            margin-top: 0px;
            color: red;
        }

       
        body {
            background-color: #333;
        }

        /* .card {
            background: rgb(0, 0, 0);
            background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 81%);
            -webkit-box-shadow: 10px 10px 14px -5px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 14px -5px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 14px -5px rgba(0, 0, 0, 0.75);
            margin: 20px 0px;
        }

        .card:hover {
            transition: .5s;
            -webkit-box-shadow: 10px 10px 42px -5px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 42px -5px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 42px -5px rgba(0, 0, 0, 0.75);
        } */

        .cardContent h6 {
            color: #EA2027;
            font-weight: 700;
            font-size: 16px;
        }

        .cardContent p {
            color: rgb(255, 174, 0);
            font-size: 16px;
        }

        .itemPrice {
            color: rgb(255, 174, 0);
        }
        .goFlex{
            display:flex;
        }

        .cardMainPrice span {
            color: #EA2027;
        }

        .cardPricing span {
            color: #EA2027;

        }

        body {
            background-color: #fff;
        }

        #OrderContainer {

            height: auto;
            overflow: auto;
        }

        #CloseMe:hover {
            cursor: pointer;
        }

        .cardContent h6 input {
            display: none;
        }

        .hidemeplz {
            display: none;
        }

        .btn-pay {
            background-color: #0abf53 !important;
            color: #fff !important;
        }

        .left {
            float: left;
        }

        .right {
            float: right;
        }

        .mainDiv-1 {
            display: flex;
            justify-content: space-between;
        }

        #sticky {
            position: sticky;
            top: 100px;
        }
        .card-body{
            padding: 9px!important;
        }

        @media only screen and (max-width: 600px) {

            .courseSection img,
            .courseSection p {
                display: none;
            }

            .myBr {
                display: none;
            }
            .ownCardsClass{
    height: 300px !important;
    overflow: auto;
}
        }

        body {
            padding-bottom: 20px;
            
        }

    </style>
</head>

<body style="background-color: #f9f9f9 !important; height: 100%;" onload="getOrderdMenu()">

    @include('orderreviewhtml')










    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="assets/js/all.js"></script>
    <script>
        function showdata(ele) {
           //alert("fadf");
           // document.getElementsByClassName("cardImg").style.display = "none";

            //calculateBill();

        }
        function UseCoins(){


            AC= document.getElementById("CoinsAvailable").innerText;
            
           CTU=   document.getElementById("CoinsToBeUsed").value;
          if(Number(CTU)<=Number(AC)){

          var conversionRate=getCoinsConversionRateOfThisCustomer(1);
          actusalDiscount=parseFloat(CTU)/parseFloat(conversionRate);
          
          document.getElementById("coinsDiscounts").innerText=actusalDiscount;

          }else{

              alert("You have "+AC+" Coins only");
          }


          calculateBill();


            
        }
        function getCoinsConversionRateOfThisCustomer(id){


            return 100;
        }
        function productWiseTotal(ele){
           var card= ele.parentNode;
           var t=card.getElementsByTagName("input")[1].value*ele.value;
           card.getElementsByTagName("input")[3].value=t;
           calculateBill();

        }
        function calculateBill(){


            var list = document.getElementsByClassName("cardMainPrice");
           // alert(list);
            var tot =0;
           
            for (i = 0; i < list.length; i++) {
               
                var ptotal = list[i].getElementsByTagName("input")[3].value;
               tot=tot+parseFloat(ptotal);
                

            }
           // alert(tot);
            document.getElementById("billTotal").innerText=tot;
            discountAfterCoins=parseFloat(document.getElementById("coinsDiscounts").innerText)
            
            netTotal=tot -discountAfterCoins;
            
            document.getElementById("netTotal").innerText= netTotal;
        }
        

    </script>
  



    <script>
        function placeOrder() {

            var list = document.getElementsByClassName("cardMainPrice");
            var OrderInDetails = [];
            var saledetail = [];
            for (i = 0; i < list.length; i++) {
                var pprice = list[i].getElementsByTagName("input")[1].value;
                var pid = list[i].getElementsByTagName("input")[0].value;
                var pquantity = list[i].getElementsByTagName("input")[2].value;
                var ptotal = list[i].getElementsByTagName("input")[3].value;

                saledetail = [pid,pprice, pquantity, ptotal];
                OrderInDetails.push(saledetail);
                saledetail = [];

            }
      
            var discount = document.getElementById("coinsDiscounts").innerHTML;
            
            var coinsUsed = document.getElementById("CoinsToBeUsed").value;
            // alert(OrderInDetails);
            var netTotal = document.getElementById("netTotal").innerHTML;
            // alert("It is working   " + salestotal);

            var customerName = document.getElementById("customerName").innerText;
            var CID = document.getElementById("CustomerID").innerText;
            //alert("It is working   " + customerName);

            var customeradd = document.getElementById("cusadd").value;
            // alert("It is working   " + customeradd);

            var customercon = document.getElementById("cuscontact").value;
            // alert("It is working   " + customercon);

            var deliverTo = document.getElementById("deleverToName").value;
            

            var salesflowinfo = [discount, coinsUsed, netTotal, customerName, customeradd, customercon,
            deliverTo, OrderInDetails,CID
            ];


            var xhttp = new XMLHttpRequest();


            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    //alert(this.responseText);
                    location.href = "./ot";


                }

            };
            var EC = JSON.stringify(salesflowinfo);
            alert(EC);
            xhttp.open("GET", "./AddInSales/" + EC, true);
            xhttp.send();


        };

        function insertInDetailsSaleInvoice() {

            var list = document.getElementsByClassName("card");
            for (i = 0; i < list.length; i++) {
                var PID = list[i].getElementsByTagName("input")[1].value;
                 alert(PID);
            }





        };


        function getOrderdMenu() {

            var xhttp = new XMLHttpRequest();

            //var num = document.getElementById("cusname").value;
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("OrderContainer").innerHTML = this.responseText;
                    calculateBill();
                }

            };

            xhttp.open("GET", "./rev/", true);
            xhttp.send();

        }

    </script>
    <script>
        function removeCard(ele) {

            var myCard = ele.parentNode.parentNode.parentNode;
            $(myCard).remove();


        }

    </script>

    <button onclick="topFunction()" id="movetop" title="Go to top">
        &#8593;
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

    <script>
        (function () {
            'use strict';

            var elements = stripe.elements({
                fonts: [{
                    cssSrc: 'https://fonts.googleapis.com/css?family=Source+Code+Pro',
                }, ],
                // Stripe's examples are localized to specific languages, but if
                // you wish to have Elements automatically detect your user's locale,
                // use `locale: 'auto'` instead.
                locale: window.__exampleLocale
            });

            // Floating labels
            var inputs = document.querySelectorAll('.cell.example.example2 .input');
            Array.prototype.forEach.call(inputs, function (input) {
                input.addEventListener('focus', function () {
                    input.classList.add('focused');
                });
                input.addEventListener('blur', function () {
                    input.classList.remove('focused');
                });
                input.addEventListener('keyup', function () {
                    if (input.value.length === 0) {
                        input.classList.add('empty');
                    } else {
                        input.classList.remove('empty');
                    }
                });
            });

            var elementStyles = {
                base: {
                    color: '#32325D',
                    fontWeight: 500,
                    fontFamily: 'Source Code Pro, Consolas, Menlo, monospace',
                    fontSize: '16px',
                    fontSmoothing: 'antialiased',

                    '::placeholder': {
                        color: '#CFD7DF',
                    },
                    ':-webkit-autofill': {
                        color: '#e39f48',
                    },
                },
                invalid: {
                    color: '#E25950',

                    '::placeholder': {
                        color: '#FFCCA5',
                    },
                },
            };

            var elementClasses = {
                focus: 'focused',
                empty: 'empty',
                invalid: 'invalid',
            };

            var cardNumber = elements.create('cardNumber', {
                style: elementStyles,
                classes: elementClasses,
            });
            cardNumber.mount('#example2-card-number');

            var cardExpiry = elements.create('cardExpiry', {
                style: elementStyles,
                classes: elementClasses,
            });
            cardExpiry.mount('#example2-card-expiry');

            var cardCvc = elements.create('cardCvc', {
                style: elementStyles,
                classes: elementClasses,
            });
            cardCvc.mount('#example2-card-cvc');

            registerElements([cardNumber, cardExpiry, cardCvc], 'example2');
        })();

    </script>
    <!-- Simple localization script for Stripe's examples page. -->
    <script src="js/l10n.js" data-rel-js></script>


</body>

</html>
