<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class StockUpdateController extends Controller
{
    public function UpdateInStock(Request $request,$table){
         $obj = json_decode($table);

         $IDstock=$obj[0];
         $StockName=$obj[1];
       
         $UnitPrice=$obj[2];
        
         $Salepurches=$obj[3];

        
         self:: instock($IDstock,$StockName,$UnitPrice, $Salepurches);
         self:: UpdateProductName($StockName,$IDstock);

      // return "Getting from controller";
    
    }
    
        public function instock(
            $stockId,
            $stockName,
            
            $unitprice,
            $salepurches
    
            
            ){
              
                $qr="UPDATE   instock   SET    ";
                $qr=$qr."PerUnitPurchasePrice=".$unitprice.",AverageSalePricePerUnit=".$salepurches;

                $qr=$qr." WHERE  ProductSerial=".$stockId;
                $affected = DB::update($qr);
                
        
              //  print("Number of Rows Affacted".$affected);
                
            
        
                
    

        }
        public function UpdateProductName( 
            $PName,
            $PiD
            
            ){
          
   
           
                            
            
            
            $qr="UPDATE   productdefination   SET   ProductName='".$PName."'";
            
            $qr=$qr." WHERE  ProductSerial=".$PiD;
            $affected = DB::update($qr);
            
            
        
       
       }
    }

