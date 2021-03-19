<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    
    <style>
        .myPare {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            width: 100%;
        }

        .item-1 {
            width: 50%;
        }

        .item-3>div {
            margin: 10px 0px;
        }

        .item-2>div {
            margin: 10px 0px;
        }

        .item-4>button {
            display: block;
            margin: 6px 0px;

        }

        .itemPricing {
            font-size: 20px;
            font-weight: 700;
        }

        .card {
            margin: 10px 0px;
            -webkit-box-shadow: 10px 10px 26px 0px rgba(109, 115, 107, 1);
            -moz-box-shadow: 10px 10px 26px 0px rgba(109, 115, 107, 1);
            box-shadow: 10px 10px 26px 0px rgba(109, 115, 107, 1);
            border-radius: 15px;
        }

        .nav-pills .nav-link {
            border-radius: .25rem
        }

        .nav-pills .nav-link,
        .nav-pills .show>.nav-link {

            color: #ffffff !important;
            font-weight: 700;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #45c41e !important;
            background-color: none !important;
            background: none !important;
            border: 1px solid #ffffff;

        }

        .myOwnNavbar {
            display: block;
            background-color: #000000;

        }

        .SoftCard {
            background-color: #45c41e;
            padding: 20px 0px;
            border-radius: 15px;
        }

        .itemPricing {
            color: rgb(255, 174, 0);
        }

        .itemsign {
            color: black !important;
        }

        body {
            background: rgb(255, 255, 255);
            background: radial-gradient(circle, rgba(255, 255, 255, 1) 0%, rgba(0, 0, 0, 1) 100%);
        }

        #movetop {
            position: fixed;
            bottom: 40px;
            right: 15px;
            z-index: 9;
            font-size: 16px;
            border: none;
            outline: none;
            cursor: pointer;
            color: #fff;
            width: 40px;
            height: 40px;
            background-color: #0abf53 !important;
            border-radius: 50px;
            -webkit-border-radius: 50px;
            -o-border-radius: 50px;
            -moz-border-radius: 50px;
            -ms-border-radius: 50px;
            padding: 0;
        }

        .modal.left.fade .modal-dialog {
            left: 50%;
            top: 0%;
            -webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
            -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
            -o-transition: opacity 0.3s linear, left 0.3s ease-out;
            transition: opacity 0.3s linear, left 0.3s ease-out;
        }

        .modal.left.fade.show .modal-dialog {
            left: 0;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: none !important;
            border: none !important;
        }

        .table th,
        .table td {
            padding: 0 !important;
            border-top: 1px solid #dee2e6;
            vertical-align: middle !important;
            border-top: none;

        }

        input[type="text"] {
            margin-right: 10px;
        }

        td input {
            border: 1px solid #aaa !important;
        }

        .modal input {
            width: 50px;
        }

        .footerLeft ul li {
            display: inline-block;
            color: #ffffff !important;
        }

        .footerRight ul li {
            display: inline-block;
            color: #ffffff !important;

        }

        .myFooter {
            display: flex;
            justify-content: space-between;
        }

        .modal-footer {
            display: block !important;

            border-top: 1px solid #dee2e6;
            border-bottom-right-radius: calc(0.3rem - 1px);
            border-bottom-left-radius: calc(0.3rem - 1px);
        }


        #movetop:hover {
            opacity: .8;
        }

        #number {
            background-color: #0abf53 !important;
            border: none;
            border-radius: 50%;
            height: 35px;
            width: 35px;
            color: #ffffff;
            position: absolute;
            right: 37%;
            top: -45%;

        }

        #backgroundC {
            background: rgb(255, 255, 255);
            background: radial-gradient(circle, rgba(255, 255, 255, 1) 0%, rgba(0, 0, 0, 1) 100%);

        }

        tbody tr {
            margin: 10px 0px !important;
        }

        .btn-group {
            margin: 10px 0px !important;
        }

        .btn-group input {
            margin: 0px !important;
        }

        .btn-group input {
            text-align: center;
        }

        .page-item input {
            text-align: center;
            outline: none;
           width: 24px;

            margin: 0px 2px !important;

        }

        table ul {
            margin-top: 10px !important;
            margin-bottom: 10px !important;
        }

        .page-link {
            padding: 3px !important;
        }

        input#textbox {
            width: 24px;

        }
    </style>
    <!-- <link rel="stylesheet" href="assets/css/style-starter.css"> -->



