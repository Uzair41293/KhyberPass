<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class menuController extends Controller
{
    public function fetchMenu($CID){


        $results=DB::select('select * from  vw_stockdetails where Category='.$CID);
        
        $menuCard="";
        foreach ($results as $ro){
            
            $menuCard=$menuCard.'<div class="card">
            <div class="myPare">
            <div class="item-5">
            <img src="./img/khyberpass_menustarter.jpg" class="img-fluid" style="height:70px;width:70px;border-radius:10px;" >
            </div>
                <div class="item-1">
               
                    <!-- <h5 id="demo"></h5> -->
                    <h5>'.$ro->ProductName.'<input type="text" style="width: 100px;" value=\''.$ro->ProductName.'\' name=""
                            id="pname"><input type="text" value='.$ro->ProductID.' style="width: 100px;" name=""
                            id="pid"> <input style="width: 100px;" value='.$ro->PerUnitSalePrice.' type="number" name=""
                            id="salePrice"><input style="width: 100px;" value='.$ro->PerUnitSalePrice.' type="text" name=""
                            id="inp-4"></h5>
                    <p></p>
                </div>

                <div class="item-3">
                    <div class="itemPricing">
                        <div id="demo-2">£'.$ro->PerUnitSalePrice.'</div>
                    </div>

                </div>
                <div class="item-4">
                    <button class="btn btn-success" onclick="addItem(this)" value="Increment Value">Add</button>

                </div>
            </div>
        </div>';
        }




        return $menuCard;
    }
    function getCategories(){
        $results=DB::select('select * from  tblpcategory');
        $pill="";
        
        foreach ($results as $ro){
            $pill=$pill.'
        <li class="nav-item">
        <a class="nav-link active" id="pills-Starter-tab" data-toggle="pill" href="#pills-Starter"
            role="tab" aria-controls="pills-Starter" aria-selected="true"
             onclick="FetchMenu('.$ro->PCID.')
             ">'.$ro->CategoryName.'</a> </li>';
        }
        return $pill;
   
    }
    function getCategoriesForSelectMenu(){
        $results=DB::select('select * from  tblpcategory');
        $options="";
        
        foreach ($results as $ro){
            $options=$options.'<option value='.$ro->PCID.'>'.$ro->CategoryName.'</option>';
        }
        return $options;
    }
   
    public function fetchAllMenu(){


        $results=DB::select('select * from  vw_stockdetails');
        
       
       




        return $results;
    }
}
