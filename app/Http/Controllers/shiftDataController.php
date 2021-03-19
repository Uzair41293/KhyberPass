<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shiftDataController extends Controller
{
    public  function transferOrderToReview (Request $request,$data)
    {
        //fortimer
        $htmlCode="";
        $productName="Tikka";
        $Array=json_decode($data);
       // console.log($Array);
        foreach ($Array as $value)
        {
            
            // $(tr).find('td:eq(0)').text(), //Sr
            // $(tr).find('td:eq(1)').text(), //Pname
            // $(tr).find('td:eq(2)').text(), //price
            // $(tr).find('td:eq(3) input[type="number"]').val(), //qty
            // $(tr).find('td:eq(4)').text(), //tot
            // $(tr).find('td:eq(5)').text() //PID

            $htmlCode=$htmlCode.' <div id="shiftCards" class="card">
            <div class="myCard" onclick="showdata(this)">

                <div class="cardImg" id="myIMG">
                    <img src="assets/images/blog3.jpg"
                        style="height: 70px; width: 70px; border-radius: 10px;" alt="">
                </div>
                <div class="cardContent">
                    <h6>'.$value[1].'
                  
                    </h6>
                    <p>A fine selection of tender lamb chops, sprinkled barbecue grill.</p>
                </div>

                <div class="cardMainPrice">
             
           
                   
                <input type="text" class="form-control" value='.$value[5].' style="width: 50px; display:none" name="" id="productSerial">

                <input type="text" class="form-control" value="'.$value[2].'" style="width: 50px; display: inline-block" name="" id="ProPrice">
             
                <input type="number" class="form-control" value="'.$value[3].'" style="width: 50px; display: inline-block" name="" id="ProQuantity" onchange="productWiseTotal(this)">   
               <input type="text" class="form-control" value="'.$value[4].'" style="width: 50px; display: inline-block" name="" id="Prototal">
            
                </div>
                <div class="cardButtons hidemeplz">
                   

                </div>
                <div class="cardPricing">
                    <h1 id="CloseMe" onclick="removeCard(this)"   class="text-right ">&times;</h1>
                

                    <!-- <span>£<del>94.99</del></span> -->

                </div>
            </div>
        </div>';
            
        }
        session(['orderReview' => $htmlCode]);
       // return $htmlCode;
        
    }
}

?>