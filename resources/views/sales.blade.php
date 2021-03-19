<!DOCTYPE html>

<html lang="en">


<head>
    <base href="">
    <meta charset="utf-8" />
    <title>Sales</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">


    <style>
        @media (max-width: 1366px) {
            .left-content {
                width: 83%;
            }
        }

        .page-container.sidebar-collapsed-back .left-content {
            width: 83% !important;
        }

        @-moz-document url-prefix() {

            input {
                width: 150px;

            }

            #prod-1-contact {
                width: 155px;
            }

            #prod-1-category {
                width: 155px;

            }
        }



        .inv-bor-btns {
            text-align: center !important;
            margin-top: 10px;
        }

        #kt_bodys .okay-invo label {
            font-size: 13px !important;
            width: 100px;
        }

        .okay-invo-1 label {
            font-size: 14px !important;
        }

        .bootstrap-select .dropdown-toggle {
            width: 182px;
            height: 33px !important;

            color: #ffffff !important;
        }


        .bootstrap-select .dropdown-toggle .filter-option {
            position: absolute;
            top: -5px !important;
            left: 0;
            color: #ffffff;
            padding-top: inherit;
            padding-right: inherit;
            padding-bottom: inherit;
            padding-left: inherit;
            height: 100%;
            width: 100%;
            text-align: left;
        }

        .bootstrap-select .dropdown-toggle .filter-option-inner-inner {
            color: black;

        }

        .okay-invo-3 label {
            font-size: 15px !important;

        }

        .okay-invo-3 input {
            width: 150px !important;
        }

        input {
            border-color: #aaaaaa !important;
        }

        .input-field input {
            border: none !important;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


















        .btn:hover {
            color: #fff;
        }


        .dropdown-toggle::after {
            transition: transform 0.15s linear;
        }

        .show.dropdown .dropdown-toggle::after {
            transform: translateY(3px) !important;
        }



        .btn-bill-1 {
            background-color: #ff4400;
            padding: 5px 35px;
            margin: 10px 0px;
            float: right;

        }



        .main-cards-10 {
            padding: 10px;
        }

        .clear {
            clear: both;
        }

        .bill-content .container {
            max-width: 1360px;
        }

        .btn-back-1 {
            background-color: #333;
        }

        .main-cards-card {
            padding: 10px;
        }

        .main-cards-card .row {
            margin: 10px 0px;
        }

        .main-cards-cust {
            padding: 10px;
        }

        .main-cards-cust .row {
            margin: 10px 0px;
        }

        .main-cards-10 .row {
            margin: 10px 0px;
        }

        .row-games {
            /* padding: 10px; */
        }

        /* .complete {
    background-color: #;
} */

        .my-div {
            background-color: #ffffff;
            height: 300px;
            padding: 20px;
            border-radius: 20px;
        }

        .group-tables thead {
            background-color: #FF8C00;

        }

        table th {
            border: 1px solid rgb(196, 218, 243);
            padding: 5px;
        }

        table td {
            border: 1px solid rgb(196, 218, 243);
            padding: 5px;

        }

        /* thead tr th {
			border-right: 1px solid #333;
		} */

        .input-games .row {
            margin: 10px 0px;
        }

        .btn-save {
            background-color: #ff4400;

            width: 150px;
            margin: 5px 0px;
            color: #fff;

        }


        .btn-save:hover {
            color: #fff;
        }


        .btn {
            color: #fff;
        }

        @media only screen and (max-width: 768px) {
            .complete {
                text-align: center;
                margin: 0 auto;
            }

            #last-balance {
                margin: 10px 0px !important;
            }

            .bill-content .container {
                max-width: auto;
            }

            #customer {
                margin: 10px 0px !important;

            }
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .myLabel header label {
            width: 120px;
            font-size: 14px;
        }

        .myLabel fieldset {
            border: 1px solid #333;
            padding: 10px;
        }

        .myLabel legend {
            width: auto;
        }

        .myLabel .btn-order {
            background-color: rgb(85, 168, 8);

        }

        .myLabel .btn-my {
            float: right;
            width: 180px;
            font-size: 14px;
        }

        .myLabel .main-section label {
            width: 120px;
            font-size: 10px;
        }

        .myLabel .main-3 label {
            width: 120px;
            font-size: 10px;

        }

        .myLabel fieldset input {
            height: 20px;
        }

        .myLabel fieldset label {
            font-size: 10px !important;
        }


        .stocks input::placeholder {
            padding-left: 10px;
        }

        .stocks .table-section {
            border: 1px solid #333;
        }

        .stocks .myTable {
            margin: 30px 0px;
        }

        .my-main-tables {
            height: 425px !important;
        }


        .labels label {
            width: 120px;
            font-size: 14px;
        }

        .labels fieldset {
            border: 1px solid #333;
            padding: 20px;
        }

        .labels legend {
            width: auto;
        }

        .labels .btn-order {
            background-color: rgb(85, 168, 8);

        }

        .labels .btn-my {
            float: right;
        }

        .invoice-head-1 input {
            height: 20px;
            width: 120px;
        }

        .invoice-head-1 label {
            font-size: 11px;
            width: 150px;
        }

        .inv-border {
            border: 1px solid #333;
            padding: 5px;
        }

        .inv-border-1 label {
            width: 80px;
        }

        .inv-border-1 {
            border: 1px solid #333;
            padding: 5px;

        }

        .invoice-succ {
            display: inline-block;
        }

        .btn-inv-btn {
            height: 21px;

        }

        .inv-border-1 label {
            font-size: 11px;
        }



        .text-center .btn {
            width: 100px;
            font-size: 10px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .AZD label {
            width: 83px;
            font-size: 12px;
        }

        .AZD a {
            text-decoration: none;
        }

        .main-cof a {
            background-color: #f9f9f9;
            padding: 15px;
            display: inline-block;
            margin: 10px 0px;
        }

        .main-ids input {


            margin: 10px 0px;

        }

        #sub {
            display: block;

        }

        .cent {
            text-align: center !important;
        }



        .clear {
            clear: right;
        }








        td input {
            border: none;
            outline: none;
        }

        .container {
            max-width: 1350px;
        }

        .text-center .btn {
            font-size: 11px;
            letter-spacing: .3px;
            font-weight: 400;

        }





        .okay-invo {
            border: 1px solid rgb(196, 218, 243);
            border-radius: 10px;
            padding: 10px 10px;
        }

        .okay-invo label {
            width: 110px;
        }



        .ctrl-1 {
            width: 93px;
            font-size: 9px;
        }

        .okay-invo-1 label {
            width: 111px;

        }

        .o-inv {
            float: left;
            margin-right: 7px;
        }

        .o-inv-2 {
            float: right;

        }


        .dropdown {
            width: 120px !important;



        }

        /* .select{
    height: 20px !important;
    width: 120px !important;
} */
        .bs-placeholder.btn {
            border: 1px solid #222 !important;
        }

        #kt_bodys input {
            border: 1px solid #222;
        }

        #kt_bodys .okay-invo label {
            font-size: 10px;
            width: 100px;
        }

        #kt_bodys .okay-invo .modal-content label {
            font-size: 10px;
            width: 190px;
        }

        #kt_bodys .okay-invo-1 label {
            font-size: 10px;
        }

        #kt_bodys .okay-invo-3 label {
            font-size: 10px;
        }

        .okay-invo-3 label {
            width: 100px;
        }

        .myGoggle {
            border: 1px solid rgb(196, 218, 243);
            height: 425px;
            border-radius: 10px;
        }

        .inv-bor-btns {
            text-align: right;
            margin-top: 10px;
        }

        .inv-bor-btns button {
            width: 90px;
        }

        .centhour {
            text-align: center;
            margin-top: 10px;
        }

        .centhour button {
            width: 90px !important;
        }

        #prod-hour {
            visibility: hidden;
        }



        /* add */

        /* .forms-container {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    
    
    } */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* body {
    overflow: hidden;
} */

        .forms-container {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;


        }

        form {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .title {
            font-size: 2.2rem;
            color: #444;
            margin-bottom: 10px;

        }

        .input-field {
            max-width: 380px;
            width: 80%;
            height: 40px;
            background-color: #f0f0f0;
            margin: 5px 0;

            border-radius: 55px;
            display: grid;
            grid-template-columns: 15% 85%;
            padding: 0 .5rem;
        }

        .input-field a {
            text-align: center;
            line-height: 40px;
            color: #FF8C00;
            font-size: 1.1rem;


        }

        select {
            background: none;
            outline: none;
            border: none;

            font-weight: 600;
            font-size: 1.1rem;
            color: #333;
        }

        #holdPlz {
            display: none;
        }

        .input-field input {
            background: none;
            outline: none;
            border: none;

            font-weight: 600;
            font-size: 1.1rem;
            color: #333;
        }

        .input-field input::placeholder {
            color: #aaa;
            font-weight: 500;
        }



        .social-text {
            padding: .7rem 0;
            font-size: 1rem;
        }

        .social-media {
            display: flex;
            justify-content: center;
        }

        .social-icon {
            height: 46px;
            width: 46px;
            border: 1px solid #333;
            margin: 0 0.45rem;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: #333;
            font-size: 1.1rem;
            border-radius: 50%;
            transition: 0.3s;
        }

        .social-icon:hover {
            color: #FF8C00;
            border-color: #e24911;
        }

        .header-data {
            position: relative;
            height: 100vh;
            width: 100vw;
        }

        .header-data-main {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .header-data-main button {
            margin: auto 7px;
        }

        .btn-org {
            background-color: #ff4400;
        }

        .btn-org-2 {
            color: #FF8C00;
            border: 1px solid #FF4500;
        }

        .btn-org-2:hover {
            background-color: #FF4500;
            color: #fff;
        }

        .btn-org:hover {
            color: #fff;
        }

        .btn-org-1 {
            background-color: #FF8C00;
        }

        .btn-submit {
            margin-top: 10px;

        }

        .btn-submit:hover {
            color: #fff;
        }

        .modal {
            overflow: hidden;
        }

        .modal-title {
            /* font-size: 44px; */
        }

        #kt_body .sign-in-form input {
            border: none !important;
        }

        #gross {
            height: 3em !important;
        }

        #a-paid {
            height: 2.5em;
            margin-top: 7px !important;
        }

        #R-balance {
            height: 2.5em !important;
        }

        .total-buttons button {
            width: 88px;
            height: 80px;
        }

        .total-buttons {
            margin-top: 10px;
        }

        .hye-1 {
            border: 1px solid rgb(196, 218, 243);
            height: 430px;
            border-radius: 10px;

        }

        .okay-invo-1 {
            border: 1px solid rgb(196, 218, 243);
            padding-top: 10px;
            border-radius: 10px;

        }

        .bg-success {
            background-color: #28a745 !important
        }

        .btn.btn-primary:hover {
            border-color: #007bff;
        }

        @media only screen and (max-width: 768px) {
            #kt_bodys {
                text-align: center;
            }
        }

        @media only screen and (max-width: 1024px) {
            .o-inv-2 {
                float: left;
            }

            .o-inv-2 label {
                width: 111px;
                text-align: left;
            }

            .o-inv {
                /* width: 100px; */
                text-align: left;
            }

            .inv-bor-btns {
                text-align: center;
            }

            .inv-bor-btns button {
                margin: 5px 0px;
            }

            .clear {
                clear: left;
            }


            /* .okay-invo #invo-1 {
                width: 100px !important;
            } */

            .okay-invo label {
                width: 90px;
            }

            .okay-invo #prod-1 {
                width: 100px !important;
            }

            .okay-invo label {
                font-size: 8px;
            }

            .centhour button {
                width: 70px !important;
                font-size: 10px;
            }

            .okay-invo-1 label {
                width: 60px !important;
                font-size: 7px;

            }

            .total-buttons button {
                width: 48px;
                height: 40px;
                font-size: 10px;
            }

            .total-buttons {
                margin-top: 10px;
            }

            .myGoggle {
                height: 477px;

            }

            .inv-bor-btns {
                margin-top: 10px;
            }
        }


        .registration-form {
            padding: 0px 0;
            /* background-color: #fff; */

        }

        .registration-form form {
            background-color: #fff;
            max-width: 600px;
            margin: auto;
            padding: 30px 70px;
            border-radius: 30px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
        }



        .registration-form .item {
            border-radius: 20px;
            margin-bottom: 25px;
            padding: 10px 20px;
        }

        .registration-form .create-account {
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #5791ff;
            border: none;
            color: white;
            margin-top: 20px;
        }

        .registration-form .form-group {
            padding: 0;
            margin: 0;
        }




        @media (max-width: 576px) {
            .registration-form form {
                padding: 50px 20px;
            }

            .registration-form .form-icon {
                width: 70px;
                height: 70px;
                font-size: 30px;
                line-height: 70px;
            }
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="datetime"]:focus,
        input[type="datetime-local"]:focus,
        input[type="date"]:focus,
        input[type="month"]:focus,
        input[type="time"]:focus,
        input[type="week"]:focus,
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="search"]:focus,
        input[type="tel"]:focus,
        input[type="color"]:focus,
        .uneditable-input:focus {
            border-color: #0a549d;
            box-shadow: 0 1px 1px#0a549d inset, 0 0 8px #0a549d;
            outline: 0 none;
        }



        @media only screen and (max-width: 768px) {


            .okay-invo-1 label {
                width: 120px !important;
                font-size: 7px;
                text-align: left !important;

            }

            .dropdown {
                width: auto !important;
            }

            .o-inv-2 {
                margin-left: 20px;
            }

        }

        @media only screen and (max-width: 686px) {

            .o-inv-2 {
                margin-left: 0px;
            }

        }

        @media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {

            /* .okay-invo-hide {
                display: none;
            } */


        }




        /* your css rules for ipad landscape */


        @media all and (device-width: 768px) and (device-height: 1024px) and (orientation:portrait) {

            .okay-invo-hide {
                display: none;
            }

            .okay-invo {
                width: 100% !important;
            }

            .o-inv-2 {
                margin-left: 0px;
            }


        }

        @media only screen and (max-width: 768px) {

            .overFlowingTable table thead th {
                font-size: 10px !important;
            }



        }

        /* Landscape*/

        @media only screen and (min-device-width: 1366px) and (max-device-height: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {}

        /* Portrait*/
        @media only screen and (min-device-width: 1024px) and (max-device-height: 1366px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait) {

            .okay-invo-hide {
                display: none;
            }

            .o-inv-2 {
                margin-left: 0px;
            }
        }


        @media screen and (device-aspect-ratio: 40/71) {
            #InvoiceID {
                width: 150px !important;
            }

            #invo-1 {
                width: 150px !important;
            }
        }

        @media screen and (device-aspect-ratio: 16/9) {
            .okay-invo-hide {
                display: none;
            }
        }

        @media only screen and (max-width: 1197px) {
            .okay-invo-hide {
                display: none;
            }
        }

        #myTable_length label {
            width: auto !important;
        }

        .dataTables_filter label {
            width: auto !important;

        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none !important;
            margin: 0 !important;

        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
            margin: 0;
        }

        ::-webkit-scrollbar {
            width: 10px;

        }

        ::-webkit-scrollbar-track {
            background-color: #0a549d;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #e61d2f;
        }

        .fa-bars {
            color: #fff;
        }



        .dropdown {
            width: 130px;
        }

        .okay-invo-3 .bootstrap-select .dropdown-toggle {
            width: 155px !important;
            height: 30px !important;

        }

        #paidme {
            width: 129px;
        }

        .dropdown {
            height: 0px !important;
        }

        .mainHeadings {
            font-size: 25px;
        }

        .okay-invo input {
            width: 179px;
        }

        .o-inv input {
            width: 179px;
        }

        .o-inv-2 input {
            width: 179px !important;
        }

        .okay-invo-2 .bootstrap-select .dropdown-toggle {
            width: 195px !important;
            height: 30px !important;

        }

        .okay-invo-2 .dropdown {
            width: 0px !important;
        }

        @media (max-width: 1366px) {
            .okay-invo input {
                width: 107px;
            }

            .o-inv input {
                width: 107px;
            }

            .o-inv-2 input {
                width: 107px;
            }

            .o-inv-2 {
                float: none;
            }

            .centhour button {
                width: 70px !important;
            }

            .okay-invo-3 label {
                width: 80px !important;
            }

            .total-buttons button {
                height: 35px !important;
                width: 75px !important;
            }

            body {
                overflow-x: hidden !important;
            }

            .okay-invo-3 .dropdown {
                width: 150px !important;
            }

            #paidme {
                width: 79px !important;
            }

            .bootstrap-select .dropdown-toggle {
                width: 107px;
                height: 33px !important;

                color: #ffffff !important;
            }

            .o-inv-2 input {
                width: 107px !important;
            }

        }

        /* .dt-button  */

        .buttons-print {
            padding: 10px 25px;
            background-color: #0a549d;
            color: #ffffff;
        }

    </style>
