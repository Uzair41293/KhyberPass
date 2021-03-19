<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomerController;
use DB;


class salesFlow extends Controller
{
    public function SalesFlow(Request $request,$data){

        $Array=json_decode($data);
        $tot=$Array[1];
        $OverAllDiscount= $Array[2];
        $AmountAfterDiscount=$Array[3];
       $tax =$Array[4];
        $netTotal=$Array[5];
        $AP=$Array[6];
        $RBI=$Array[7];
         $CID=$Array[8];
         $CLB=$Array[9];

         $CCB=$Array[10];
         
         $dateNow= Carbon::now()->toDateTimeString();//->format('Y-m-d h:iA');
       // $d= Carbon::createFromFormat('dd/mm/YYYY HH:MM:SS', $dateNow);
         //return $dateNow;
        
          //tot,discount,gross,tax,netTotal,amp,rmb,CID,CLB,CCB
        //insert into sales order
        $invoiceNumber=DB::table('tblsaleinvoice')->insertGetId(['CustomerID'=>$CID,
        'TotalAmount'=>$tot,
        'Discount'=>$OverAllDiscount,
        'DateStamp'=>$dateNow,
        'VAT'=>$tax,
        'NetTotal'=>$netTotal,
        'AmountPaid'=>$AP,
        'Balance'=>$RBI,
        'BillStatus'=>"CLEAR",
        'HoldStatus'=>'0',
        'CustomerBalanceBeforeInvoiceBill'=>$CLB,
        'CustomerBalanceAfterInvoiceBill'=>$CCB,
        'CashPaidBack'=>NULL,
        'CashNote'=>NULL,
        'Remarks'=>NULL,
        'dliveryDate'=>NULL,
        'returnDate' =>NULL
        
        ]);

        
        self::insertInDetailedOrder($Array[0],$invoiceNumber,$dateNow);
        self::addInTransactionFlowForSales($invoiceNumber,$dateNow,$AP,"1",NULL,$CLB,$CCB);
        



     
       
        //insert into order details
        //inster in transaction Flow
        //update customer balance
        //frf
    }
    public function insertInDetailedOrder($OrderDetails,$InvoiceID,$date){
      foreach ($OrderDetails as $row){

      $DSID=DB::table('tblsaledetailedinvoice')->insertGetId(['InvoiceNumber'=>$InvoiceID,
      'ProductSerial'=>$row[0],
      'SalePrice'=>$row[1],
      'Quantity'=>$row[2],
      'DiscountOffered'=>$row[3],
      'DateStamp'=>$date,
      
      'TotalAmount'=>0,
      'NetAmount'=>$row[4],
      
      'Activity'=>"Sales",
      'RentedDays'=>0

      ]);
      }
      session(['OrderID' => $invoiceNumber]);
      session(['OrderTime' => $dateNow]);
      return "You order No is = ".$invoiceNumber;
      

    }
    public function addInTransactionFlowForSales($invoiceNumber,$dateNow,$AP,$userID,$pattyCash,$CLB,$CCB){

      // [TransactionID]
      
      $TID=DB::table('tblTransactionFlow')->insertGetId(['InvoiceNo'=>$invoiceNumber,
     // 'TransactionCatogery'=>"Sales",
      'Amount'=>$AP,
      'DateStamp'=>$dateNow,
      'UserID'=>$userID,
      'PattyCash'=>$pattyCash,
      
      'SBB'=>NULL,
      'SBA'=>NULL,
      'CBB'=>$CLB,
      'CBA'=>$CCB
      
      
      
      
      
      
      ]);



    }

}
