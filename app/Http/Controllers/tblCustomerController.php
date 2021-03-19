<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\salesflow;
use DB;
class tblCustomerController extends Controller
{
    
    public function customerinfo(Request $request, $CO){


        $obj=json_decode($CO);
        $customerName=$obj[0];
        $customeradd=$obj[1];
        $customercon=$obj[2];


        self:: insertintblcustomeinformation($customerName,$customeradd,$customercon);

       // return "Getting from controller".$obj[0];
    }
    public function insertintblcustomeinformation(
        
        $CCustomerName,
        $CAddress,
        $CContect


        ){
            $result= DB::insert('insert into customeinformation (CustomerName,Address,
            Contect)
            value(?,?,?)',
            [$CCustomerName, $CAddress, $CContect]);
            
            
            if ($result==1){
    
            //print("customer add");
            
    
    
            }

    }


    public static function addCustomer(Request $request, $CO){
        $ata=json_decode($CO);
        
        $customerName = $ata[0];
        $address = $ata[1];
        $contact = $ata[2];
        $refID = $ata[3];
        $rank = $ata[4];

        $CID = DB::table('customeinformation')->insertGetId([
          'CustomerName'=>$customerName,
          'Address'=>$address,
          'Contect'=>$contact,
          'rank'=>$rank,
          'Balance'=>"150",
          ]);
        if($refID!=""){
            $re = DB::table('tbl_referred_customer')
            ->insert([
              'ReferredCustomerID'=>$CID,
              'ReferredByID'=>$refID,
              'PercentageDiscount'=>"10",
              ]);
        }

        return $CID;
        
    }

    public static function customerTree($CID){
        
        $rank = DB::table('customeinformation')
        ->where('CustomerID', '=', $CID)
        ->first()->Rank;

        $name = DB::table('customeinformation')
        ->where('CustomerID', '=', $CID)
        ->first()->CustomerName;

        $coins = DB::table('customeinformation')
        ->where('CustomerID', '=', $CID)
        ->first()->Balance;

        session(['Rank' => $rank]);
        session(['Coins' => $coins]);
        session(['Name' => $name]);

        
    }
}