</head>


<body id="kt_bodys" onload="getAllProducts()">
    <div class="page-container">
        <div class="left-content">
            <div class="inner-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="mainHeadings">Sales</h1>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row" id="selectFirst">
                        <div class="col-xl-3  col-lg-6 col-md-6   okay-invo">
                            <label for="invo-1">Invoice Number</label>
                            <input type="text" class="form-control" style="display: inline-block;  height: 30px;"
                                name="invo-1" id="InvoiceID">
                            <button class="btn" style="height: 25px; margin-top: -5px; background-color:#0a549d;"
                                onclick="getInvoiceCustomer()"></button>
                            <br class="hideBr"> <label for="prod-1">Product Number</label>
                            <input type="text" class="form-control" style="display: inline-block;  height: 30px;"
                                name="invo-1" id="invo-1">
                            <button type="button" class="btn"
                                style="height: 25px; margin-top: -5px; background-color: #e61d2f;" data-toggle="modal"
                                data-target=".bd-example-modal-xl"></button>

                            </button>



                            <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                                aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog  modal-xl">
                                    <div class="modal-content">
                                        <div class="container">
                                            <div class="row">

                                            </div>
                                        </div>

                                        <div class="container">
                                            <div class="row">
                                                <div class="overFlowingTable"
                                                    style="overflow: auto !important; width: 1118px !important; margin: 15px auto !important; ">


                                                    <table class="table  table-bordered " id="searchProductTable">
                                                        <thead>
                                                            <tr>

                                                                <th>Product Id</th>

                                                                <th>Product Name</th>
                                                                <th>Company</th>
                                                                <th>Price</th>
                                                                <th>Stock</th>


                                                            </tr>
                                                        </thead>
                                                        <tbody>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 text-right mt-5 mb-5 offset-md-8">
                                                    <button type="button" class="btn btn-org-1"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" data-dismiss="modal"
                                                        class="btn btn-org-1">Okay</button>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <label style="visibility: hidden;" for="prod-hour">Product Number</label>
                            <!-- <input type="text" class="form-control" style="display: inline-block; width: 177px; height: 30px;" name="invo-1" id="invo-1"> -->

                            <div class="centhour">
                                <button class="btn" style="background-color: #13579a;">New</button>
                                <button class="btn" style="background-color: #e61d2f;">Edit</button>
                                <button class="btn" style="background-color: #13579a;">Delete</button>
                            </div>
                            <!-- <button class="btn btn-danger ctrl-1">Delete Invoice</button> -->
                        </div>

                        <div class="col-md-6  okay-invo-1">
                            <div class="o-inv">
                                <label for="invo-1">Customer Id</label>
                                <input type="text" class="form-control" style="display: inline-block;  height: 30px;"
                                    name="invo-1" id="CID">
                                <button class="btn"
                                    style="height: 25px; margin-top: -5px; background-color: #e61d2f;"></button>
                                <br>
                                <label for="prod-1">Last Balance</label>
                                <input type="text" class="form-control" style="display: inline-block;  height: 30px;"
                                    name="invo-1" id="LastBalance">
                                <button class="btn"
                                    style="height: 25px; margin-top: -5px;background-color: #13579a;"></button> <br>
                                <label for="prod-1">Current Balance</label>
                                <input type="text" class="form-control" style="display: inline-block;  height: 30px;"
                                    name="invo-1" id="CurrentBalance">

                            </div>
                            <div class="o-inv-2">


                                <label for="issue-3">Customer Name</label>
                                <select class="selectpicker" data-live-search="true" tabindex="null" id="CustomerName"
                                    onchange="getCurrentCustomerInfo()">
                                    <!-- from database -->
                                </select>


                                </button>

                                <br>
                                <label for="prod-1">Contact Number</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block; width: 107px; height: 30px;" name="invo-1" id="CNO">
                                <br>
                                <label for="prod-1">Category</label>
                                <input type="text" class="form-control"
                                    style="display: inline-block; width: 107px; height: 30px;" name="invo-1"
                                    id="CustomerCategory">
                                <br>
                            </div>
                            <div class="clear">

                            </div>
                            <div class="inv-bor-btns">
                                <button class="btn" style="background-color: #e61d2f;" data-toggle="modal"
                                    data-target="#staticBackdrop">Add</button>



                                <div class="modal fade" id="staticBackdrop" data-keyboard="false" tabindex="-1"
                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="background:none;">

                                            <div class="modal-body">

                                                <div class="registration-form">

                                                    <form>

                                                        <div class="CustomerAddition  mb-3"
                                                            style="margin-top:-20px !important;">
                                                            <h2>Add Customer</h2>

                                                        </div>

                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="username"
                                                                placeholder="Customer ID">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control item"
                                                                autocomplete="OFF" id="password"
                                                                placeholder="Customer Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="email" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="phone-number"
                                                                placeholder="Phone Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="birth-date"
                                                                placeholder="Birth Date">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="email" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="phone-number"
                                                                placeholder="Phone Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control item"
                                                                autocomplete="OFF" id="birth-date"
                                                                placeholder="Birth Date">
                                                        </div>

                                                        <div class="form-group">
                                                            <button type="button"
                                                                class="btn btn-block create-account">Add</button>
                                                        </div>


                                                    </form>

                                                </div>


                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <button class="btn" style="background-color: #13579a;">View</button>
                                <button class="btn" style="background-color: #e61d2f;">History</button>
                                <button class="btn" style="background-color: #13579a;">Info</button>
                            </div>
                        </div>

                        <div class="col-md-3 okay-invo okay-invo-hide">
                            <img src="https://automark.pk/jw-forland/assets/images/logo-footer.png" class="img-fluid"
                                alt="">

                        </div>



                    </div>

                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 myGoggle" style="overflow-x: auto; overflow-y: auto;">
                            <div>
                                <table style="border:1px solid rgb(196, 218, 243); width:100%;  margin-top:10px;  "
                                    id="ProductSaleTable">

                                    <thead>
                                        <tr>

                                            <th>Product ID</th>

                                            <th>Product Name</th>
                                            <th>Company</th>
                                            <th>Sale Price</th>
                                            <th>Quantity</th>
                                            <th>Discount</th>
                                            <th>Total</th>
                                            <th>Action</th>



                                        </tr>
                                    </thead>
                                    <tbody>

                                        <!-- this will be populated from database -->
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="col-md-3 okay-invo-3">
                            <label for="invo-1" style="width: 130px;">Total</label>
                            <input type="text" class="form-control"
                                style="display: inline-block; width: 177px; height: 30px;" name="invo-1" id="Total">

                            <label for="prod-1" style="width: 130px;">Discount</label>
                            <input type="text" class="form-control"
                                style="display: inline-block; width: 177px; height: 30px;" name="invo-1"
                                id="DiscountOverall" onchange="calc()">
                            <label for="invo-1" style="width: 130px;">Gross Total</label>
                            <input type="text" class="form-control"
                                style="display: inline-block; width: 177px; height: 30px;" name="invo-1"
                                id="grossTotal">
                            <label for="prod-1" style="width: 130px;"> Tax 17%</label>
                            <input type="text" class="form-control"
                                style="display: inline-block; width: 177px; height: 30px;" name="invo-1" id="tax"
                                onchange="calc()">
                            <label for="prod-1" style="width: 130px;">Net Total</label>
                            <input type="text" class="form-control"
                                style="display: inline-block; width: 177px; height: 30px;" name="invo-1" id="NetTotal">
                            <label for="invo-1" style="width: 130px; font-weight: 500;">Amount Paid</label>
                            <input type="text" class="form-control"
                                style="display: inline-block; width: 177px; height: 30px;" name="invo-1" id="AmountPaid"
                                onchange="calcForBalance()">
                            <label for="prod-1" style="width: 130px; font-weight: 500;">Remaining Balance</label>
                            <input type="text" class="form-control"
                                style="display: inline-block; width: 177px; height: 30px;" name="invo-1"
                                id="RemainingBalance">

                            <label id="paidme" for="">Paid From</label>
                            <select class="selectpicker form-control" data-live-search="true" id="accounts">

                            </select>
                            <div class="total-buttons" id="hideme">
                                <button class="btn" style="background-color: #e61d2f;"
                                    onclick="insertInSales()">Save</button>
                                <button class="btn" style="background-color: #0a549d;">Print</button>
                                <button class="btn" style="background-color: #e61d2f;">Edit</button>
                            </div>
                            <div class="total-buttons" id="hideme">
                                <button class="btn" style="background-color: #0a549d;">Hold</button>
                                <button class="btn" style="background-color: #e61d2f;">Update</button>
                                <button class="btn" style="background-color: #0a549d;">Delete</button>
                            </div>




                        </div>
                    </div>
                </div>

                <section>
                    <div class="total-buttons mb-5" id="holdPlz" style="text-align: center;">
                        <button class="btn btn-info">Save</button>
                        <button class="btn btn-info">Hold</button>
                        <button class="btn btn-info">Save</button>

                        <button class="btn btn-info">Save</button>
                        <button class="btn btn-info">Hold</button>
                        <button class="btn btn-info">Save</button>
                    </div>
                </section>
            </div>
        </div>
        <div class="sidebar-menu">

            <div class="logo"> <a class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a>
                    <span id="logo"></span>
                </a> </div>
            <div class="menu">
                <ul id="menu">
                    <li id="menu-home"><a href="/db"><i class="fas fa-tachometer-alt"></i><span
                                style="font-size: 18px;">Dashboard</span></a>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs0"><i class="fab fa-salesforce"></i><span
                                style="font-size: 18px;">Operations</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse list-unstyled firstULs0 ">
                            <li><a href="/bo">Book Order</a></li>
                            <li><a href="/rec">Receiving</a></li>
                            <li><a href="/is">Invoice Services</a></li>
                            <li><a href="/sc">Commissions and Taxes</a></li>
                            <li><a href="/as">Add Stock</a></li>
                            <li><a href="/th">Transaction History</a></li>
                            <li><a href="/l">Investor Sale Ledger</a></li>
                            <li><a href="/cl">Company Ledger</a></li>

                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs"><i class="fab fa-salesforce"></i><span
                                style="font-size: 18px;">Products</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse list-unstyled firstULs ">
                            <li><a href="/">Category</a></li>
                            <li><a href="/vs">Product Record</a></li>
                            <li><a href="/as">Add Product</a></li>
                            <li><a href="/">Barcode</a></li>

                            <li><a href="/">Stock Audit</a></li>
                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs1"><i class="fab fa-salesforce"></i><span
                                style="font-size: 18px;">Customer</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs1">
                            <li><a href="/">Add Customer</a></li>
                            <li><a href="/vs">Customer List</a></li>

                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs2"><i class="fab fa-salesforce"></i><span
                                style="font-size: 18px;">Supplier</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs2">
                            <li><a href="/">Add Supplier</a></li>
                            <li><a href="/vs">Supplier List</a></li>
                        </ul>
                    </li>
                    <li id="menu-comunicacao"><a data-toggle="collapse" data-target=".firstULs3"><i
                                class="fab fa-alipay"></i>
                            <span style="font-size: 18px;">Purchase</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs3">
                            <li id="menu-mensagens" style="width: 201px"><a href="/ps">Purchase Stock</a>
                            </li>
                            <li><a href="">Daily Purchase</a></li>
                            <li><a href="">Monthly Purchase</a></li>
                            <li id="menu-arquivos"><a href="/psi">Print Sales Invoice</a></li>
                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs4"><i class="fab fa-salesforce"></i><span
                                style="font-size: 18px;">POS</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs4">
                            <li><a href="/ss">POS</a></li>
                            <li><a href="/sc">Add Sale</a></li>
                            <li><a href="">Daily Sales</a></li>
                            <li><a href="">Monthly Sales</a></li>

                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs5"><i class="fas fa-vials"></i><span
                                style="font-size: 18px;">Expense</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs5">
                            <li><a href="/ex">Add Expense</a></li>
                            <li><a href="">Expense List</a></li>
                            <li><a href="">Expense Head</a></li>
                            <li><a href="">Expense Category</a></li>
                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs6"><i class="fas fa-quote-right"></i><span
                                style="font-size: 18px;">Quotation<span class="fa fa-angle-right"
                                    style="float: right"></span></a>
                        <ul class="collapse firstULs6">
                            <li><a href="/ql">Quotation List</a></li>
                            <li><a href="/is">Add Quotation</a></li>
                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs7"><i class="fas fa-random"></i><span
                                style="font-size: 18px;">Transfer<span class="fa fa-angle-right"
                                    style="float: right"></span></a>
                        <ul class="collapse firstULs7">
                            <li><a href="/th">Transaction History</a></li>
                            <li><a href="">Transfer Funds</a></li>
                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs8"><i class="fas fa-undo-alt"></i><span
                                style="font-size: 18px;">Return<span class="fa fa-angle-right"
                                    style="float: right"></span></a>
                        <ul class="collapse firstULs8">
                            <li><a href="/ss">Sale</a></li>
                            <li><a href="/is">Purchase</a></li>
                        </ul>
                    </li>
                    <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs9"><i
                                class="fas fa-user-circle"></i><span style="font-size: 18px;">Accounts</span><span
                                class="fa fa-angle-right" style="float: right"></span></a>
                        <ul class="collapse firstULs9">
                            <li id="menu-academico-boletim"><a href="/l">Investor Ledger</a></li>
                            <li id="menu-academico-avaliacoes"><a href="/igl">Investor General Ledger</a></li>
                            <li id="menu-academico-boletim"><a href="/cl">Company Ledger</a></li>

                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs10"><i class="fab fa-accusoft"></i><span
                                style="font-size: 18px;">HR</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs10" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/">Add Employee</a></li>
                            <li id="menu-academico-boletim"><a href="/">View Employee</a></li>
                        </ul>
                    </li>



                    <li><a data-toggle="collapse" data-target=".firstULs11"><i class="fas fa-people-carry"></i><span
                                style="font-size: 18px;">People</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs11" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/">User List</a></li>
                            <li id="menu-academico-boletim"><a href="/">Add User</a></li>


                        </ul>
                    </li>



                    <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs12"><i
                                style="font-size: 20px;" class="fab fa-stack-overflow"></i><span
                                style="font-size: 18px;">Stock</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs12" id="menu-academico-sub">
                            <li id="menu-academico-boletim"><a href="/as">Add New Stock</a></li>
                            <li id="menu-academico-avaliacoes"><a href="/vs">View Stock</a></li>
                        </ul>
                    </li>



                    <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs13"><i
                                class="fas fa-flag-checkered"></i><span style="font-size: 18px;">Reports</span><span
                                class="fa fa-angle-right" style="float: right"></span></a>
                        <ul class="collapse firstULs13" id="menu-academico-sub">
                            <li id="menu-academico-boletim"><a href="/d">Summary Report</a></li>

                            <li id="menu-academico-boletim"><a href="/dl">Customer Report</a></li>
                            <li id="menu-academico-boletim"><a href="/d">Best Seller</a></li>

                            <li id="menu-academico-boletim"><a href="/dl">Daily Sale</a></li>
                            <li id="menu-academico-boletim"><a href="/d">Monthly Sale</a></li>

                            <li id="menu-academico-boletim"><a href="/dl">Daily Purchase</a></li>
                            <li id="menu-academico-boletim"><a href="/d">MonthlyPurchase</a></li>

                            <li id="menu-academico-boletim"><a href="/dl">User Report</a></li>
                            <li id="menu-academico-boletim"><a href="/d">Supplier Report</a></li>

                            <li id="menu-academico-boletim"><a href="/dl">Due Report</a></li>


                        </ul>
                    </li>
                    <li id="menu-academico"><a data-toggle="collapse" data-target=".firstULs14"><i
                                class="fas fa-truck-loading"></i><span style="font-size: 18px;">Order
                                Tracking</span><span class="fa fa-angle-right" style="float: right;"></span></a>
                        <ul class="collapse firstULs14" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/dl">Order Tracking Letter</a></li>

                        </ul>
                    </li>


                    <li><a data-toggle="collapse" data-target=".firstULs15"><i class="fab fa-amazon-pay"></i><span
                                style="font-size: 18px;">PayRoll</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs15" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/pr">View Employee Pay</a></li>
                            <li id="menu-academico-boletim"><a href="/SalarySlip">Salary Slip</a></li>
                            <li id="menu-academico-boletim"><a href="">Set Pay</a></li>
                        </ul>
                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs16" href="/at"><i
                                class="fas fa-guitar"></i><span style="font-size: 18px;">Attendance</span><span
                                class="fa fa-angle-right" style="float: right"></span></a>
                        <ul class="collapse firstULs16" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/atv">View Attendance</a></li>
                            <li id="menu-academico-boletim"><a href="/at">Mark Attendance</a></li>
                        </ul>

                    </li>
                    <li><a data-toggle="collapse" data-target=".firstULs17"><i class="fas fa-eye"></i><span
                                style="font-size: 18px;">Task View</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="firstULs17 collapse" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="/ev">Employer View</a></li>
                            <li id="menu-academico-boletim"><a href="/etv">Employer Task View</a></li>
                        </ul>
                    </li>

                    <li><a data-toggle="collapse" data-target=".firstULs18"><i class="fas fa-cogs"></i><span
                                style="font-size: 18px;">Account Settings</span><span class="fa fa-angle-right"
                                style="float: right"></span></a>
                        <ul class="collapse firstULs18" id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="product.html">Change Username</a></li>
                            <li id="menu-academico-boletim"><a href="price.html">Password Settings</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>




































    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#myTables').DataTable();
        });

    </script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#searchProductTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            });
        });
        var toggle = true;

        $(".sidebar-icon").click(function () {
            if (toggle) {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({
                    "position": "absolute",

                });
            } else {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function () {
                    $("#menu span").css({
                        "position": "relative",

                    });
                }, 400);
            }
            toggle = !toggle;
        });

    </script>



    <script>
        function getAllInvoiceDetails() {

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText;
                    //alert(data);
                    var a = JSON.parse(data);

                    document.getElementById("CID").value = a[0].CustomerID;
                    document.getElementById("LastBalance").value = a[0].Balance;
                    document.getElementById("CurrentBalance").value = a[0].Balance;
                    calc();
                    document.getElementById("CNO").value = a[0].Contect;
                    document.getElementById("CustomerCategory").value = a[0].CustomerCatogery;
                    document.getElementById("CustomerName").value = a[0].CustomerID;
                    var i = 0;
                    //alert(a.length);
                    var table = document.getElementById("ProductSaleTable");
                    table.innerHTML = "<thead>\
                            <tr>\
                                <th>Product ID</th>\
                                <th>Product Name</th>\
                                <th>Company</th>\
                                <th>Sale Price</th>\
                                <th>Quantity</th>\
                                <th>Discount</th>\
                                <th>Total</th>\
                                <th>Action</th>\
                            </tr>\
                        </thead>";

                    for (i; i < a.length; i++) {
                        var PID = a[i].ProductSerial;
                        var discount = a[i].Discount;
                        var quantity = a[i].Quantity;
                        //alert(quantity);
                        var salePrice = a[i].SalePrice;
                        var company = a[i].Company;
                        var productName = a[i].ProductName;
                        var totalAmount = a[i].NetAmount;

                        var row = table.insertRow(-1);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);
                        var cell4 = row.insertCell(3);
                        var cell5 = row.insertCell(4);
                        var cell6 = row.insertCell(5);
                        var cell7 = row.insertCell(6);
                        var cell8 = row.insertCell(7);

                        cell1.innerHTML = PID;
                        cell2.innerHTML = productName;
                        cell3.innerHTML = company;
                        cell4.innerHTML = salePrice;
                        cell5.innerHTML = quantity;
                        cell6.innerHTML = discount;
                        cell7.innerHTML = totalAmount;
                        //calc();
                        cell8.innerHTML =
                            "<button id='DelButton'class=\"btn btn-danger\" style=\"height: 25px;\" value='x' text='x' onclick='RemoveThisRow(this)'></button>"
                    }

                }
            }
            var invoiceNumber = document.getElementById("InvoiceID").value;

            xhttp.open("GET", "./getAllInvoiceDetails/" + invoiceNumber, true);
            xhttp.send();
        }

        function getInvoiceCustomer() {

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText;
                    //alert(data);
                    var a = JSON.parse(data);
                    document.getElementById("CID").value = a[0].CustomerID;
                    document.getElementById("LastBalance").value = a[0].Balance;
                    document.getElementById("CurrentBalance").value = a[0].Balance;
                    calc();
                    document.getElementById("CNO").value = a[0].Contect;
                    document.getElementById("CustomerCategory").value = a[0].CustomerCatogery;
                    //document.getElementById("CustomerName").innerHTML = a[0].CustomerID;
                    $('#CustomerName').val(a[0].CustomerID);
                    $('#CustomerName').selectpicker('refresh');

                    var i = 0;
                    //alert(a.length);
                    var table = document.getElementById("ProductSaleTable");
                    table.innerHTML = "<thead>\
                            <tr>\
                                <th>Product ID</th>\
                                <th>Product Name</th>\
                                <th>Company</th>\
                                <th>Sale Price</th>\
                                <th>Quantity</th>\
                                <th>Discount</th>\
                                <th>Total</th>\
                                <th>Action</th>\
                            </tr>\
                        </thead>";

                    for (i; i < a.length; i++) {
                        var PID = a[i].ProductSerial;
                        var discount = a[i].Discount;
                        var quantity = a[i].Quantity;
                        var PerUnitSalePrice = a[i].PerUnitSalePrice;
                        var company = a[i].Company;
                        var productName = a[i].ProductName;
                        var totalAmount = a[i].NetAmount;

                        var row = table.insertRow(-1);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);
                        var cell4 = row.insertCell(3);
                        var cell5 = row.insertCell(4);
                        var cell6 = row.insertCell(5);
                        var cell7 = row.insertCell(6);
                        var cell8 = row.insertCell(7);

                        cell1.innerHTML = PID;
                        cell2.innerHTML = productName;
                        cell3.innerHTML = company;
                        cell4.innerHTML = PerUnitSalePrice;
                        cell5.innerHTML = quantity;
                        cell6.innerHTML = discount;
                        cell7.innerHTML = totalAmount;
                        //calc();
                        cell8.innerHTML =
                            "<button id='DelButton'class=\"btn btn-danger\" style=\"height: 25px;\" value='x' text='x' onclick='RemoveThisRow(this)'></button>"


                    }
                }
            };
            var invoiceNumber = document.getElementById("InvoiceID").value;

            xhttp.open("GET", "./getInvoiceCustomer/" + invoiceNumber, true);
            xhttp.send();


        }

    </script>

    <script>
        function getAllProducts() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText;
                    //alert(data);
                    var table;
                    var a = JSON.parse(data);
                    //  alert(a[0].ProductSerial);
                    table = $('#searchProductTable').DataTable();
                    //table = document.getElementById("searchProductTable")
                    $.each(a, function (i, item) {

                        table.row.add([a[i].ProductID, a[i].ProductName, a[i].Company, a[i]
                            .PerUnitSalePrice,
                            a[i].StockIn
                        ]);
                    });
                    table.draw();
                }
            };

            xhttp.open("GET", "./getAllProducts/", true);
            xhttp.send();
            calc();
            loadAllCustomers();
            loadAccounts();
            getInvoiceID();


        };



        function loadAllCustomers() {



            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("CustomerName").innerHTML =
                        this.responseText;
                    $('#CustomerName').selectpicker('refresh');

                }
            };

            xhttp.open("GET", "./getAllCustomers", true);
            xhttp.send();
        };

        function getCurrentCustomerInfo() {

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = this.responseText;
                    var a = JSON.parse(data);
                    document.getElementById("CID").value = a[0].CustomerID;
                    document.getElementById("LastBalance").value = a[0].Balance;
                    document.getElementById("CurrentBalance").value = a[0].Balance;
                    calc();
                    document.getElementById("CNO").value = a[0].Contect;
                    document.getElementById("CustomerCategory").value = a[0].CustomerCatogery;




                } else {
                    //alert( this.responseText);
                }
            };
            var CustomerID = $('#CustomerName').find(":selected").val();

            xhttp.open("GET", "./getCustomersInfo/" + CustomerID, true);
            xhttp.send();


        }

        function loadAccounts() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("accounts").innerHTML = this.response;
                    $('#accounts').selectpicker('refresh');
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getAccountHeads/", true);

            xhttp.send();
        }

        function AddCustomer() {

            var CustomerName = document.getElementById("CustomerName").value;
            //	alert("It is working"+CustomerName);

            var password = document.getElementById("password").value;
            //	alert("It is working"+password);

            var CustomerContact = document.getElementById("Contact").value;
            //alert("It is working"+CustomerContact);


            var CustomerProfession = document.getElementById("Profession").value;
            //alert("It is working"+CustomerProfession);


            var CustomerBalance = 0;
            //alert("It is working"+CustomerBalance);

            var CustomerAddress = document.getElementById("Address").value;
            //alert("It is working"+CustomerAddress);

            var CustomerComments = document.getElementById("Comments").value;
            //alert("It is working"+CustomerComments);

            var Customer = [CustomerName, password, CustomerContact, CustomerProfession, CustomerBalance,
                CustomerAddress,
                CustomerComments
            ];

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //  alert( this.responseText);
                }
            };
            var EC = JSON.stringify(Customer);
            xhttp.open("GET", "./addCustomer/" + EC, true);
            xhttp.send();


        };


        function getInvoiceID() {

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("InvoiceID").value = this.response;
                }
            };
            //alert("ljd");
            xhttp.open("GET", "./getInvoiceID", true);

            xhttp.send();


        }



        $(document).ready(function () {

            // code to read selected table row cell data (values).
            $("#searchProductTable").on('click', 'tr', function () {
                // get the current row



                var table = document.getElementById("ProductSaleTable");

                var PID = this.cells[0].innerText; // get current row 1st TD value
                var PNAME = this.cells[1].innerText; // get current row 2nd TD
                //var qty=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
                var CompanyName = this.cells[2].innerText; // get current row 3rd TD
                var SalePrice = this.cells[3].innerText; // get current row 3rd TD
                var qty = 1;
                if (IsItemExistInDataTable(PID)) {


                    var row = table.insertRow(-1);
                    var cell1 = row.insertCell(0);
                    var cell2 = row.insertCell(1);
                    var cell3 = row.insertCell(2);
                    var cell4 = row.insertCell(3);
                    var cell5 = row.insertCell(4);
                    var cell6 = row.insertCell(5);
                    var cell7 = row.insertCell(6);
                    var cell8 = row.insertCell(7);


                    cell1.innerHTML = PID;
                    cell2.innerHTML = PNAME;
                    cell3.innerHTML = CompanyName;
                    cell4.innerHTML = SalePrice;
                    cell5.innerHTML =
                        '<input type="text" onchange="calculationTrigerOnQtyValueChange(this)" value=1>';
                    cell6.innerHTML =
                        '<input type="text" onchange="calculationTrigerOnQtyValueChange(this)" value=0.0>';
                    var tot = SalePrice * 1;
                    cell7.innerHTML = tot;
                    calc();






                    //$("#searchModal").modal('hide');
                    //calculation than enter price
                    //alert("Item added");


                    cell8.innerHTML =
                        "<button id='DelButton'class=\"btn btn-danger\" style=\"height: 25px;\" value='x' text='x' onclick='RemoveThisRow(this)'></button>";

                } else {
                    alert("Quantity Increased");
                }
            });
        });



        function taxCalculation() {





            var taxRate = 17.00;
            var grosstotal = document.getElementById('grossTotal').value;
            //alert(taxRate/100);
            var tax = Number(grosstotal) * (taxRate / 100);
            //	alert(tax);
            return tax;
        }

        function calc() {

            var table = document.getElementById('ProductSaleTable');
            var rows = table.rows;
            var total = 0;
            var cell;

            // Assume first row is headers, adjust as required
            // Assume last row is footer, addjust as required
            for (var i = 1, iLen = rows.length; i < iLen; i++) {
                cell = rows[i].cells[6];
                total += Number(cell.textContent || cell.innerText);
            }
            document.getElementById('Total').value = total.toFixed(2);
            var discount = document.getElementById('DiscountOverall').value;


            var gross = 0;
            gross = (Number(total) - Number(discount));
            document.getElementById('grossTotal').value = gross.toFixed(2);
            var net = 0;
            var tax = 0;
            var tax = taxCalculation();

            document.getElementById('tax').value = tax.toFixed(2);
            net = gross + Number(tax);
            //alert(net);
            document.getElementById('NetTotal').value = net.toFixed(2);
            document.getElementById('AmountPaid').value = net.toFixed(2);

            calcForBalance();
        }


        function RemoveThisRow(r) {
            var i = r.parentNode.parentNode.rowIndex;
            //alert(i);
            document.getElementById("ProductSaleTable").deleteRow(i);
            calc();
        }







        function calculationTrigerOnQtyValueChange(x) {

            var theRow = x.parentElement.parentElement;
            //	alert(theRow);
            var rx = x.parentElement.parentElement.rowIndex;
            //alert(rx);

            var salePrice = theRow.cells[3].innerText;
            //alert(salePrice);
            var qty = theRow.cells[4].children[0].value;
            var dis = theRow.cells[5].children[0].value;
            //  alert(dis);
            //  alert(qty);
            var tot = (salePrice * qty) - dis;


            theRow.cells[6].innerText = tot;
            calc();
            calcForBalance();



            // value of per unit price is got in 

        };

        function calcForBalance() {
            document.getElementById("CurrentBalance").value = document.getElementById('LastBalance').value;

            var Ap = document.getElementById('AmountPaid').value;
            var tot = document.getElementById('NetTotal').value
            var RBForInvoice = 0;
            RBForInvoice = (Number(tot) - Number(Ap)).toFixed(2);
            document.getElementById('RemainingBalance').value = RBForInvoice;
            var CustomerLastBalance = document.getElementById('LastBalance').value;
            var newBalance = Number(CustomerLastBalance) + Number(RBForInvoice);
            document.getElementById("CurrentBalance").value = newBalance;





        }

        function IsItemExistInDataTable(item) {



            var table = document.getElementById("ProductSaleTable");
            for (var i = 0, row; row = table.rows[i]; i++) {


                if (item == row.cells[0].innerHTML) {


                    var qty = row.cells[4].children[0].value;
                    qty++;
                    row.cells[4].children[0].value = qty;
                    calculationTrigerOnQtyValueChange(row.cells[4].children[0]);




                    return false;
                }

            }

            return true;
        };







        function insertInSales() {

            var myTrows = [];
            var table = document.getElementById("ProductSaleTable");
            var myRow2 = [];

            //alert(sp);
            $('#ProductSaleTable tr').each(function (row, tr) {

                myTrows[row] = [

                    $(tr).find('td:eq(0)').text(), //productID

                    $(tr).find('td:eq(3)').text(), //salePrice
                    $(tr).find('td:eq(4) input[type="text"]').val(), //qty
                    $(tr).find('td:eq(5) input[type="text"]').val(), //discount
                    $(tr).find('td:eq(6)').text() //totamount



                ];


            });
            myTrows.shift();

            //var invoiceNumber=getInvoiceID();
            var tot = document.getElementById("Total").value;
            var discount = document.getElementById('DiscountOverall').value;
            if (discount == "") {

                discount = 0;
                document.getElementById('DiscountOverall').value = 0;

            }

            var gross = document.getElementById('grossTotal').value;
            var tax = document.getElementById('tax').value;
            var netTotal = document.getElementById('NetTotal').value;
            var amp = document.getElementById('AmountPaid').value;
            var rmb = document.getElementById("RemainingBalance").value;
            var CID = document.getElementById("CID").value;
            var CLB = document.getElementById("LastBalance").value;
            var CCB = document.getElementById("CurrentBalance").value;
            var AID = $('#accounts').find(":selected").val();

            myRow2 = [myTrows, tot, discount, gross, tax, netTotal, amp, rmb, CID, CLB, CCB, AID];

            //alert(myRow2[0][1]);
            //alert(myRow2[11]);


            var array = JSON.stringify(myRow2);
            alert(array);


            var xhttp = new XMLHttpRequest();
            if (AID == "") {
                alert("Payment Method not selected");
            } else {

                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        alert("Invoice =" + this.responseText + " is generated");
                        window.open("./testpdf/6");

                    }
                };

                xhttp.open("GET", "./addSalesForSS/" + array, true);
                // var MenuID=$('#Menus').find(":selected").val();
                xhttp.send();
            }
        }

        function UpdateSaleInvoice() {

            var myTrows = [];
            var table = document.getElementById("ProductSaleTable");
            var myRow2 = [];

            //alert(sp);
            $('#ProductSaleTable tr').each(function (row, tr) {

                myTrows[row] = [

                    $(tr).find('td:eq(0)').text(), //productID
                    $(tr).find('td:eq(3)').text(), //salePrice
                    $(tr).find('td:eq(4) input[type="text"]').val(), //qty
                    $(tr).find('td:eq(5) input[type="text"]').val(), //discount
                    $(tr).find('td:eq(6)').text() //totamount


                ];


            });
            myTrows.shift();

            //var invoiceNumber=getInvoiceID();
            var tot = document.getElementById("Total").value;
            var customerName = $('#CustomerName').find(":selected").text();
            var contact = document.getElementById('CNO').value;
            var discount = document.getElementById('DiscountOverall').value;
            if (discount == "") {

                discount = 0;
                document.getElementById('DiscountOverall').value = 0;

            }
            var invoiceID = document.getElementById('InvoiceID').value;
            var gross = document.getElementById('grossTotal').value;
            var tax = document.getElementById('tax').value;
            var netTotal = document.getElementById('NetTotal').value;
            var amp = document.getElementById('AmountPaid').value;
            var rmb = document.getElementById("RemainingBalance").value;
            var CID = document.getElementById("CID").value;
            var CLB = document.getElementById("LastBalance").value;
            var CCB = document.getElementById("CurrentBalance").value;
            var AID = $('#accounts').find(":selected").val();

            myRow2 = [myTrows, tot, discount, gross, tax, netTotal, amp, rmb, CID, CLB, CCB, AID, customerName,
                contact
            ];

            //alert(myRow2[0][1]);
            //alert(myRow2[11]);


            var array = JSON.stringify(myRow2);



            var xhttp = new XMLHttpRequest();
            

            
            if (AID == "") {
                alert("Payment Method not selected");

            } else {

                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        alert("Invoice =" + this.responseText + " is generated");
                        window.open("/ssi");

                    }
                };

                xhttp.open("GET", "./updateInvoice/" + array + "/" + invoiceID, true);
                // var MenuID=$('#Menus').find(":selected").val();
                xhttp.send();
            }
        }

    </script>
</body>

</html>