</head>

<body>

    <header>
        <div class="myOwnNavbar">
            <ul class="nav nav-pills justify-content-center py-4" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-Starter-tab" data-toggle="pill" href="#pills-Starter"
                        role="tab" aria-controls="pills-Starter" aria-selected="true">Starter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-Mains-tab" data-toggle="pill" href="#pills-Mains" role="tab"
                        aria-controls="pills-Mains" aria-selected="false">Mains</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-Delicacies-tab" data-toggle="pill" href="#pills-Delicacies" role="tab"
                        aria-controls="pills-Delicacies" aria-selected="false">Delicacies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-Extras-tab" data-toggle="pill" href="#pills-Extras" role="tab"
                        aria-controls="pills-Extras" aria-selected="true">Extras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-Kids-tab" data-toggle="pill" href="#pills-Kids" role="tab"
                        aria-controls="pills-Kids" aria-selected="false">Kids Meal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-Desserts-tab" data-toggle="pill" href="#pills-Desserts" role="tab"
                        aria-controls="pills-Desserts" aria-selected="false">Desserts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-Drinks-tab" data-toggle="pill" href="#pills-Drinks" role="tab"
                        aria-controls="pills-Drinks" aria-selected="false">Drinks</a>
                </li>
            </ul>
        </div>
        <div class="container">



            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-Starter" role="tabpanel"
                    aria-labelledby="pills-Starter-tab">

                    <div class="card" id="MenuCard">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Charsi Tikka Lamb 1/4Kg</h5><input type="text" value='78'  id="PID">
                                <p>One of the favourites, succulent pieces of tender and juicy meat infused with
                                    Himalayan rock salt and cooked slowly on red hot natural charcoal.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>10.00
                                </div>


                            </div>
                            <div class="item-4">
                            <!-- incrementValue() -->
                                <button class="btn btn-success" onclick="AddInCart(this)" value="Increment Value"   
                                    >Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="modal left fade bd-example-modal-md" style="overflow: hidden;" id="exampleModal"
                        tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content" id="backgroundC">
                                <div class="modal-header">
                                    <h5 class="modal-title" style="font-weight: 800; color: #ffffff;"
                                        id="exampleModalLabel">Your Order
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body"
                                    style="background-color: #ffffff; height: 350px; overflow: auto;">


                                    <table class="table table-striped text-center " style="padding: 10px;">
                                        <thead style="border-bottom: 1px solid #ffffff;">
                                            <tr>
                                                <th>No</th>
                                                <th>Product</th>
                                                <th>Price

                                                </th>
                                                <th>qty</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Reshami Chicken Malai Boti</td>
                                                <td>£10.00
                                                </td>
                                                <td>

                                                    <ul class="pagination justify-content-center set_quantity">
                                                        <li class="page-item">
                                                            <button class="page-link "
                                                                onclick="decreaseNumber('textbox','itemval')">
                                                                <i class="fas fa-minus"></i> </button>
                                                        </li>
                                                        <li class="page-item"><input type="text" style="border: none !important;" name=""
                                                                class="page-link" value="0" id="textbox">
                                                        </li>
                                                        <li class="page-item">
                                                            <button class="page-link"
                                                                onclick="increaseNumber('textbox','itemval')"> <i
                                                                    class="fas fa-plus"></i></button>
                                                        </li>
                                                    </ul>

                                                </td>
                                                <td>£10.00
                                                </td>
                                                <td><button
                                                       id="myTdTimes"  style="background: none !important; border: none !important; outline: none !important; font-size: 20px;">&times;</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Charsi Tikka Lamb</td>
                                                <td>£10.00
                                                </td>
                                                <td>

                                                    <ul class="pagination justify-content-center   set_quantity">
                                                        <li class="page-item">
                                                            <button class="page-link "
                                                                onclick="decreaseNumber('textbox2','itemval2')">
                                                                <i class="fas fa-minus"></i> </button>
                                                        </li>
                                                        <li class="page-item"><input type="text" style="border: none !important;" name=""
                                                                class="page-link" value="0" id="textbox2">
                                                        </li>
                                                        <li class="page-item">
                                                            <button class="page-link"
                                                                onclick="increaseNumber('textbox2','itemval2')"> <i
                                                                    class="fas fa-plus"></i></button>
                                                        </li>
                                                    </ul>

                                                </td>
                                                <td>£10.00
                                                </td>
                                                <td><button
                                                        style="background: none !important; border: none !important; outline: none !important; font-size: 20px;">&times;</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Charsi Tikka Lamb</td>
                                                <td>£10.00
                                                </td>
                                                <td>

                                                    <ul class="pagination justify-content-center  set_quantity">
                                                        <li class="page-item">
                                                            <button class="page-link "
                                                                onclick="decreaseNumber('textbox3','itemval3')">
                                                                <i class="fas fa-minus"></i> </button>
                                                        </li>
                                                        <li class="page-item"><input type="text" style="border: none !important;" name=""
                                                                class="page-link" value="0" id="textbox3">
                                                        </li>
                                                        <li class="page-item">
                                                            <button class="page-link"
                                                                onclick="increaseNumber('textbox3','itemval3')"> <i
                                                                    class="fas fa-plus"></i></button>
                                                        </li>
                                                    </ul>

                                                </td>
                                                <td>£10.00
                                                </td>
                                                <td><button
                                                        style="background: none !important; border: none !important; outline: none !important; font-size: 20px;">&times;</button>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Charsi Tikka Lamb</td>
                                                <td>£10.00
                                                </td>
                                                <td>

                                                    <ul class="pagination justify-content-center  set_quantity">
                                                        <li class="page-item">
                                                            <button class="page-link "
                                                                onclick="decreaseNumber('textbox4','itemval4')">
                                                                <i class="fas fa-minus"></i> </button>
                                                        </li>
                                                        <li class="page-item"><input type="text" style="border: none !important;" name=""
                                                                class="page-link" value="0" id="textbox4">
                                                        </li>
                                                        <li class="page-item">
                                                            <button class="page-link"
                                                                onclick="increaseNumber('textbox4','itemval4')"> <i
                                                                    class="fas fa-plus"></i></button>
                                                        </li>
                                                    </ul>

                                                </td>
                                                <td>£10.00
                                                </td>
                                                <td><button
                                                        style="background: none !important; border: none !important; outline: none !important; font-size: 20px;">&times;</button>
                                                </td>

                                            </tr>


                                        </tbody>
                                    </table>


                                </div>
                                <div class="modal-footer">

                                    <div class="myFooter">
                                        <div class="footerLeft">
                                            <ul>
                                                <li>Total</li>
                                                <li>$500</li>
                                            </ul>
                                            <ul>
                                                <li>Tax</li>
                                                <li>$500</li>
                                            </ul>
                                        </div>
                                        <div class="footerRight">
                                            <ul>
                                                <li>Discount</li>
                                                <li>.5%</li>
                                            </ul>
                                            <ul>
                                                <li>Net Total</li>
                                                <li>.5%</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="footerbtns" style="float: right;">
                                        <button class="btn btn-success">CheckOut</button>
                                        <button class="btn btn-danger">Cancel</button>
                                    </div>
                                    <div class="clear" style="clear: both;"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Charsi Tikka Lamb 1/2Kg</h5>
                                <p>One of the favourites, succulent pieces of tender and juicy meat infused with
                                    Himalayan rock salt and cooked slowly on red hot natural charcoal.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>17.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Charsi Tikka Lamb 1Kg</h5>
                                <p>One of the favourites, succulent pieces of tender and juicy meat infused with
                                    Himalayan rock salt and cooked slowly on red hot natural charcoal.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>30.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Charsi Lamb Chops 1/4Kg</h5>
                                <p>One of the favourites, succulent pieces of tender and juicy meat infused with
                                    Himalayan rock salt and cooked slowly on red hot natural charcoal.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>11.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Charsi Lamb Chops 1/2Kg</h5>
                                <p>One of the favourites, succulent pieces of tender and juicy meat infused with
                                    Himalayan rock salt and cooked slowly on red hot natural charcoal.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>19.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Charsi Lamb Chops 1Kg</h5>
                                <p>One of the favourites, succulent pieces of tender and juicy meat infused with
                                    Himalayan rock salt and cooked slowly on red hot natural charcoal.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>36.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Landi Kotal Mix Grill 1/4Kg</h5>
                                <p>A selection of seekh kebab, lamb tikka and chicken tikka, all in one mouth watering
                                    platter.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>11.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Landi Kotal Mix Grill 1/2Kg</h5>
                                <p>A selection of seekh kebab, lamb tikka and chicken tikka, all in one mouth watering
                                    platter.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>19.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Landi Kotal Mix Grill 1Kg</h5>
                                <p>A selection of seekh kebab, lamb tikka and chicken tikka, all in one mouth watering
                                    platter.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>36.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>BBQ Lamb Ribs 1/4Kg</h5>
                                <p>It is a delicacy comprising of succulent lamb ribs sprinkled with rock salt and
                                    freshly prepared on natural charcoal.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>11.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Panama Chicken Leg Pieces </h5>
                                <p> 2pcs_ It is a delicacy comprising of succulent lamb ribs sprinkled with rock salt
                                    and
                                    freshly prepared on natural charcoal.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>11.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Reshami Chicken Malai Boti</h5>
                                <p>Skewered cubes of boneless chicken, marinated with fresh cream and cooked on a piping
                                    hot grill. The juicy taste wont allow you to stop till the last bite.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>11.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Khatta Lamb Seekh Kebab</h5>
                                <p>Succulent kebabs made of minced lamb mixed with fresh coriander, cumin and classic
                                    spices, grilled on charcoal.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>11.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Khasta Chicken Seekh Kebab</h5>
                                <p>It is a very rare and juicy kebab made of chicken mince with fresh herbs, and
                                    carefully selected spices.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>11.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>



                </div>
                <div class="tab-pane fade" id="pills-Mains" role="tabpanel" aria-labelledby="pills-Mains-tab">

                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Namak Mandi Lamb Karahi 1/4Kg</h5>
                                <p>One of the favourites, succulent pieces of tender and juicy meat infused with
                                    Himalayan rock salt and cooked slowly on red hot natural charcoal.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>10.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Namak Mandi Lamb Karahi 1/4Kg</h5>
                                <p>One of the favourites, succulent pieces of tender and juicy meat infused with
                                    Himalayan rock salt and cooked slowly on red hot natural charcoal.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>16.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Namak Mandi Lamb Karahi 1/4Kg</h5>
                                <p>One of the favourites, succulent pieces of tender and juicy meat infused with
                                    Himalayan rock salt and cooked slowly on red hot natural charcoal.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>26.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Ghanta Ghar Chicken Karahi 1/4Kg</h5>
                                <p>Chicken pieces cooked fresh in the karahi with tomatoes and garnished with a variety
                                    of spices for a rich taste.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>10.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Ghanta Ghar Chicken Karahi 1/2Kg</h5>
                                <p>Chicken pieces cooked fresh in the karahi with tomatoes and garnished with a variety
                                    of spices for a rich taste.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>16.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Ghanta Ghar Chicken Karahi 1Kg</h5>
                                <p>Chicken pieces cooked fresh in the karahi with tomatoes and garnished with a variety
                                    of spices for a rich taste.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>26.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Peshawari Chappli Kebab </h5>
                                <p>Chappli kebab is an ancient dish and the epitome of Pathan cooking, brought to you in
                                    a circular shape full of aroma and juices made with our secret recipe.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>9.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Kabuli Pulao </h5>
                                <p>Tender chunk of lamb placed on a portion of long grain rice, decorated with thin
                                    sliced caramelised carrots and raisins on top.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>9.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Qissa Khawani Chicken Pulao </h5>
                                <p>Classic chicken pulao made with Yakhni, will bring the taste of Peshwar back to your
                                    taste buds.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>8.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Qissa Khawani Chicken Pulao </h5>
                                <p>This sizzling daal (lentil) with tarka has travelled from driver hotels along the
                                    Grand Trunk Road of Pakistan to London, garnished with green chillies, ginger and
                                    fresh coriander.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>8.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Traditional Sarson Ka Saag </h5>
                                <p>
                                    A traditional dish made all over the Asian sub continent with mustard leaves and
                                    tarka spices with aromatic garlic cloves and butter.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>8.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Peshawari Naan Bread </h5>
                                <p>Large double naan cooked fresh to order in a clay oven, made with a blend of
                                    different flours, creating fibre rich and healthy bread.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>8.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>



                </div>
                <div class="tab-pane fade" id="pills-Delicacies" role="tabpanel" aria-labelledby="pills-Delicacies-tab">

                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Khyber Special Lamb Leg Roast</h5>
                                <p>When people of the KPK (Khyber Pakhtunkhwa) want to treat a very special guest,
                                    usually the answer is a rich and tender lamb leg roasted in Peshawari style, served
                                    with salad, long grain rice and sauce.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>8.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Traditional Tribal Whole Lamb</h5>
                                <p>Whether it is a friendly party or a jirga after a tribal dispute, traditional whole
                                    lamb is an all time favourite, prepared on slow charcoal for hours served with long
                                    grain rice, salad, lemons and mint sauce.</p>
                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>8.00
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="pills-Extras" role="tabpanel" aria-labelledby="pills-Extras-tab">
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Fresh Salad</h5>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>1.99
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Mint Sauce</h5>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>1.99
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-Kids" role="tabpanel" aria-labelledby="pills-Kids-tab">
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Kids Chicken Meal</h5>
                                <ul>
                                    <li>Chicken Leg Piece</li>
                                    <li>4 wings</li>
                                    <li>Chips</li>
                                    <li>Soft Drinks</li>
                                </ul>
                                <p>
                                    Freshly made with both the wings and leg seasoned with bread crumbs.
                                </p>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>1.99
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Potato Chips</h5>

                                <p>
                                    Freshly made potato chips with tomato ketchup.
                                </p>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>2.50
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>


                </div>

                <div class="tab-pane fade" id="pills-Desserts" role="tabpanel" aria-labelledby="pills-Desserts-tab">
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Zarda Sweet Rice</h5>

                                <p>
                                    A traditional sweet dish, made of rice, milk, sugar and flavoured with raisins,
                                    saffron, pistachios and almonds. It is a colourful dish with an amazing taste.
                                    (1/4kg portion)
                                </p>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>3.50
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>


                </div>
                <div class="tab-pane fade" id="pills-Drinks" role="tabpanel" aria-labelledby="pills-Drinks-tab">
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Taj Lemon Soda</h5>

                                <p>
                                    A fizzy beverage made with soda and lemon from the streets of Pakistan.
                                </p>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>3.50
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Traditional Mango Lassi </h5>

                                <p>
                                    A scrumptious yogurt drink made with mango slices mixed with milk and sugar.
                                </p>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>3.50
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Chowk Yadgar Sweet Lassi</h5>

                                <p>
                                    A sweet drink originating from villages of Pakistan. Made by blending yogurt and
                                    milk.
                                </p>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>3.50
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Shahi Baagh Salty Lassi </h5>

                                <p>
                                    A cooling savoury yogurt drink to be beat the heat, yogurt is blended with water and
                                    mint. </p>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>3.50
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Kanji</h5>

                                <p>
                                    A delicious salty and sour fermented drink of carrots to cool down. </p>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>3.50
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Kadrak Doodh Patti
                                </h5>

                                <p>
                                    From Attock Bridge to London Bridge, truck drivers favourite from Pakistan. </p>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>3.50
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>English Tea
                                </h5>


                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>3.50
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Kashmiri/Pink Tea
                                </h5>

                                <p>
                                    This amazing pink beverage is made from green tea for hours, it has a unique taste
                                    of salt and sugar. Seasoned with nuts. </p>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>3.50
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Peshawari Qahwa
                                </h5>

                                <p>
                                    Serves Two
                                    The traditional Qahwa is the soul of the Peshawari cuisine known to help digest and
                                    reduce weight. </p>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>3.50
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="SoftCard text-center">
                        <h4>Soft Drinks</h4>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Fresh Orange Juice
                                </h5>

                                <p>
                                    A refreshing treat squeezed fresh with bits. </p>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>3.50
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Fresh Carrot Juice
                                </h5>

                                <p>
                                    A refreshing treat squeezed fresh with bits.
                                </p>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>3.50
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Fresh Mixed Juice

                                </h5>

                                <p>
                                    A refreshing treat of freshly sqeezed orange and carrots with bits.</p>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>3.50
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Coca-Cola
                                </h5>

                                <p>
                                    330ml. </p>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>3.50
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Diet Coke
                                </h5>

                                <p>
                                    330ml. </p>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>3.50
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>7UP
                                </h5>

                                <p>
                                    330ml.</p>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>3.50
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Orange Mirinda
                                </h5>

                                <p>
                                    330ml. </p>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>3.50
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="myPare">
                            <div class="item-1">
                                <h5>Rubicon Mango
                                </h5>

                                <p>
                                    330ml.</p>

                            </div>

                            <div class="item-3">
                                <div class="itemPricing"><span class="itemsign">£</span>3.50
                                </div>


                            </div>
                            <div class="item-4">
                                <button class="btn btn-success">Add</button>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </header>



    <button id="movetop" title="Go to top">
        <span class="fas fa-shopping-cart" aria-hidden="true"></span>
        <input type="button" data-toggle="modal" data-target="#exampleModal" value="0" id="number">

    </button>


    <script>
        function incrementValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('number').value = value;
           
            let writeText = document.getElementById("myKabab").innerHTML(text);


        }
    </script>





    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="assets/js/all.js"></script>
    <script>
        const decreaseNumber = (incdec, itemprice) => {
            var itemval = document.getElementById(incdec);
            

            // console.log(itemval.value);
            if (itemval.value <= 0) {
                itemval.value = 0;
                alert('Negative quantity not allowed');
            } else {
                itemval.value = parseInt(itemval.value) - 1;
                itemval.style.background = '#fff';
                itemval.style.color = '#000';
              
            }
        }
        const increaseNumber = (incdec, itemprice) => {
            var itemval = document.getElementById(incdec);
           
            // console.log(itemval.value);
            if (itemval.value >= 1000) {
                itemval.value = 1000;
               // alert('max 5 allowed');
                itemval.style.background = 'red';
                itemval.style.color = '#fff';
            } else {
                itemval.value = parseInt(itemval.value) + 1;
               
               
            }
        }
    </script>
   
    <script>
function AddInCart(elem){
    
var p = elem.parentNode.parentNode.parentNode;

//alert(p.childNodes[1]);


}

    </script>
</body>

</html>