<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\salesflow;
use DB;
class tblsaleinvoice extends Controllers
{
public function salesflowCheckout(Request $request,$CO)
{
    $obj=json_decode($CO);
    $saleTot=$obj[0];
    $saleDis=$obj[1];
    $saletax=$obj[2];
    $saleNetTtl=$obj[3];
    $CustomerName=$obj[4];
    $CustomerAdd=$obj[5];
    $CustomerCont=$obj[6];
   

    $CID=DB::table('customeinformation')->insertGetId(['CustomerName'=>$CustomerName,
    'Address'=>$CustomerAdd,
    'Contect'=>$CustomerCont
    
    ]);
    

    $SID=DB::table('tblsaleinvoice')->insertGetId(['TotalAmount'=>$saleTot,
    'VAT'=>$saletax,
    'Discount'=>$saleDis,
    'NetTotal'=>$saleNetTtl
    ]);
    self:: tblsaleinvoice($saleTot,$saleDis,$saletax,$saleNetTtl,$CustomerName,$CustomerAdd,$CustomerCont);

    return "Getting from controller".$obj[0];
}



}
