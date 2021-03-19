<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        table th,
        td {
            border: 1px solid rgb(202, 202, 202);
            padding: 5px;
        }

        .stockLabels label {
            width: 235px;
        }

        .stockLabels {
            padding: 20px 10px;
            border-radius: 10px;
            border: 1px solid rgb(202, 202, 202);
        }

        .stock-table {
            border-radius: 10px;
            padding: 10px;
        }

        .containerMy {
            max-width: 1400px;
            margin: 0 auto;

        }
    </style>
</head>

<body onload="searchRawMatirial()">

    <header class="idi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="mt-3">Menu Updation</h3>
                </div>
            </div>

        </div>
    </header>
    <br>
    <section class="mt-5">
        <div class="containerMy">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="stock-table"
                        style="height: 550px; border: 1px solid rgb(202, 202, 202); overflow: auto;">
                        <table style="width: 100%;" id="stocktable">
                            <thead>
                                <tr ondblclick="SetStockIdeal()">

                            
                                    <th>Id</th>
                                    <th>Menu Name</th>
                                       
                                    
                                    
                                        <th>Description</th>
                                        <th>SalePrice</th>
                                    


                                </tr>
                            </thead>
                            <tbody id="stocktableBody">
                                <!-- data wil be from databse -->
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-md-4 stockLabels">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="stockid"><br><br>
                    <label for="id">Menu Name</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="Name"><br><br>
                    <label for="id">Description</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="PDescription"><br><br>
                    <label for="id">Sale Price</label>
                    <input type="text" class="form-control" style="display: inline-block; width: 200px !important;"
                        name="id" id="Saleprice"><br><br>
                    <div class="st-button  " style="margin-top: 15px; margin-left: 362px;">
                        <button class="btn btn-success" onclick="SetStockIdeal()" >Update </button>
                        <button class="btn btn-success" onclick="Deletion()" >Delete </button>
                        <!-- <button class="btn btn-success" onclick="DeleteStock()" >Delete </button> -->
                        <div class="col-md-4 ">
                    
                    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="searchModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            
                            







    <!--end::Demo Panel-->

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>
    <script>
        $(document).ready(function () {
            $('#stocktable').DataTable();
        });
    </script>
    <!--end::Global Theme Bundle-->

<script>

function searchRawMatirial() {
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       var data =   this.responseText;
       //alert(data);
       var table;
       var a=JSON.parse(data);
       
       table = $('#stocktable').DataTable(); 
        
       $.each(a, function(i, item) {
             table.row.add([ a[i].ProductSerial, a[i].ProductName, a[i].description ,a[i].SalePrice ]);
         });   
         table.draw();      
         
         
    }
  };
  
  xhttp.open("GET", "./fetchAllmenu/", true);
  xhttp.send();
}
$("#stocktable").on('click','tr',function(){

     document.getElementById("stockid").value=this.cells[0].innerText; 
     document.getElementById("Name").value=this.cells[1].innerText;
  
     
     document.getElementById("PDescription").value=this.cells[2].innerText;
     
     document.getElementById("Saleprice").value=this.cells[3].innerText;
     
}
);

function SetStockIdeal() {
    
    var ID=document.getElementById("stockid").value;
   // alert("updated  "+ID);
    var Name=document.getElementById("Name").value;
   // alert("updated  "+Name);
    
    var PDesc=document.getElementById("PDescription").value;
    //alert("updated "+UPrice);
    
    var Psale=document.getElementById("Saleprice").value;
    //alert("updated "+Spurches);
       
    var UpDAte = [ID,Name,PDesc,Psale];

   

//alert (UpDAte);
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {


alert(this.responseText);
var table=$('#stocktable').DataTable(); 
table.clear();
table.draw();
searchRawMatirial();

}
}
var EC=JSON.stringify(UpDAte);
xhttp.open("GET", "./updateDes/"+EC, true);
xhttp.send();
};



function Deletion()
{
    var ID=document.getElementById("stockid").value;
   // alert("updated  "+ID);

   

   var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {


    //this is success
    
}

}
    
xhttp.open("GET", "./DelId/"+ID, true);
xhttp.send();


};

</script>


    
</body>

</html>