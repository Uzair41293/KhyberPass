<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.min.css">

    <title>Order Review </title>
    <style>
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

        .courseSection {
            margin: 20px 0px;
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
            background-color: #f9bd29;
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
            width: 160px;
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
            margin-top: 40px !important;

        }

        .cardPricing h1 {
            margin-top: -20px;
            color: red;
        }

        .cardPricing span {
            margin-top: 10px;
        }
        body{
            background-color: #f9bd29;
        }
        .card{

            -webkit-box-shadow: 10px 10px 23px 0px rgba(209,207,209,1);
-moz-box-shadow: 10px 10px 23px 0px rgba(209,207,209,1);
box-shadow: 10px 10px 23px 0px rgba(209,207,209,1);
        }
    </style>
</head>

<body>

    <section class="courseSection">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ownCardsClass">
                    <div class="card">
                        <div class="myCard">

                            <div class="cardImg">
                                <img src="assets/images/blog3.jpg"
                                    style="height: 70px; width: 70px; border-radius: 10px;" alt="">
                            </div>
                            <div class="cardContent">
                                <h6>Charsi Tikka Lamb <input type="text" value="1" style="width: 50px;" name="" id="">
                                    <input type="text" value="2" style="width: 50px;" name="" id="">
                                </h6>
                                <p>A fine selection of tender lamb chops, sprinkled barbecue grill.</p>
                            </div>

                            <div class="cardMainPrice">
                                <span> £ <strong class="itemPrice">13.99</strong> </span>

                            </div>
                            <div class="cardButtons">
                                <ul class="pagination justify-content-end set_quantity">
                                    <li class="page-item">
                                        <button class="page-link " onclick="decreaseNumber('textbox','itemval')">
                                            <i class="fas fa-minus"></i> </button>
                                    </li>
                                    <li class="page-item"><input type="text" name="" class="page-link" value="0"
                                            id="textbox">
                                    </li>
                                    <li class="page-item">
                                        <button class="page-link" onclick="increaseNumber('textbox','itemval')"> <i
                                                class="fas fa-plus"></i></button>
                                    </li>
                                </ul>

                            </div>
                            <div class="cardPricing">
                                <h1 class="text-right">&times;</h1>

                                <span> £ <strong class="itemPrice">10.99</strong> </span>
                                <!-- <span>£<del>94.99</del></span> -->

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myCard">
                            <div class="cardImg">
                                <img src="assets/images/blog3.jpg"
                                    style="height: 70px; width: 70px; border-radius: 10px;" alt="">
                            </div>
                            <div class="cardContent">
                                <h6>Charsi Lamb Chops</h6><input type="text" value=78 style="display:none" id="ChopsPID">
                                <p>A fine selection of tender lamb chops, sprinkled barbecue grill.</p>
                            </div>
                            <div class="cardMainPrice">
                                <span> £ <strong class="itemPrice">13.99</strong> </span>

                            </div>
                            <div class="cardButtons">
                                <ul class="pagination justify-content-end set_quantity">
                                    <li class="page-item">
                                        <button class="page-link " onclick="decreaseNumber('textbox1','itemval1')">
                                            <i class="fas fa-minus"></i> </button>
                                    </li>
                                    <li class="page-item"><input type="text" name="" class="page-link" value="0"
                                            id="textbox1">
                                    </li>
                                    <li class="page-item">
                                        <button class="page-link" onclick="increaseNumber('textbox1','itemval1')"> <i
                                                class="fas fa-plus"></i></button>
                                    </li>
                                </ul>

                            </div>
                            <div class="cardPricing">
                                <h1 class="text-right">&times;</h1>

                                <span> £ <strong class="itemPrice">10.99</strong> </span>
                                <!-- <span>£<del>94.99</del></span> -->

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myCard">
                            <div class="cardImg">
                                <img src="assets/images/blog3.jpg"
                                    style="height: 70px; width: 70px; border-radius: 10px;" alt="">
                            </div>
                            <div class="cardContent">
                                <h6>Charsi Tikka Chicken</h6><input type="text" value=78 style="display:none" id="tikaPID">
                                <p>A fine selection of tender lamb chops, sprinkled barbecue grill.</p>
                            </div>
                            <div class="cardMainPrice">
                                <span> £ <strong class="itemPrice">13.99</strong> </span>

                            </div>
                            <div class="cardButtons">
                                <ul class="pagination justify-content-end set_quantity">
                                    <li class="page-item">
                                        <button class="page-link " onclick="decreaseNumber('textbox2','itemval2')">
                                            <i class="fas fa-minus"></i> </button>
                                    </li>
                                    <li class="page-item"><input type="text" name="" class="page-link" value="0"
                                            id="textbox2">
                                    </li>
                                    <li class="page-item">
                                        <button class="page-link" onclick="increaseNumber('textbox2','itemval2')"> <i
                                                class="fas fa-plus"></i></button>
                                    </li>
                                </ul>

                            </div>
                            <div class="cardPricing">
                                <h1 class="text-right">&times;</h1>

                                <span> £ <strong class="itemPrice">10.99</strong> </span>
                                <!-- <span>£<del>94.99</del></span> -->

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myCard">
                            <div class="cardImg">
                                <img src="assets/images/blog3.jpg"
                                    style="height: 70px; width: 70px; border-radius: 10px;" alt="">
                            </div>
                            <div class="cardContent">
                                <h6>Landi Kotal Mix Grill<input type="text" value=78 style="display:none" id="kotalPID">
                                </h6>
                                <p>A fine selection of tender lamb chops, sprinkled barbecue grill.</p>
                            </div>
                            <div class="cardMainPrice">
                                <span> £ <strong class="itemPrice">13.99</strong> </span>

                            </div>
                            <div class="cardButtons">
                                <ul class="pagination justify-content-end set_quantity">
                                    <li class="page-item">
                                        <button class="page-link " onclick="decreaseNumber('textbox3','itemval3')">
                                            <i class="fas fa-minus"></i> </button>
                                    </li>
                                    <li class="page-item"><input type="text" name="" class="page-link" value="0"
                                            id="textbox3">
                                    </li>
                                    <li class="page-item">
                                        <button class="page-link" onclick="increaseNumber('textbox3','itemval3')"> <i
                                                class="fas fa-plus"></i></button>
                                    </li>
                                </ul>

                            </div>
                            <div class="cardPricing">
                                <h1 class="text-right">&times;</h1>

                                <span> £ <strong class="itemPrice">10.99</strong> </span>
                                <!-- <span>£<del>94.99</del></span> -->

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myCard">
                            <div class="cardImg">
                                <img src="assets/images/blog3.jpg"
                                    style="height: 70px; width: 70px; border-radius: 10px; " alt="">
                            </div>
                            <div class="cardContent">
                                <h6>BBQ Lamb Ribs</h6><input type="text" value=78 style="display:none" id="RibPID">
                                <p>A fine selection of tender lamb chops, sprinkled barbecue grill.</p>
                            </div>
                            <div class="cardMainPrice">
                                <span> £ <strong class="itemPrice">13.99</strong> </span>

                            </div>
                            <div class="cardButtons">
                                <ul class="pagination justify-content-end set_quantity">
                                    <li class="page-item">
                                        <button class="page-link " onclick="decreaseNumber('textbox4','itemval4')">
                                            <i class="fas fa-minus"></i> </button>
                                    </li>
                                    <li class="page-item"><input type="text" name="" class="page-link" value="0"
                                            id="textbox4">
                                    </li>
                                    <li class="page-item">
                                        <button class="page-link" onclick="increaseNumber('textbox4','itemval4')"> <i
                                                class="fas fa-plus"></i></button>
                                    </li>
                                </ul>

                            </div>
                            <div class="cardPricing">
                                <h1 class="text-right">&times;</h1>

                                <span> £ <strong class="itemPrice">10.99</strong> </span>
                                <!-- <span>£<del>94.99</del></span> -->

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="totalHead">
                        <br>
                        <ul>
                            <li>Total</li>
                            <li>£13.99</li>
                        </ul>
                        <ul>
                            <li>Tax</li>
                            <li>£13.99</li>
                        </ul>
                        <ul>
                            <li>Discount</li>
                            <li>£13.99</li>
                        </ul>


                        <ul>
                            <li style="margin-top: 22px;">Net Total</li>
                            <li style="font-weight: 900; font-size: 40px; float: right;">£13.91</li>
                        </ul>


                    </div>
                    <hr>
                    <div class="coupon mb-1">
                        <label for="name">Name</label>
                        <input type="text" autocomplete="OFF" name="text" id="cusname"><br>
                        <label for="name">Address</label>
                        <input type="text" autocomplete="OFF" name="text" id="cusadd"><br>
                        <label for="name">Contact</label>
                        <input type="text" autocomplete="OFF" name="text" id="cuscontact"><br>

                    </div>
                    <div class="checkOut mb-1">
                        <button class="btn  w-100" id="chekOUT">Checkout</button>
                    </div>

                    <div class="referme">
                        <button class="btn btn-success w-100">Refer a Friend and get <span
                                class="discount">Discount</span></button>
                    </div>
                </div>
            </div>
        </div>



    </section>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Khyber Pass</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Do You Want To View Your Order ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No,Thanks</button>
                    <button type="button" class="btn btn-primary" id="SaveMe">Okay</button>
                </div>
            </div>
        </div>
    </div>












    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="assets/js/all.js"></script>
    <script>
        
        (document).ready(function () {
            £
            ("#chekOUT").click(function () {
                £
                ('#myModal').modal('show');£
                ("#SaveMe").click(function (e) {
                    e.preventDefault();
                    location.href = "OrderTracking.html";
                });
            });
    </script>
    <script>
        const decreaseNumber = (incdec, itemprice) => {
            var itemval = document.getElementById(incdec);
            var itemprice = document.getElementById(itemprice);

            if (itemval.value <= 0) {
                itemval.value = 0;
            } else {
                itemval.value = parseInt(itemval.value) - 1;
                itemval.style.background = '#fff';
                itemval.style.color = '#000';
                itemprice.innerHTML = parseInt(itemprice.innerHTML) - 15;
                product_total_amt.innerHTML = parseInt(product_total_amt.innerHTML) - 15;
                total_cart_amt.innerHTML = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge
                    .innerHTML);
            }
        }
        const increaseNumber = (incdec, itemprice) => {
            var itemval = document.getElementById(incdec);
            var itemprice = document.getElementById(itemprice);

            if (itemval.value >= 1000) {
                itemval.value = 1000;
                alert('max 5 allowed');
                itemval.style.background = 'red';
                itemval.style.color = '#fff';

            } else {
                itemval.value = parseInt(itemval.value) + 1;
                itemprice.innerHTML = parseInt(itemprice.innerHTML) + 15;
                product_total_amt.innerHTML = parseInt(product_total_amt.innerHTML) + 15;
                total_cart_amt.innerHTML = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge
                    .innerHTML);

            }

        }
    </script>
    <script>
        $(document).ready(function () {
        }
<script>

 function orderReview(){


    var Charsilamb=document.getElementById("lambPID").text;
    //alert("It is working   "+Charsilamb);

    var Charsichops=document.getElementById("ChopsPID").text;
   // alert("It is working   "+Charsichops);



    var Charsitika=document.getElementById("tikaPID").text;
   // alert("It is working   "+Charsitika);


    var Charsikotal=document.getElementById("kotalPID").text;
   // alert("It is working   "+Charsikotal);

    var Charsirib=document.getElementById("RibPID").text;
   // alert("It is working   "+Charsirib);
    var orderreview = [Charsilamb,Charsichops,Charsitika,Charsikotal,Charsirib];
    
    
    var xhttp = new XMLHttpRequest();


xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
alert( this.responseText);
}

};
var EC=JSON.stringify(Customer);
xhttp.open("GET", "./revieworder/"+EC, true);
xhttp.send();
};



</script>
<script>
function customer(){

var customerName=document.getElementById("cusid").text;
//alert("It is working   "+customerName);

var customeradd=document.getElementById("cusadd").text;
//alert("It is working   "+customeradd);

var customercon=document.getElementById("cuscontact").text;
//alert("It is working   "+customercon);

var customerinfo = [customerName,customeradd,customercon];

var xhttp = new XMLHttpRequest();


xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
alert( this.responseText);
}

};
var EC=JSON.stringify(Customer);
xhttp.open("GET", "./revieworder/"+EC, true);
xhttp.send();


};






</script>

</body>

</html>