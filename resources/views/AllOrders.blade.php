<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <title>KHYBER PASS</title>
    <style>
        table,
        th,
        td {
            border: 1px solid#aaaaaa !important;
            text-align: center;




        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container">


            <a class="navbar-brand" href="#">KHYBER PASS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">


                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="newMenu.html">Order Again</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign Out</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <section class="YourOrders mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Welcome Rayan</h4>
                    <p>Your Orders Are :</p>
                </div>
            </div>
        </div>

    </section>
    <section class="my-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">

                    <table style="width: 100%;" id="myTable">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Order ID</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>10/10/2020</td>
                                <td>1211</td>

                                <td>1200</td>
                                <td>In Progress</td>
                                <td><a href="orderReview.html">View Details</a></td>

                            </tr>
                            <tr>
                                <td>10/10/2020</td>
                                <td>1211</td>

                                <td>1200</td>
                                <td>In Progress</td>
                                <td><a href="#">View Details</a></td>

                            </tr>
                            <tr>
                                <td>10/10/2020</td>
                                <td>1211</td>

                                <td>1200</td>
                                <td>In Progress</td>
                                <td><a href="#">View Details</a></td>

                            </tr>
                            <tr>
                                <td>10/10/2020</td>
                                <td>1211</td>

                                <td>1200</td>
                                <td>In Progress</td>
                                <td><a href="#">View Details</a></td>

                            </tr>
                            <tr>
                                <td>10/10/2020</td>
                                <td>1211</td>

                                <td>1200</td>
                                <td>In Progress</td>
                                <td><a href="#">View Details</a></td>

                            </tr>
                            <tr>
                                <td>10/10/2020</td>
                                <td>1211</td>

                                <td>1200</td>
                                <td>In Progress</td>
                                <td><a href="#">View Details</a></td>

                            </tr>
                            <tr>
                                <td>10/10/2020</td>
                                <td>1211</td>

                                <td>1200</td>
                                <td>In Progress</td>
                                <td><a href="#">View Details</a></td>

                            </tr>
                            <tr>
                                <td>10/10/2020</td>
                                <td>1211</td>

                                <td>1200</td>
                                <td>In Progress</td>
                                <td><a href="#">View Details</a></td>

                            </tr>
                            <tr>
                                <td>10/10/2020</td>
                                <td>1211</td>

                                <td>1200</td>
                                <td>In Progress</td>
                                <td><a href="#">View Details</a></td>

                            </tr>
                            <tr>
                                <td>10/10/2020</td>
                                <td>1211</td>

                                <td>1200</td>
                                <td>In Progress</td>
                                <td><a href="#">View Details</a></td>

                            </tr>
                            <tr>
                                <td>10/10/2020</td>
                                <td>1211</td>

                                <td>1200</td>
                                <td>In Progress</td>
                                <td><a href="#">View Details</a></td>

                            </tr>
                            <tr>
                                <td>10/10/2020</td>
                                <td>1211</td>

                                <td>1200</td>
                                <td>In Progress</td>
                                <td><a href="#">View Details</a></td>

                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </section>







    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="assets/js/datatables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>