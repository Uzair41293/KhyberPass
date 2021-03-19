<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\loyaltyManagmentController;
use Carbon\Carbon;
use DB;

class salesflowController extends Controller
{
    public function salesflowCheckout(Request $request,$CO)
{
    $obj=json_decode($CO);
    $dateNow= Carbon::now()->toDateTimeString();
    $discounts=$obj[0];
    $coinsUsed=$obj[1];
    $netTotal=$obj[2];
    $CustomerName=$obj[3];
    $dlAdress=$obj[4];
    $dlcontactNo=$obj[5];
    $dlPerson=$obj[6];
    $orderDetails=$obj[7];
    $CID=$obj[8];
    // var salesflowinfo = [discount, coinsUsed, netTotal, customerName, customeradd, customercon,
    // deliverTo, OrderInDetails,CID
    // ];
    // // $CID=DB::table('customeinformation')->insertGetId(['CustomerName'=>$CustomerName,
    // 'Address'=>$CustomerAdd,
    // 'Contect'=>$CustomerCont
    
    // ]);

    
    $SID=DB::table('tblsaleinvoice')->insertGetId(['TotalAmount'=>$netTotal,
    'VAT'=>'0',
    'Discount'=>$discounts,
    'NetTotal'=>$netTotal,
    'CustomerID'=>$CID,
    'DateStamp'=>$dateNow,
    'ReceiversNames'=>$dlPerson,
    'ReceiversContact'=>$dlcontactNo,
    'ReceiversAddress'=>$dlAdress,
    'CoinsUsed'=>$coinsUsed,
    'BillStatus'=>"ACTIVE"
    ]);
    
    foreach ($orderDetails as $Product) {

    $DSID=DB::table('tblsaledetailedinvoice')->insertGetId(['ProductSerial'=>$Product[0],
    'SalePrice'=>$Product[1],
    'Quantity'=>$Product[2],
    'TotalAmount'=>$Product[3],
    'InvoiceNumber'=>$SID,
    'DateStamp'=>$dateNow
    ]);}
    //self:: tblsaleinvoice($saleTot,$saleDis,$saletax,$saleNetTtl,$CustomerName,$CustomerAdd,$CustomerCont);

      $TID=  self:: tblTransectionflow($SID,$netTotal,$dateNow,"1","Sales");
        session(['OrderID' => $SID]);
      session(['OrderTime' => $dateNow]);
      loyaltyManagmentController::billToRewardsConversion($netTotal,$TID);
      return "You order No is = ".$SID;
   

}
public Function tblTransectionflow(
    $TInvoiceNo,
    $TAmount,
    $TDateStamp,
    $TUserID,$TCAT
    ){
    $TFID=DB::table('tbltransactionflow')->insertGetId(['InvoiceNo'=>$TInvoiceNo,
    'Amount'=>$TAmount,
    'DateStamp'=>$TDateStamp,
    'UserID'=>$TUserID,
    'TransactionCatogery'=>$TCAT
    ]);
    return $TFID;

    }
    

}



