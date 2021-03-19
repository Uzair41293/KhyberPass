<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khyber Pass | Menu</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <style>
        body{
             background-image: url({{asset('assets/images/banner.png')}});
        }
        .myCross{
            color: #EA2027;
        }
        .myCross:hover {
            cursor: pointer;
           
        }

        .myPare {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            width: 100%;
        }

        .item-1 {
            width: 80%;
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

            border-radius: 15px;
        }



        .nav-pills .nav-link,
        .nav-pills .show>.nav-link {
            margin: 10px 10px;
            color: #EA2027 !important;
            font-weight: 700;
            -webkit-box-shadow: 10px 10px 29px -9px #EA2027;
            -moz-box-shadow: 10px 10px 29px -9px #EA2027;
            box-shadow: 10px 10px 29px -9px #EA2027;
            animation: MoveUpDown 2s linear infinite;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #EA2027 !important;
            background-color: none !important;
            background: none !important;
            border: 3px solid #EA2027;
            border-radius: 10px;




        }

        .nav-pills .nav-link {
            border-radius: 15px;
        }

        .myOwnNavbar {
            display: block;
            margin: 0 auto;
            max-width: 1100px;
            /* background-color: #ffffff; */

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
            /* background: rgb(255, 255, 255); */
            /* background: radial-gradient(circle, rgba(255, 255, 255, 1) 0%, rgb(97, 94, 88) 100%); */
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

        .footerValues {
            display: inline-block !important;
        }

        .footerValues {
            width: 130px;
        }

        .footerValues li:nth-child(2) {
            margin-left: 10px !important;
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

        ul {
            list-style: none !important;
        }

        .page-link {
            padding: 3px !important;
        }

        input#textbox {
            width: 24px;

        }

        .card {
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
        }

        body {
            /* background-color: #fdc84a;m= */
        }

        .item-1 h5 {
            color: #EA2027;
            font-weight: 700;
            font-size: 30px;
        }

        .item-1 p {
            color: rgb(255, 174, 0);
            font-size: 20px;
        }

        .item-1 input {
            display: none;
        }

        .fade {
            transition: .3s !important;
        }




        @media only screen and (max-width: 600px) {
            .item-1 p {
                display: none;
            }

            .item-1 h5 {
                color: #EA2027;
                font-weight: 500;
                font-size: 20px;
                margin-top: 15px;
            }

            .nav-pills .nav-link,
            .nav-pills .show>.nav-link {
                margin: 20px 10px;
                color: #EA2027 !important;
                font-weight: 700;
                -webkit-box-shadow: 10px 10px 29px -9px #EA2027;
                -moz-box-shadow: 10px 10px 29px -9px #EA2027;
                box-shadow: 10px 10px 29px -9px #EA2027;
                animation: MoveUpDown 2s linear infinite;
            }
        }

    </style>
    <!-- <link rel="stylesheet" href="assets/css/style-starter.css"> -->



</head>

<body onload="getAllCategories()">

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Our Menu</h2>
            </div>
        </div>
    </div>

    <header>
        <div class="myOwnNavbar">
            <ul class="nav nav-pills justify-content-center py-4" id="pills-tab" role="tablist">


            </ul>
        </div>

        <div class="container">
            <div class="modal left fade bd-example-modal-md" style="overflow: hidden;" id="exampleModal" tabindex="-1"
                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content" id="backgroundC">
                        <div class="modal-header">
                            <h5 class="modal-title" style="font-weight: 800; color: #ffffff;" id="exampleModalLabel">
                                Your Order
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="background-color: #ffffff; height: 350px; overflow: auto;">


                            <table class="table table-striped text-center " style="padding: 10px;" id="cartTable">
                                <thead style="border-bottom: 1px solid #ffffff;">
                                    <tr>
                                        <th>Sr</th>
                                        <th>Product</th>
                                        <th>Price

                                        </th>
                                        <th>quantity</th>
                                        <th>Total</th>
                                        <th>Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- this is from java script -->
                                </tbody>
                            </table>


                        </div>
                        <div class="modal-footer">

                            <div class="myFooter">
                                <div class="footerLeft">
                                    <ul>
                                        <div class="footerValues">
                                            <li>Total</li>
                                            <li id="TotalPrices">500</li>
                                        </div>
                                        <div class="footerValues">
                                            <li>Tax</li>
                                            <li id="Tax">500</li>
                                        </div>
                                        <div class="footerValues">
                                            <li>Net Total</li>
                                            <li id="netTotal">.5%</li>
                                        </div>



                                    </ul>

                                </div>

                            </div>
                            <div class="footerbtns" style="float: right;">
                                <button class="btn btn-success" onclick="checkoutReview()">CheckOut</button>
                                <button data-dismiss="modal" class="btn btn-danger">Cancel</button>
                            </div>
                            <div class="clear" style="clear: both;"></div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-content" id="pills-tabContent">
            </div>
        </div>
    </header>



    <button id="movetop" data-toggle="modal" data-target="#exampleModal" title="Go to top">
        <span class="fas fa-shopping-cart" aria-hidden="true"></span>
        <input type="button" value="0" id="number">

    </button>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="assets/js/all.js"></script>
    <script>

    </script>
    <script>
        function addIncrement(ele) {
            // alert(ele);
            var pNode = ele.parentNode.parentNode;
            var qty = pNode.getElementsByTagName("input")[0].value;
            qty = qty + 1;
            pNode.getElementsByTagName("input")[0].value = qty;

        }

    </script>
    <script>

    </script>
    <script>
        function addItem(ele) {
            $('#exampleModal').modal('show');

            setTimeout(function () {
                $('#exampleModal').modal('hide');
            }, 2000);





            var value = parseInt(document.getElementById('number').value);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('number').value = value;
            // alert(ele);
            var pNode = ele.parentNode.parentNode;

            //var qty = pNode.getElementsByTagName("input")[0].value;
            var pname = pNode.getElementsByTagName("input")[0].value;


            var pid = pNode.getElementsByTagName("input")[1].value;
            var Uprice = pNode.getElementsByTagName("input")[2].value;
            var Totalprice = pNode.getElementsByTagName("input")[3].value;

            var table = document.getElementById("cartTable");
            var row = table.insertRow(-1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);

            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            var cell7 =row.insertCell(6);

            cell1.innerHTML = value;

            cell2.innerHTML = pname;
            cell3.innerHTML = Uprice;
            cell4.innerHTML =
                '<input type="number" onchange="multiply(this)" id="qtyVal" min="0"  value="1" style="border:none !important;">';
            // cell6.innerHTML = pid;
            // pid is working you can use   alert(pid);

            cell5.innerHTML = Totalprice;
            cell6.innerHTML = '<h3 class="myCross" onclick="deleteRow(this)" >&times</h3>';
            cell7.innerHTML=pid;
           // cell7.display=none;
            var result = Totalprice;
            var mainCalc = document.getElementById("TotalPrices");


            mainCalc = result;
            calculation();
            //k();



        }



        function multiply(x) {
            var theRow = x.parentElement.parentElement;


            var price = theRow.cells[2].innerText;
            var qtyValue = theRow.cells[3].children[0].value;
            var showProduct = parseInt(price) * parseInt(qtyValue);
            theRow.cells[4].innerHTML = showProduct;
            calculation();




        }

        function deleteRow(deleted) {
            var del = deleted.parentNode.parentNode;
            del.remove();
        }

    </script>
    <script>
        function calculation() {
            var calcTable = document.getElementById("cartTable");

            var rows = calcTable.rows;
            var total = 0;
            var cell;

            // Assume first row is headers, adjust as required
            // Assume last row is footer, addjust as required
            for (var i = 1, iLen = rows.length; i < iLen; i++) {
                cell = rows[i].cells[4];
                total += Number(cell.textContent || cell.innerText);
            }

            document.getElementById('TotalPrices').innerText = total.toFixed(2);
            //alert(total.toFixed(2));
            var taxRate = 0;
            var tax = (Number(taxRate / 100) * Number(total));
            var NetTotal = tax + total;
            document.getElementById('Tax').innerText = tax.toFixed(2);
            document.getElementById('netTotal').innerText = NetTotal.toFixed(2);




        }

    </script>
    <script>
        function FetchMenu(CID) {
            var xhttp = new XMLHttpRequest();


            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("pills-tabContent").innerHTML = this.responseText;
                    // alert();
                    calculation();


                }

            };

            

            xhttp.open("GET", "./fetchMenu/" + CID, true);
            xhttp.send();



        };

        function getAllCategories() {



            var xhttp = new XMLHttpRequest();


            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("pills-tab").innerHTML = this.responseText;
                    FetchMenu(11);



                }

            };

            xhttp.open("GET", "./fetchCategories", true);
            xhttp.send();
        }






        function checkoutReview() {





            var myTrows = [];
            var table = document.getElementById("cartTable");
            var myRow2 = [];

            //alert(sp);
            $('#cartTable tr').each(function (row, tr) {

                myTrows[row] = [

                    $(tr).find('td:eq(0)').text(), //Sr
                    $(tr).find('td:eq(1)').text(), //Pname
                    $(tr).find('td:eq(2)').text(), //price
                    $(tr).find('td:eq(3) input[type="number"]').val(), //qty
                    $(tr).find('td:eq(4)').text(), //tot
                    $(tr).find('td:eq(6)').text() //PID


                ];



        });
        myTrows.shift();
        //alert(myTrows);
        var xhttp = new XMLHttpRequest();



            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {



                   // alert(this.response);
                    location.href = "./orev";



                }

            };
            var array = JSON.stringify(myTrows);
            xhttp.open("GET", "./checkOutOrder/" + array, true);
            xhttp.send();




        }

    </script>

</body>

</html>
