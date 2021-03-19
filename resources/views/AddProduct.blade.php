<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Add Product</title>
    <style>
        fieldset {
            border: 1px solid #333;
            /* width: 100%; */
            padding: 20px;
        }

        legend {
            width: auto;
            /* padding-left: 50px; */
            /* border: 1px solid #333; */
        }

        #cat {
            width: 182px;
            /* margin-left: 18px; */
        }

        .NewBtn {
            padding: 0px 10px;
            margin-top: -3px;
        }

        label {
            width: 155px;
        }

        .pInform {
            padding: 100px 20px;
        }

        .btn-clear-1 {
            background-color: #fbaf32;
            color: #fff;

        }

        .btn-clear {
            background-color: blue;
            color: #fff;
        }

        .addPro-Buttons {
            float: right;
            margin-top: 20px;
        }
    </style>
</head>

<body onload="getAllCategories()">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Add Product</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <fieldset>
                    <legend>Product Information</legend>
                    <label for="pName">Product Name</label>
                    <input type="text" name="pName" id="ProductName"><br>
                    <label for="cat">Category</label>
                    <select name="cat" style="height: 30px;" id="ProductCategory">
                       <!-- this is comming from database -->
                    </select>
                    <br>
                    <!-- <label for="sub category">Sub Category</label>
                    <input type="text" name="pName" id="SubCategory"><br> -->
                    <label for="company">Description</label>
                    <input type="text" name="pName" id="ProDescription"><br>
                    <!-- <label for="product barcode">Product Barcode</label>
                    <input type="text" name="pName" id="Pbarcode"><br>
                    <label for="product remarks">Product remarks</label>
                    <input type="text" name="pName" id="Productremarks"><br> -->




                    <!-- <button class="btn btn-primary NewBtn">New</button> -->
                </fieldset>
                <!-- <fieldset class="pInform">
                    <legend>Price Information</legend>
                    <label for="sale price">Sale Price</label>
                    <input type="text" name="pName" id="saleprice"><br>
                    <label for="purchase price">Purchase Price</label>
                    <input type="text" name="pName" id="purchaseprice"><br> -->

                    <!-- <button class="btn btn-primary NewBtn">New</button> -->
                </fieldset>
                <div class="addPro-Buttons">
                    <a href="#" class="btn btn-clear-1">Clear</a>
                    <button href="#" class="btn btn-clear" onclick="AddProduct()">Save</button>
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
<script>

function AddProduct(){

    var ProductName=document.getElementById("ProductName").value;
		//alert("acceptable"+ProductName);

        var ProductCat=document.getElementById("ProductCategory").value;
		//alert("acceptable"+ProductCat);

        var Productsubcat=document.getElementById("SubCategory").value;
		//alert("acceptable"+Productsubcat);


        var ProductDes=document.getElementById("ProDescription").value;
		//alert("acceptable"+ProductDes);

        var Productbarcode=document.getElementById("Pbarcode").value;
		//alert("acceptable"+Productbarcode);

        var Productremarks=document.getElementById("Productremarks").value;
		//alert("acceptable"+Productremarks);

        var Productsaleprice=document.getElementById("saleprice").value;
		//alert("acceptable"+Productsaleprice);

        var ProductPurchaseprice=document.getElementById("purchaseprice").value;
		//alert("acceptable"+ProductPurchaseprice);

        var Customer = [ProductName,ProductCat,Productsubcat,ProductDes,Productbarcode,Productremarks,Productsaleprice,ProductPurchaseprice];


        var xhttp = new XMLHttpRequest();
 	 xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //alert( this.responseText);
    }
  };
  var EC=JSON.stringify(Customer);
  xhttp.open("GET", "./adp/"+EC, true);
  
  xhttp.send();


	};
    
    
	function getAllCategories(){



var xhttp = new XMLHttpRequest();


xhttp.onreadystatechange = function () {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("ProductCategory").innerHTML = this.responseText;




}

};

xhttp.open("GET", "./fetchCategoriesInOptions", true);
xhttp.send();
}
	










</script>
</body>

</html>