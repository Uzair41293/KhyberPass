<?php

namespace App\Http\Controllers;
use App\Http\Controllers\salesflowController;
use Illuminate\Http\Request;
use DB;
class loyaltyManagmentController extends Controller
{
    public static function billToRewardsConversion($amount,$TID){
        $convertionRate=self::getConversionRate("USD");
      $amountToConvertedInCoins=  self::PercentageOnBillAmount($amount);
      $coinsGenerated=$convertionRate*$amountToConvertedInCoins;

      //query for insert;

      DB::table('tbl_coin_generation')->insertGetId([
        'TID'=>$TID,
        'Amount'=>$amount,
        'ConversionRate'=>$convertionRate,
        'CoinsGenerated'=>$coinsGenerated
        ]);

    }
    public static function getConversionRate($Curr){

        return 100;
    }
    public static function PercentageOnBillAmount($amount){

       return $amount*(10/100);
        
    }
}
