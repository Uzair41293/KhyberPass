<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class orderViewController extends Controller
{

    public function setPreparedOrders($id){

        DB::table('tblsaleinvoice')
        ->where('InvoiceNumber', $id)
        ->update([
        
        'BillStatus'=>"PREPARED"
        ]);
      
      return "Order Is Prepared";
    }
    
   public function PlaceOrder($id){

        DB::table('tblsaleinvoice')
        ->where('InvoiceNumber', $id)
        ->update([
        
        'BillStatus'=>"PREPARING"
        ]);
      
      return "Order Is Being Prepared";  
     }
   

    public function setDelivered($id){

        DB::table('tblsaleinvoice')
        ->where('InvoiceNumber', $id)
        ->update([
        
        'BillStatus'=>"DELIVERED"
        ]);
      
      return "Order is Delivered";
    }

    public function receivedOrders($id){

        DB::table('tblsaleinvoice')
        ->where('InvoiceNumber', $id)
        ->update([
        
        'BillStatus'=>"RECEIVED"
        ]);
      
      return "Order Is Received";
    }






    public function getOrders(){
        $dateNow= Carbon::now()->toDateString();
         //dd($dateNow);
        $dateStart= '2010-01-28 00:00:00';//date('d-m-y').' 00:00:00';
        $dateEnd= '2021-03-23 23:59:59';;//date('d-m-y').' 23:59:59';
       // dd($dateStart);
        $InvoiceNo=146;
        $Allcards="";
       // $card="";
       $invoiceDetails=DB::select('select * from tblsaleinvoice where DateStamp between "'.$dateStart .'"and"'.$dateEnd.'" and BillStatus="ACTIVE"');
                                
//dd($data);
foreach ($invoiceDetails as $obj){
    $productDetails=DB::select('select * from vw_customersale_invoice where BillStatus='.$obj->InvoiceNumber);
    $innerProducts='';
    foreach($productDetails as $p){
      $innerProducts=$innerProducts.'  
      <div class="card-body text-center">
          <ul>
              <li>
                  <div class="">
                      '.$p->ProductName.' &times; <strong style="color: red;"> '.$p->Quantity.'</strong>
                  </div></li>
                  </ul>
                 
                  
                     
      </div>';
    //   <div class="remarks">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
    //                   Commodi, reprehenderit.</div>
    }
    //$ProductName=$obj->ProductName;
    $contact=$obj->ReceiversContact;
    $customerName=$obj->ReceiversNames;
   
    
    $IN=$obj->InvoiceNumber;
    $TotalAmount=$obj->TotalAmount;

    $Allcards=$Allcards.'   
    <div class="col-md-4">
    <div class="card" id="FirstCard">
        <div class="card-header">
            <div style="font-weight: 900;  font-size: 19px; color: #ffffff;" class="cardHeader-left">
            Order Number#  '.$IN.'  <br>
            
            
            </div>
            <div style="font-weight: 900; font-size: /19px;  color: #ffffff;" class="cardHeader-right">
                
        
            </div>
            <div class="clear"></div>
        </div>
        <div class="card-header ">
            <div class="cardHeader-left" style="font-weight: 600;">
            
            </div>
            <div  style="font-weight: 600; class="cardHeader-left" >
            Customer Name:  '.$customerName.'
             </div>
            <div class="clear"></div>
        </div>
        <div class="card-header text-left" style="font-weight: 500;">
           Address  '.$obj->ReceiversAddress.'
        </div>

        '.$innerProducts.'
            Total Amount:'.$TotalAmount.'
        <div class="card-footer text-center">
            <button class="btn btn-danger">Cancel</button>
            <button class="btn btn-success" onclick="getID('.$obj->InvoiceNumber.')">Start</button>
        </div>
        </div>
        </div>
       
    
                '   
             ;
        }


        return $Allcards;
    }








    public function getPreparingOrders(){
        $dateNow= Carbon::now()->toDateString();
         //dd($dateNow);
        $dateStart= '2010-01-28 00:00:00';//date('d-m-y').' 00:00:00';
        $dateEnd= '2021-03-23 23:59:59';;//date('d-m-y').' 23:59:59';
       // dd($dateStart);
        $InvoiceNo=146;
        $Allcards="";
       // $card="";
       $invoiceDetails=DB::select('select * from tblsaleinvoice where BillStatus="PREPARING"');
                                
//dd($data);
foreach ($invoiceDetails as $obj){
    $productDetails=DB::select('select * from vw_customersale_invoice where InvoiceNumber='.$obj->InvoiceNumber);
    $innerProducts='';
    foreach($productDetails as $p){
      $innerProducts=$innerProducts.'  
      <div class="card-body text-center">
          <ul>
              <li>
                  <div class="">
                      '.$p->ProductName.' &times; <strong style="color: red;"> '.$p->Quantity.'</strong>
                  </div></li>
                  </ul>
                 
                  
                     
      </div>';
    //   <div class="remarks">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
    //                   Commodi, reprehenderit.</div>
    }
    //$ProductName=$obj->ProductName;
    $contact=$obj->ReceiversContact;
    $customerName=$obj->ReceiversNames;
   
    
    $IN=$obj->InvoiceNumber;
    $TotalAmount=$obj->TotalAmount;

    $Allcards=$Allcards.'   
    <div class="col-md-4">
    <div class="card" id="FirstCard">
        <div class="card-header">
            <div style="font-weight: 900;  font-size: 19px; color: #ffffff;" class="cardHeader-left">
            Order Number#  '.$IN.'  <br>
            
            
            </div>
            <div style="font-weight: 900; font-size: /19px;  color: #ffffff;" class="cardHeader-right">
                
        
            </div>
            <div class="clear"></div>
        </div>
        <div class="card-header ">
            <div class="cardHeader-left" style="font-weight: 600;">
            
            </div>
            <div  style="font-weight: 600; class="cardHeader-left" >
            Customer Name:  '.$customerName.'
             </div>
            <div class="clear"></div>
        </div>
        <div class="card-header text-left" style="font-weight: 500;">
           Address  '.$obj->ReceiversAddress.'
        </div>

        '.$innerProducts.'
            Total Amount:'.$TotalAmount.'
        <div class="card-footer text-center">
            <button class="btn btn-danger">Cancel</button>
            <button class="btn btn-success" onclick="getID('.$obj->InvoiceNumber.')">Prepared</button>
        </div>                             
        </div>
        </div>
       
    
                '   
             ;
        }


        return $Allcards;
    }











    public function getDeliveryPendingOrders(){
        $dateNow= Carbon::now()->toDateString();
         //dd($dateNow);
        $dateStart= '2010-01-28 00:00:00';//date('d-m-y').' 00:00:00';
        $dateEnd= '2021-03-23 23:59:59';;//date('d-m-y').' 23:59:59';
       // dd($dateStart);
        $InvoiceNo=146;
        $Allcards="";
       // $card="";
       $invoiceDetails=DB::select('select * from tblsaleinvoice where BillStatus="PREPARED"');
                                
//dd($data);
foreach ($invoiceDetails as $obj){
    $productDetails=DB::select('select * from vw_customersale_invoice where InvoiceNumber='.$obj->InvoiceNumber);
    $innerProducts='';
    foreach($productDetails as $p){
      $innerProducts=$innerProducts.'  
      <div class="card-body text-center">
          <ul>
              <li>
                  <div class="">
                      '.$p->ProductName.' &times; <strong style="color: red;"> '.$p->Quantity.'</strong>
                  </div></li>
                  </ul>
                 
                  
                     
      </div>';
    //   <div class="remarks">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
    //                   Commodi, reprehenderit.</div>
    }
    //$ProductName=$obj->ProductName;
    $contact=$obj->ReceiversContact;
    $customerName=$obj->ReceiversNames;
   
    
    $IN=$obj->InvoiceNumber;
    $TotalAmount=$obj->TotalAmount;

    $Allcards=$Allcards.'   
    <div class="col-md-4">
    <div class="card" id="FirstCard">
        <div class="card-header">
            <div style="font-weight: 900;  font-size: 19px; color: #ffffff;" class="cardHeader-left">
            Order Number#  '.$IN.'  <br>
            
            
            </div>
            <div style="font-weight: 900; font-size: /19px;  color: #ffffff;" class="cardHeader-right">
                
        
            </div>
            <div class="clear"></div>
        </div>
        <div class="card-header ">
            <div class="cardHeader-left" style="font-weight: 600;">
            
            </div>
            <div  style="font-weight: 600; class="cardHeader-left" >
            Customer Name:  '.$customerName.'
             </div>
            <div class="clear"></div>
        </div>
        <div class="card-header text-left" style="font-weight: 500;">
           Address  '.$obj->ReceiversAddress.'
        </div>

        '.$innerProducts.'
            Total Amount:'.$TotalAmount.'
        <div class="card-footer text-center">
            <button class="btn btn-danger">Cancel</button>
            <button class="btn btn-success" onclick="getID('.$obj->InvoiceNumber.')">Dispatch</button>
            </div>                             
        </div>
        </div>
        </div>
       
    
                '   
             ;
        }


        return $Allcards;
    }







    public function deliveredOrders(){
        $dateNow= Carbon::now()->toDateString();
         //dd($dateNow);
        $dateStart= '2010-01-28 00:00:00';//date('d-m-y').' 00:00:00';
        $dateEnd= '2021-03-23 23:59:59';;//date('d-m-y').' 23:59:59';
       // dd($dateStart);
        $InvoiceNo=146;
        $Allcards="";
       // $card="";
       $invoiceDetails=DB::select('select * from tblsaleinvoice where BillStatus="DELIVERED"');
                                
//dd($data);
foreach ($invoiceDetails as $obj){
    $productDetails=DB::select('select * from vw_customersale_invoice where InvoiceNumber='.$obj->InvoiceNumber);
    $innerProducts='';
    foreach($productDetails as $p){
      $innerProducts=$innerProducts.'  
      <div class="card-body text-center">
          <ul>
              <li>
                  <div class="">
                      '.$p->ProductName.' &times; <strong style="color: red;"> '.$p->Quantity.'</strong>
                  </div></li>
                  </ul>
                 
                  
                     
      </div>';
    //   <div class="remarks">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
    //                   Commodi, reprehenderit.</div>
    }
    //$ProductName=$obj->ProductName;
    $contact=$obj->ReceiversContact;
    $customerName=$obj->ReceiversNames;
   
    
    $IN=$obj->InvoiceNumber;
    $TotalAmount=$obj->TotalAmount;

    $Allcards=$Allcards.'   
    <div class="col-md-4">
    <div class="card" id="FirstCard">
        <div class="card-header">
            <div style="font-weight: 900;  font-size: 19px; color: #ffffff;" class="cardHeader-left">
            Order Number#  '.$IN.'  <br>
            
            
            </div>
            <div style="font-weight: 900; font-size: /19px;  color: #ffffff;" class="cardHeader-right">
                
        
            </div>
            <div class="clear"></div>
        </div>
        <div class="card-header ">
            <div class="cardHeader-left" style="font-weight: 600;">
            
            </div>
            <div  style="font-weight: 600; class="cardHeader-left" >
            Customer Name:  '.$customerName.'
             </div>
            <div class="clear"></div>
        </div>
        <div class="card-header text-left" style="font-weight: 500;">
           Address  '.$obj->ReceiversAddress.'
        </div>

        '.$innerProducts.'
            Total Amount:'.$TotalAmount.'
        <div class="card-footer text-center">
        <button class="btn btn-danger">Cancel</button>
        <button class="btn btn-success" onclick="getID('.$obj->InvoiceNumber.')">Received</button>
            </div>                             
        </div>
        </div>
        </div>
       
    
                '   
             ;
        }


        return $Allcards;
    }
}


